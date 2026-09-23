<?php
/**
 * Session + hamolpol queries for this experiment folder.
 * Required at the top of index.php / show*.php (was molpol_page.php + molpol_data.php).
 * PHP 5.4 compatible.
 *
 * Profiles (from exp_config.php $molpol_profile):
 *   exact  — experiment LIKE '{name}'
 *   prefix — experiment LIKE '{name}%' + commiss types (SBS-style)
 *   'sbs' and 'contains' are aliases of prefix.
 */

if (!defined('MOLPOL_DATA_LOADED')) {
define('MOLPOL_DATA_LOADED', true);

/**
 * Start session once; safe if already active.
 */
function molpol_session_start() {
    if (function_exists('session_status')) {
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        return;
    }
    if (session_id() === '') {
        @session_start();
    }
}

/**
 * Escape a string for use inside a quoted SQL literal.
 */
function molpol_sql_str($con, $value) {
    return mysqli_real_escape_string($con, (string) $value);
}

function molpol_normalize_profile($profile) {
    $p = strtolower(trim((string) $profile));
    if ($p === 'sbs' || $p === 'prefix' || $p === 'contains') {
        return 'prefix';
    }
    return 'exact';
}

/**
 * Does this row belong to the current experiment app?
 * exact: PREX-II / CREX equality. prefix: original SBS strpos (SBS-GMn, …).
 */
function molpol_experiment_matches($rowExp, $expname = null, $profile = null) {
    if ($expname === null || $expname === '') {
        $expname = isset($GLOBALS['expname']) ? $GLOBALS['expname'] : '';
    }
    if ($profile === null || $profile === '') {
        $profile = isset($GLOBALS['MOLPOL_PROFILE']) ? $GLOBALS['MOLPOL_PROFILE'] : 'exact';
    }
    $profile = molpol_normalize_profile($profile);
    $rowExp = (string) $rowExp;
    $expname = (string) $expname;
    if ($expname === '') {
        return false;
    }
    if ($profile === 'prefix') {
        return strpos($rowExp, $expname) !== false;
    }
    return $rowExp === $expname;
}

/**
 * Run the classic data_pull queries and store into $_SESSION.
 *
 * Column lists match the production schema (SCHEMADUMP).
 *
 * @param mysqli $con
 * @param string $expname
 * @param string $profile  exact|prefix|sbs|contains
 */
function molpol_load_into_session($con, $expname, $profile) {
    $profile = molpol_normalize_profile($profile);
    $expEsc = molpol_sql_str($con, $expname);

    if ($profile === 'prefix') {
        $expLike = $expEsc . '%';
        $groupTypeSql = "(moller_run_details.rundet_type LIKE 'beam_pol'"
            . " OR moller_run_details.rundet_type LIKE 'scan_rates'"
            . " OR moller_run_details.rundet_type LIKE 'false_asym'"
            . " OR moller_run_details.rundet_type LIKE 'commiss')"
            . " AND moller_run_details.rundet_type NOT LIKE 'test'"
            . " AND moller_run_details.rundet_type NOT LIKE 'junk'";
        $dayTypeSql = "(moller_run_details.rundet_type LIKE 'beam_pol'"
            . " OR moller_run_details.rundet_type LIKE 'scan_rates'"
            . " OR moller_run_details.rundet_type LIKE 'false_asym'"
            . " OR moller_run_details.rundet_type LIKE 'pending'"
            . " OR moller_run_details.rundet_type LIKE 'commiss')"
            . " AND moller_run_details.rundet_type NOT LIKE 'test'"
            . " AND moller_run_details.rundet_type NOT LIKE 'junk'";
    } else {
        // exact / prex / crex — PREX-style LIKE without trailing %
        $expLike = $expEsc;
        // Original PREX/CREX operator precedence preserved on purpose.
        $groupTypeSql = "moller_run_details.rundet_type LIKE 'beam_pol'"
            . " OR moller_run_details.rundet_type LIKE 'scan_rates'"
            . " OR moller_run_details.rundet_type LIKE 'false_asym'"
            . " AND moller_run_details.rundet_type NOT LIKE 'test'"
            . " AND moller_run_details.rundet_type NOT LIKE 'junk'";
        $dayTypeSql = "moller_run_details.rundet_type LIKE 'beam_pol'"
            . " OR moller_run_details.rundet_type LIKE 'scan_rates'"
            . " OR moller_run_details.rundet_type LIKE 'false_asym'"
            . " OR moller_run_details.rundet_type LIKE 'pending'"
            . " AND moller_run_details.rundet_type NOT LIKE 'test'"
            . " AND moller_run_details.rundet_type NOT LIKE 'junk'";
    }
    // showgroup/showbyday expect $_SESSION['groupdata'] even on PREX/CREX.
    $wantGroupdata = true;

    $rundataquery = "SELECT id_run, run_leftrate, run_rightrate, run_coinrate, run_accrate,"
        . " run_bcm, run_clock, run_asym, run_asymerr, run_anpow, run_ptarg, run_pol, run_polerr,"
        . " run_qasym, run_qasymerr, run_qpedused, run_deadtimetau, rundet_deadtimetau, rundet_day,"
        . " rundet_anpow, rundet_type, FLOOR(rundet_pcrex_group), rundet_comment, rundet_qpedset,"
        . " set_target, set_ihwp, set_hel_pattern, set_hel_freq, experiment"
        . " FROM moller_run, moller_run_details, moller_settings"
        . " WHERE moller_run.id_run=moller_run_details.id_rundet"
        . " AND moller_run.id_run=moller_settings.id_set_run"
        . " AND moller_run_details.experiment LIKE '" . $expLike . "'"
        . " ORDER BY id_run ASC";

    $rungroupquery = "SELECT DISTINCT FLOOR(rundet_pcrex_group), rundet_type"
        . " FROM moller_run_details WHERE " . $groupTypeSql
        . " AND moller_run_details.experiment LIKE '" . $expLike . "'";

    $rundayquery = "SELECT DISTINCT rundet_day FROM moller_run_details WHERE " . $dayTypeSql
        . " AND moller_run_details.experiment LIKE '" . $expLike . "'";

    $rundataresults = $con->query($rundataquery);
    $rungroupresults = $con->query($rungroupquery);
    $rundayresults = $con->query($rundayquery);

    $rundata = array();
    if ($rundataresults) {
        while ($row = mysqli_fetch_assoc($rundataresults)) {
            $rundata[] = $row;
        }
    }

    $grouplist = array();
    if ($rungroupresults) {
        while ($row = mysqli_fetch_assoc($rungroupresults)) {
            $grouplist[] = array(
                $row['FLOOR(rundet_pcrex_group)'],
                $row['rundet_type'],
            );
        }
    }
    sort($grouplist);

    $daylist = array();
    if ($rundayresults) {
        while ($row = mysqli_fetch_assoc($rundayresults)) {
            $daylist[] = $row['rundet_day'];
        }
    }
    sort($daylist);

    $_SESSION['rundata'] = $rundata;
    $_SESSION['rungroup'] = $grouplist;
    $_SESSION['runday'] = $daylist;
    $_SESSION['molpol_exp'] = $expname;
    $_SESSION['molpol_profile'] = $profile;

    if ($wantGroupdata) {
        $groupstatquery = "SELECT id_group, group_date, group_type, group_hwp, group_wein,"
            . " group_asym, group_asym_err, group_asymgaus, group_asymgaus_err, group_asymgaus_chi2ndf,"
            . " group_block_asym, group_block_asym_err, group_block_asymgauss, group_block_asymgauss_err,"
            . " group_block_asymgauss_chi2ndf, group_analysis_timestamp, group_target, group_anpow,"
            . " group_targpol, group_dttau"
            . " FROM pcrex_groups WHERE (group_type LIKE 'beam_pol%' OR group_type = 'false_asym'"
            . " OR group_type = 'spin_dance') ORDER BY id_group ASC";
        $groupstatresults = $con->query($groupstatquery);
        $groupdata = array();
        if ($groupstatresults) {
            while ($row = mysqli_fetch_assoc($groupstatresults)) {
                $groupdata[] = $row;
            }
        }
        $_SESSION['groupdata'] = $groupdata;
    }
}

/**
 * Ensure $_SESSION has this experiment's arrays. Re-pull from DB if missing or forced.
 *
 * @param string $expDir   Absolute path to this experiment folder
 * @param string $profile
 * @param bool   $force
 */
function molpol_ensure_data($expDir, $profile, $force = false) {
    global $expname, $explogo, $exptext, $expaggregatedglob, $molpol_profile, $con;
    global $run_plots_web_base, $run_plots_fs_base;
    global $group_plots_web_base, $group_plots_fs_base;
    global $burst_plots_web_base, $burst_plots_fs_base;
    global $aggregated_plots_web_base, $aggregated_plots_fs_base;

    molpol_session_start();

    $expDir = rtrim((string) $expDir, '/');
    $GLOBALS['MOLPOL_EXP_DIR'] = $expDir;

    require $expDir . '/exp_config.php';
    if ($profile === '' || $profile === null) {
        $profile = isset($molpol_profile) ? $molpol_profile : 'exact';
    }
    $profile = molpol_normalize_profile($profile);
    $GLOBALS['MOLPOL_PROFILE'] = $profile;

    // exp_config.php assigns locals in this function scope — publish for page scripts.
    $GLOBALS['expname'] = $expname;
    $GLOBALS['explogo'] = $explogo;
    $GLOBALS['exptext'] = $exptext;
    $GLOBALS['expaggregatedglob'] = isset($expaggregatedglob) ? $expaggregatedglob : '';
    $GLOBALS['run_plots_web_base'] = isset($run_plots_web_base) ? $run_plots_web_base : '../analysis/files/';
    $GLOBALS['run_plots_fs_base'] = isset($run_plots_fs_base) ? $run_plots_fs_base : '';
    $GLOBALS['group_plots_web_base'] = isset($group_plots_web_base) ? $group_plots_web_base : '../analysis/group/';
    $GLOBALS['group_plots_fs_base'] = isset($group_plots_fs_base) ? $group_plots_fs_base : '';
    $GLOBALS['burst_plots_web_base'] = isset($burst_plots_web_base) ? $burst_plots_web_base : '../analysis/burst/';
    $GLOBALS['burst_plots_fs_base'] = isset($burst_plots_fs_base) ? $burst_plots_fs_base : '';
    $GLOBALS['aggregated_plots_web_base'] = isset($aggregated_plots_web_base) ? $aggregated_plots_web_base : '../analysis/aggregated/';
    $GLOBALS['aggregated_plots_fs_base'] = isset($aggregated_plots_fs_base) ? $aggregated_plots_fs_base : '';
    $need = $force
        || empty($_SESSION['rundata'])
        || !isset($_SESSION['molpol_exp'])
        || $_SESSION['molpol_exp'] !== $expname
        || (isset($_SESSION['molpol_profile']) && $_SESSION['molpol_profile'] !== $profile);

    if (empty($_SESSION['groupdata'])) {
        $need = true;
    }

    if (!$need) {
        return;
    }

    require $expDir . '/db_config.php';
    if (!$con) {
        return;
    }
    molpol_load_into_session($con, $expname, $profile);
    $con->close();
    $con = null;
}

/**
 * Legacy name used by show*.php ?refresh= handlers.
 */
function datapull() {
    $dir = isset($GLOBALS['MOLPOL_EXP_DIR']) ? $GLOBALS['MOLPOL_EXP_DIR'] : dirname(__FILE__);
    $profile = isset($GLOBALS['MOLPOL_PROFILE']) ? $GLOBALS['MOLPOL_PROFILE'] : 'exact';
    molpol_ensure_data($dir, $profile, true);
}

/**
 * @param mixed $value
 * @param mixed $default
 * @return mixed
 */
function molpol_get($key, $default = '') {
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

/**
 * Positive integer id for run/group directory names (digits only).
 *
 * @param mixed $value
 * @return int
 */
function molpol_positive_int_id($value) {
    if ($value === '' || $value === null) {
        return 0;
    }
    if (is_int($value)) {
        return $value > 0 ? $value : 0;
    }
    $s = (string) $value;
    if (!preg_match('/^\d+$/', $s)) {
        return 0;
    }
    $n = (int) $s;
    return $n > 0 ? $n : 0;
}

/**
 * Normalize a plot URL/path base to one trailing slash (or empty).
 */
function molpol_plots_base_slash($base) {
    $base = trim((string) $base);
    if ($base === '') {
        return '';
    }
    return rtrim($base, '/') . '/';
}

/**
 * Filesystem directory + web prefix for a plot folder.
 *
 * Relative web_base is resolved from the experiment folder (the historic
 * ../analysis/files/run_{id} layout). Site-absolute web_base uses
 * DOCUMENT_ROOT unless fs_base is set. http(s) web_base requires fs_base.
 *
 * @param string $fsBase   Absolute on-disk plots root, or empty
 * @param string $webBase  URL prefix (img src)
 * @param string $subdir   Folder under the root (empty = the root itself)
 * @return array           array($fsDir, $webDir) — webDir has a trailing slash
 */
function molpol_resolve_plot_location($fsBase, $webBase, $subdir) {
    $expDir = isset($GLOBALS['MOLPOL_EXP_DIR']) ? $GLOBALS['MOLPOL_EXP_DIR'] : dirname(__FILE__);
    $webBase = molpol_plots_base_slash($webBase);
    $subdir = trim((string) $subdir, '/');
    $fsBase = trim((string) $fsBase);
    $relFs = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $subdir);

    if ($fsBase !== '') {
        $fsDir = rtrim($fsBase, "/\\");
        if ($relFs !== '') {
            $fsDir .= DIRECTORY_SEPARATOR . $relFs;
        }
    } elseif ($webBase === '' || preg_match('#^https?://#i', $webBase)) {
        $fsDir = '';
    } elseif (substr($webBase, 0, 1) === '/') {
        $docRoot = rtrim(isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : '', "/\\");
        $path = parse_url($webBase, PHP_URL_PATH);
        if (!is_string($path) || $path === '') {
            $path = $webBase;
        }
        $rel = trim(str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path), DIRECTORY_SEPARATOR);
        $fsDir = $docRoot . DIRECTORY_SEPARATOR . $rel;
        if ($relFs !== '') {
            $fsDir .= DIRECTORY_SEPARATOR . $relFs;
        }
    } else {
        $fsDir = $expDir . DIRECTORY_SEPARATOR . str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, rtrim($webBase, '/'));
        if ($relFs !== '') {
            $fsDir .= DIRECTORY_SEPARATOR . $relFs;
        }
    }

    $webDir = $webBase;
    if ($subdir !== '') {
        $webDir .= $subdir . '/';
    }
    return array($fsDir, $webDir);
}

