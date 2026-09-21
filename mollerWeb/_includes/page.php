<?php
/**
 * Caretaker page header — set these at the top of a document, then PageStart().
 *
 * Example (see daq/e_upgrade/electronics_upgrade.php):
 *
 *   PageTrail([
 *       ['label' => 'DAQ', 'url' => 'daq/'],
 *       ['label' => 'Electronics Upgrade', 'url' => 'daq/e_upgrade/'],
 *   ]);
 *   // → Home ≪ DAQ ≪ Electronics Upgrade
 *   PageTitle("The Sign of Beam Polarization");
 *   PageSubtitle();                    // optional one-liner; omit or leave empty
 *   LongDescription("Optional longer blurb before the page body / tables.");
 *   Author("Eugene Chudakov");
 *   PageDate("Dec 04, 2000");          // not Date — that name is taken by PHP's date()
 *   PageStart("analysis/");            // sidebar section: analysis/ links/ targets/ ...
 *
 *   ... HTML body ...
 *
 *   PageEnd();
 *
 * Empty Author() / PageDate() / PageSubtitle() / LongDescription() / PageTrail() are skipped.
 * LongDescription is escaped plain text; use newlines for extra paragraphs.
 * PageTrail / PageTrailAuto: ancestors only (current title is the h1). Home is
 * prepended automatically. Separator is "≪" (U+226A).
 *
 * PageStart() calls PageTrailAuto() when no trail was set. Folder labels come
 * from $homeCards, then $trailLabels in config.php, then a humanized name.
 * Call PageTrail([...]) before PageStart() for a custom trail.
 */

if (defined('MOLLER_PAGE_HELPERS')) {
    return;
}
define('MOLLER_PAGE_HELPERS', true);

$GLOBALS['_moller_page'] = [
    'title' => '',
    'subtitle' => '',
    'longdesc' => '',
    'author' => '',
    'date' => '',
    'trail' => [],
];

function _page_set($key, $value) {
    $GLOBALS['_moller_page'][$key] = trim((string) $value);
}

function PageTitle($text) {
    _page_set('title', $text);
}

function PageSubtitle($text = '') {
    _page_set('subtitle', $text);
}

function LongDescription($text = '') {
    _page_set('longdesc', $text);
}

function Author($text = '') {
    _page_set('author', $text);
}

function PageDate($text = '') {
    _page_set('date', $text);
}

/**
 * Ancestor crumbs for the masthead (above the title). Current page is the h1, not a crumb.
 *
 *   PageTrail([
 *       ['label' => 'DAQ', 'url' => 'daq/'],
 *       ['label' => 'Electronics Upgrade', 'url' => 'daq/e_upgrade/'],
 *   ]);
 *
 * PageStart() fills this via PageTrailAuto() when the trail is still empty.
 *
 * Aliases: text→label, href→url. A crumb with an empty url renders as plain text.
 *
 * @param list<array{label?:string,text?:string,url?:string,href?:string}> $crumbs
 */
function PageTrail(array $crumbs = []) {
    $clean = [];
    foreach ($crumbs as $c) {
        if (!is_array($c)) {
            continue;
        }
        $label = '';
        if (isset($c['label']) && $c['label'] !== null && $c['label'] !== '') {
            $label = trim((string) $c['label']);
        } elseif (isset($c['text']) && $c['text'] !== null && $c['text'] !== '') {
            $label = trim((string) $c['text']);
        }
        if ($label === '') {
            continue;
        }
        $url = '';
        if (isset($c['url']) && $c['url'] !== null && $c['url'] !== '') {
            $url = trim((string) $c['url']);
        } elseif (isset($c['href']) && $c['href'] !== null && $c['href'] !== '') {
            $url = trim((string) $c['href']);
        }
        $clean[] = ['label' => $label, 'url' => $url];
    }
    $GLOBALS['_moller_page']['trail'] = $clean;
}

/**
 * Build PageTrail() from the current script path back toward the site root.
 *
 *   PageTrailAuto();
 *   // daq/e_upgrade/plu_module.php → Home ≪ DAQ ≪ Electronics Upgrade
 *
 * On an index.php, the last directory is treated as the current page (h1), so it
 * is omitted from the trail. Home is still prepended when the trail renders.
 *
 * Labels resolve in order: $labelOverrides, $trailLabels (config), $homeCards,
 * then a simple humanized folder name.
 *
 * @param array<string,string> $labelOverrides  path prefix or segment => label
 */
function PageTrailAuto(array $labelOverrides = []) {
    $rel = _page_script_relpath();
    if ($rel === '') {
        PageTrail([]);
        return;
    }

    $parts = explode('/', $rel);
    $file = array_pop($parts);
    $isIndex = ($file === 'index.php' || $file === 'index.html');
    if ($isIndex && $parts) {
        array_pop($parts);
    }

    $crumbs = [];
    $accum = [];
    foreach ($parts as $segment) {
        if ($segment === '' || $segment === '.' || $segment === '..') {
            continue;
        }
        // Skip caretaker / private path segments in the trail.
        if ($segment[0] === '_') {
            $accum[] = $segment;
            continue;
        }
        $accum[] = $segment;
        $prefix = implode('/', $accum);
        // Only link folders that have an index; skip the rest so crumbs do not 404.
        $dirPath = (defined('MOLLER_ROOT') ? MOLLER_ROOT : '') . '/' . $prefix;
        if (!is_file($dirPath . '/index.php') && !is_file($dirPath . '/index.html')) {
            continue;
        }
        $crumbs[] = [
            'label' => _page_trail_label($prefix, $segment, $labelOverrides),
            'url'   => $prefix . '/',
        ];
    }
    PageTrail($crumbs);
}