/** @return array array($fsDir, $webDir) for run_{id} under the run plots root */
function molpol_run_plot_paths($runId) {
    $web = isset($GLOBALS['run_plots_web_base']) ? $GLOBALS['run_plots_web_base'] : '../analysis/files/';
    $fs = isset($GLOBALS['run_plots_fs_base']) ? $GLOBALS['run_plots_fs_base'] : '';
    return molpol_resolve_plot_location($fs, $web, 'run_' . (int) $runId);
}

/** @return array array($fsDir, $webDir) for group_{id} under the group plots root */
function molpol_group_plot_paths($groupId) {
    $web = isset($GLOBALS['group_plots_web_base']) ? $GLOBALS['group_plots_web_base'] : '../analysis/group/';
    $fs = isset($GLOBALS['group_plots_fs_base']) ? $GLOBALS['group_plots_fs_base'] : '';
    return molpol_resolve_plot_location($fs, $web, 'group_' . (int) $groupId);
}

/** @return array array($fsDir, $webDir) for aggregated experiment plots */
function molpol_aggregated_plot_paths() {
    $web = isset($GLOBALS['aggregated_plots_web_base']) ? $GLOBALS['aggregated_plots_web_base'] : '../analysis/aggregated/';
    $fs = isset($GLOBALS['aggregated_plots_fs_base']) ? $GLOBALS['aggregated_plots_fs_base'] : '';
    return molpol_resolve_plot_location($fs, $web, '');
}

/**
 * Burst comparison PNG for a group.
 *
 * @return array array($fsFile, $webSrc)
 */
function molpol_burst_plot_file($groupId) {
    $web = isset($GLOBALS['burst_plots_web_base']) ? $GLOBALS['burst_plots_web_base'] : '../analysis/burst/';
    $fs = isset($GLOBALS['burst_plots_fs_base']) ? $GLOBALS['burst_plots_fs_base'] : '';
    $resolved = molpol_resolve_plot_location($fs, $web, '');
    $name = 'Burst_Comparison_Group_' . (int) $groupId . '.png';
    $fsFile = ($resolved[0] === '') ? '' : rtrim($resolved[0], "/\\") . DIRECTORY_SEPARATOR . $name;
    return array($fsFile, $resolved[1] . $name);
}

/**
 * PNG plot files in an analysis directory (top level only; path must stay inside dir).
 *
 * @param string $dirPath  Filesystem path to the plot folder
 * @param bool   $skipFits Skip *-Fits.png (group plot convention)
 * @return array List of absolute filesystem paths
 */
function molpol_plot_files_in_dir($dirPath, $skipFits = false) {
    if (!is_dir($dirPath)) {
        return array();
    }
    $realBase = realpath($dirPath);
    if ($realBase === false) {
        return array();
    }
    $realBase = rtrim($realBase, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

    $matches = glob($realBase . '*.png');
    if (!is_array($matches)) {
        return array();
    }

    $out = array();
    foreach ($matches as $path) {
        $real = realpath($path);
        if ($real === false || !is_file($real)) {
            continue;
        }
        if (strpos($real, $realBase) !== 0) {
            continue;
        }
        $name = basename($real);
        if ($skipFits && strpos($name, '-Fits.png') !== false) {
            continue;
        }
        $out[$name] = $real;
    }
    ksort($out);
    return array_values($out);
}

/**
 * HTML for run/group plot images, or an italic empty message.
 *
 * Only .png files are emitted as &lt;img&gt; (no scripts, markup, or other types).
 *
 * @param string $fsDir   Filesystem directory
 * @param string $webDir  URL path prefix for img src (trailing slash)
 * @param bool   $skipFits
 * @return string
 */
function molpol_render_plot_gallery($fsDir, $webDir, $skipFits = false) {
    $files = molpol_plot_files_in_dir($fsDir, $skipFits);
    $html = "<div class='plots-hold'>\n";
    if (!$files) {
        $html .= "<p class='plots-empty'><em>No plots to display.</em></p>\n";
    } else {
        foreach ($files as $path) {
            $src = $webDir . basename($path);
            $src = htmlspecialchars($src, ENT_QUOTES, 'UTF-8');
            $html .= "<img src='" . $src . "' alt='' class='plot-image' />\n";
        }
    }
    $html .= "</div>\n";
    return $html;
}

/**
 * PNG plot files matching a basename glob inside one directory (aggregated plots).
 *
 * @param string $dirPath
 * @param string $basenamePattern  e.g. aggregated_prex_*.png
 * @return array
 */
function molpol_plot_files_glob($dirPath, $basenamePattern) {
    if (!preg_match('/^aggregated_[a-z0-9_-]+\*\.png$/i', $basenamePattern)) {
        return array();
    }
    if (!is_dir($dirPath)) {
        return array();
    }
    $realBase = realpath($dirPath);
    if ($realBase === false) {
        return array();
    }
    $realBase = rtrim($realBase, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

    $matches = glob($realBase . $basenamePattern);
    if (!is_array($matches)) {
        return array();
    }

    $out = array();
    foreach ($matches as $path) {
        $real = realpath($path);
        if ($real === false || !is_file($real)) {
            continue;
        }
        if (strpos($real, $realBase) !== 0) {
            continue;
        }
        if (strtolower(substr($real, -4)) !== '.png') {
            continue;
        }
        $out[basename($real)] = $real;
    }
    ksort($out);
    return array_values($out);
}

/**
 * Aggregated experiment plots (PREX-II / CREX), or empty message.
 *
 * @param string $fsDir
 * @param string $webDir  URL path prefix (trailing slash)
 * @param string $exp     PREX-II or CREX
 * @return string
 */
function molpol_render_aggregated_plot_gallery($fsDir, $webDir, $exp) {
    $pattern = '';
    if (isset($GLOBALS['expaggregatedglob']) && $GLOBALS['expaggregatedglob'] !== '') {
        $pattern = $GLOBALS['expaggregatedglob'];
    } elseif ($exp === 'CREX') {
        $pattern = 'aggregated_crex_*.png';
    } elseif ($exp === 'PREX-II') {
        $pattern = 'aggregated_prex_*.png';
    }

    $html = "<div id='aggregatedPlots' class='plots-hold'>\n";
    if ($pattern === '') {
        $html .= "<p class='plots-empty'><em>No plots to display.</em></p>\n";
    } else {
        $files = molpol_plot_files_glob($fsDir, $pattern);
        if (!$files) {
            $html .= "<p class='plots-empty'><em>No plots to display.</em></p>\n";
        } else {
            foreach ($files as $path) {
                $src = $webDir . basename($path);
                $src = htmlspecialchars($src, ENT_QUOTES, 'UTF-8');
                $html .= "<img src='" . $src . "' alt='' class='plot-image' />\n";
            }
        }
    }
    $html .= "</div>\n";
    return $html;
}

} // MOLPOL_DATA_LOADED

/* Bootstrap: session, exp_config, DB → $_SESSION, then buffer stray whitespace. */
$expDir = dirname(__FILE__);
require $expDir . '/exp_config.php';

if (!isset($molpol_profile) || $molpol_profile === '') {
    $molpol_profile = isset($MOLPOL_PROFILE) ? $MOLPOL_PROFILE : 'exact';
}

$forceRefresh = (molpol_get('refresh', '') !== '');
molpol_ensure_data($expDir, $molpol_profile, $forceRefresh);

if (!ob_get_level()) {
    ob_start();
}