/**
 * Script path relative to MOLLER_ROOT, using forward slashes (e.g. daq/e_upgrade/plu_module.php).
 */
function _page_script_relpath() {
    if (defined('MOLLER_ROOT') && !empty($_SERVER['SCRIPT_FILENAME'])) {
        $script = realpath($_SERVER['SCRIPT_FILENAME']);
        $root = realpath(MOLLER_ROOT);
        if ($script !== false && $root !== false) {
            $rootPrefix = $root . DIRECTORY_SEPARATOR;
            if (str_starts_with($script, $rootPrefix)) {
                return str_replace('\\', '/', substr($script, strlen($rootPrefix)));
            }
        }
    }

    global $siteBase;
    $scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
    $uri = str_replace('\\', '/', (string) $scriptName);
    $base = trim((string) $siteBase, '/');
    if ($base !== '') {
        $prefix = '/' . $base . '/';
        if (str_starts_with($uri, $prefix)) {
            return ltrim(substr($uri, strlen($prefix)), '/');
        }
    }
    return ltrim($uri, '/');
}

/**
 * @param array<string,string> $overrides
 */
function _page_trail_label($pathPrefix, $segment, array $overrides) {
    global $trailLabels, $homeCards;

    $pathPrefix = trim((string) $pathPrefix, '/');
    $segment = (string) $segment;

    foreach ([$pathPrefix, $segment] as $key) {
        if ($key !== '' && isset($overrides[$key]) && $overrides[$key] !== '') {
            return trim((string) $overrides[$key]);
        }
    }

    if (isset($trailLabels) && is_array($trailLabels)) {
        if ($pathPrefix !== '' && !empty($trailLabels[$pathPrefix])) {
            return trim((string) $trailLabels[$pathPrefix]);
        }
        if ($segment !== '' && !empty($trailLabels[$segment])) {
            return trim((string) $trailLabels[$segment]);
        }
    }

    $href = $pathPrefix . '/';
    if (isset($homeCards) && is_array($homeCards)) {
        foreach ($homeCards as $card) {
            if (!is_array($card) || empty($card['href'])) {
                continue;
            }
            if ($card['href'] === $href || $card['href'] === $pathPrefix) {
                $label = isset($card['label']) ? $card['label'] : $segment;
                return trim((string) $label);
            }
        }
    }

    $human = str_replace(array('_', '-'), ' ', $segment);
    $collapsed = preg_replace('/\s+/', ' ', $human);
    if ($collapsed !== null) {
        $human = $collapsed;
    }
    return ucwords(trim($human));
}

function PageStart($nav = 'index.php') {
    $p = $GLOBALS['_moller_page'];
    if (empty($p['trail']) || !is_array($p['trail'])) {
        PageTrailAuto();
        $p = $GLOBALS['_moller_page'];
    }
    $title = $p['title'] !== '' ? $p['title'] : 'Untitled';
    layout_start($title, $nav);
    echo '<header class="page-masthead"><div>';
    if (!empty($p['trail']) && is_array($p['trail'])) {
        $trail = $p['trail'];
        $firstLabel = isset($trail[0]['label']) ? strcasecmp($trail[0]['label'], 'Home') === 0 : false;
        if (!$firstLabel) {
            array_unshift($trail, ['label' => 'Home', 'url' => 'index.php']);
        }
        $parts = [];
        foreach ($trail as $crumb) {
            $label = htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8');
            $url = $crumb['url'];
            if ($url !== '') {
                $href = preg_match('#^https?://#i', $url) ? $url : site_url($url);
                $parts[] = '<a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '">' . $label . '</a>';
            } else {
                $parts[] = '<span>' . $label . '</span>';
            }
        }
        if ($parts) {
            echo '<nav class="page-trail" aria-label="Breadcrumb">'
                . implode('<span class="page-trail-sep" aria-hidden="true"> ≪ </span>', $parts)
                . '</nav>';
        }
    }
    echo '<h1>' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</h1>';
    if ($p['subtitle'] !== '') {
        echo '<p class="subtitle">' . htmlspecialchars($p['subtitle'], ENT_QUOTES, 'UTF-8') . '</p>';
    }
    if ($p['longdesc'] !== '') {
        $paras = preg_split("/\n\s*\n/", $p['longdesc']) ?: [$p['longdesc']];
        echo '<div class="page-longdesc">';
        foreach ($paras as $para) {
            $para = trim($para);
            if ($para === '') {
                continue;
            }
            echo '<p>' . nl2br(htmlspecialchars($para, ENT_QUOTES, 'UTF-8'), false) . '</p>';
        }
        echo '</div>';
    }
    $meta = [];
    if ($p['author'] !== '') {
        $meta[] = htmlspecialchars($p['author'], ENT_QUOTES, 'UTF-8');
    }
    if ($p['date'] !== '') {
        $meta[] = htmlspecialchars($p['date'], ENT_QUOTES, 'UTF-8');
    }
    if ($meta) {
        echo '<p class="page-meta">' . implode(' · ', $meta) . '</p>';
    }
    echo '</div></header>';
}

function PageEnd() {
    layout_end();
}
