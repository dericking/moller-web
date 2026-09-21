<?php
/**
 * One-shot lab helper: pull a hamolpol slice for the local Docker seed.
 *
 * Upload next to an experiment db_credentials.php on a host that can reach halladb,
 * or keep this file under data/ and use PREX-II/db_credentials.php (same DB user).
 * open in a browser, copy the SQL into docker/db/init/02-seed.sql
 * (or pipe into local MariaDB).
 *
 * Slice (inclusive):
 *   Run ranges:
 *     18264–18280  (original)
 *     18292–18302
 *     17901–17917
 *     16924–16928
 *   Groups:
 *     1088, 1090, 1068, 1017
 *
 * Also includes any runs whose FLOOR(rundet_pcrex_group) is one of those
 * groups, so showgroup.php has matching run rows.
 *
 * PHP 5.4 safe. Read-only. Do not leave on a public URL longer than needed.
 *
 * Optional:
 *   ?format=sql   — text/plain SQL only
 *   ?format=html  — summary + textarea (default)
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

$runRanges = array(
    array(18264, 18280),
    array(18292, 18302),
    array(17901, 17917),
    array(16924, 16928),
);

$groupIds = array(1088, 1090, 1068, 1017);

$cred = dirname(__FILE__) . '/PREX-II/db_credentials.php';
if (!is_readable($cred)) {
    header('Content-Type: text/plain; charset=utf-8');
    die('Copy db_credentials.php.example to PREX-II/db_credentials.php and fill in the CHANGEME_ values.');
}
require $cred;

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    header('Content-Type: text/plain; charset=utf-8');
    die('could not connect database: ' . mysqli_connect_error());
}
mysqli_set_charset($con, 'utf8');

$runTables = array(
    'moller_run' => 'id_run',
    'moller_run_details' => 'id_rundet',
    'moller_settings' => 'id_set_run',
    'moller_run_magnets' => 'id_runmag',
    'moller_run_epics_sbs' => 'run_id_epcs',
    'molana_accidental_analysis' => 'id_run',
    'pcrex_run_asym_burst' => 'id_asym',
    'pcrex_run_burst_analysis' => 'id_runburst',
);

function sql_literal($con, $value) {
    if ($value === null) {
        return 'NULL';
    }
    if (is_string($value) && $value !== '' && preg_match('/^-?\d+$/', $value)) {
        return $value;
    }
    if (is_string($value) && $value !== '' && preg_match('/^-?\d+\.\d+$/', $value)) {
        return $value;
    }
    if (is_int($value)) {
        return (string) $value;
    }
    if (is_float($value)) {
        return rtrim(rtrim(sprintf('%.14F', $value), '0'), '.');
    }
    return "'" . mysqli_real_escape_string($con, (string) $value) . "'";
}

function fetch_all_assoc($con, $sql) {
    $res = mysqli_query($con, $sql);
    if ($res === false) {
        return array('error' => mysqli_error($con), 'sql' => $sql, 'rows' => array());
    }
    $rows = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $rows[] = $row;
    }
    mysqli_free_result($res);
    return array('error' => '', 'sql' => $sql, 'rows' => $rows);
}

function rows_to_replace_sql($con, $table, $rows) {
    $out = array();
    $out[] = '-- table `' . $table . '` (' . count($rows) . ' row(s))';
    if (!$rows) {
        $out[] = '-- (no rows)';
        $out[] = '';
        return implode("\n", $out);
    }
    $cols = array_keys($rows[0]);
    $colList = '`' . implode('`, `', $cols) . '`';
    foreach ($rows as $row) {
        $vals = array();
        foreach ($cols as $c) {
            $vals[] = sql_literal($con, isset($row[$c]) ? $row[$c] : null);
        }
        $out[] = 'REPLACE INTO `' . $table . '` (' . $colList . ') VALUES (' . implode(', ', $vals) . ');';
    }
    $out[] = '';
    return implode("\n", $out);
}

function int_list_sql($ids) {
    $clean = array();
    foreach ($ids as $id) {
        $clean[] = (string) (int) $id;
    }
    $clean = array_values(array_unique($clean));
    sort($clean, SORT_NUMERIC);
    return implode(',', $clean);
}

function describe_ranges($runRanges) {
    $parts = array();
    foreach ($runRanges as $r) {
        $parts[] = $r[0] . '-' . $r[1];
    }
    return implode(', ', $parts);
}

/* ---- Resolve run id set: ranges ∪ runs belonging to requested groups ---- */
$rangeClauses = array();
foreach ($runRanges as $r) {
    $rangeClauses[] = sprintf(
        '(`id_rundet` BETWEEN %d AND %d)',
        (int) $r[0],
        (int) $r[1]
    );
}
$groupListSql = int_list_sql($groupIds);
$runIdSql = 'SELECT DISTINCT `id_rundet` AS id_run FROM `moller_run_details` WHERE ('
    . implode(' OR ', $rangeClauses)
    . ') OR (FLOOR(`rundet_pcrex_group`) IN (' . $groupListSql . '))'
    . ' ORDER BY `id_rundet` ASC';

$runIdPack = fetch_all_assoc($con, $runIdSql);
$runIds = array();
if ($runIdPack['error'] === '') {
    foreach ($runIdPack['rows'] as $row) {
        $runIds[] = (int) $row['id_run'];
    }
}
$runIds = array_values(array_unique($runIds));
sort($runIds, SORT_NUMERIC);
$runInSql = $runIds ? int_list_sql($runIds) : 'NULL';

$sections = array();
$summaries = array();

$summaries[] = array(
    'table' => '(run id set)',
    'pk' => 'ranges + groups',
    'count' => count($runIds),
    'error' => $runIdPack['error'],
);

foreach ($runTables as $table => $pk) {
    if (!$runIds) {
        $pack = array('error' => $runIdPack['error'] !== '' ? $runIdPack['error'] : 'no run ids matched', 'sql' => '', 'rows' => array());
    } else {
        $sql = sprintf(
            'SELECT * FROM `%s` WHERE `%s` IN (%s) ORDER BY `%s` ASC',
            $table,
            $pk,
            $runInSql,
            $pk
        );
        $pack = fetch_all_assoc($con, $sql);
    }
    $sections[$table] = $pack;
    $summaries[] = array(
        'table' => $table,
        'pk' => $pk . ' IN (…)',
        'count' => count($pack['rows']),
        'error' => $pack['error'],
    );
}

$groupSql = 'SELECT * FROM `pcrex_groups` WHERE `id_group` IN (' . $groupListSql . ') ORDER BY `id_group` ASC';
$groupPack = fetch_all_assoc($con, $groupSql);
$sections['pcrex_groups'] = $groupPack;
$summaries[] = array(
    'table' => 'pcrex_groups',
    'pk' => 'id_group IN (' . $groupListSql . ')',
    'count' => count($groupPack['rows']),
    'error' => $groupPack['error'],
);

$gBurstSql = 'SELECT * FROM `pcrex_group_burst_analysis` WHERE `id_groupburst` IN (' . $groupListSql . ') ORDER BY `id_groupburst` ASC';
$gBurstPack = fetch_all_assoc($con, $gBurstSql);
$sections['pcrex_group_burst_analysis'] = $gBurstPack;
$summaries[] = array(
    'table' => 'pcrex_group_burst_analysis',
    'pk' => 'id_groupburst IN (' . $groupListSql . ')',
    'count' => count($gBurstPack['rows']),
    'error' => $gBurstPack['error'],
);

$sliceLabel = 'runs ' . describe_ranges($runRanges) . '; groups ' . implode(',', $groupIds);

$sqlBlob = array();
$sqlBlob[] = '-- hamolpol seed slice';
$sqlBlob[] = '-- generated ' . gmdate('Y-m-d H:i:s') . ' UTC';
$sqlBlob[] = '-- host ' . $servername . ' / db ' . $dbname;
$sqlBlob[] = '-- ' . $sliceLabel;
$sqlBlob[] = '-- run ids (' . count($runIds) . '): ' . ($runIds ? implode(',', $runIds) : '(none)');
$sqlBlob[] = '-- REPLACE INTO so re-import is idempotent; schema must already exist.';
$sqlBlob[] = 'SET NAMES utf8;';
$sqlBlob[] = '';

foreach ($sections as $table => $pack) {
    if ($pack['error'] !== '') {
        $sqlBlob[] = '-- ERROR on `' . $table . '`: ' . $pack['error'];
        $sqlBlob[] = '-- SQL was: ' . $pack['sql'];
        $sqlBlob[] = '';
        continue;
    }
    $sqlBlob[] = rows_to_replace_sql($con, $table, $pack['rows']);
}

$sqlText = implode("\n", $sqlBlob);
mysqli_close($con);

$format = isset($_GET['format']) ? strtolower(trim($_GET['format'])) : 'html';
if ($format === 'sql') {
    header('Content-Type: text/plain; charset=utf-8');
    header('Content-Disposition: inline; filename="hamolpol_seed_expanded.sql"');
    echo $sqlText;
    exit;
}

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>hamolpol seed export — expanded slice</title>
  <style>
    body { font-family: Georgia, serif; margin: 1.5rem; max-width: 1100px; line-height: 1.4; }
    code, textarea, pre { font-family: Consolas, Menlo, monospace; font-size: 12px; }
    table { border-collapse: collapse; margin: 0.75rem 0 1.5rem; }
    th, td { border: 1px solid #ccc; padding: 0.25rem 0.5rem; text-align: left; }
    th { background: #f3f3f3; }
    .err { color: #a00; }
    textarea { width: 100%; height: 28rem; }
    .meta { color: #555; }
    a { color: #0645ad; }
  </style>
</head>
<body>
  <h1>hamolpol seed export</h1>
  <p class="meta">
    Run ranges: <strong><?php echo htmlspecialchars(describe_ranges($runRanges), ENT_QUOTES, 'UTF-8'); ?></strong><br>
    Groups: <strong><?php echo htmlspecialchars(implode(', ', $groupIds), ENT_QUOTES, 'UTF-8'); ?></strong>
    (plus any runs tagged with those groups).<br>
    Resolved <strong><?php echo count($runIds); ?></strong> run id(s).
    Connected as <code><?php echo htmlspecialchars($username . '@' . $servername . '/' . $dbname, ENT_QUOTES, 'UTF-8'); ?></code>.
  </p>
  <p>
    <a href="?format=sql">Download / view raw SQL</a>
    — copy into <code>docker/db/init/02-seed.sql</code>, then load local MariaDB.
  </p>

  <h2>Row counts</h2>
  <table>
    <thead><tr><th>Table</th><th>Key filter</th><th>Rows</th><th>Status</th></tr></thead>
    <tbody>
    <?php foreach ($summaries as $s): ?>
      <tr>
        <td><code><?php echo htmlspecialchars($s['table'], ENT_QUOTES, 'UTF-8'); ?></code></td>
        <td><?php echo htmlspecialchars($s['pk'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo (int) $s['count']; ?></td>
        <td class="<?php echo $s['error'] !== '' ? 'err' : ''; ?>">
          <?php echo $s['error'] !== '' ? htmlspecialchars($s['error'], ENT_QUOTES, 'UTF-8') : 'ok'; ?>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

  <?php if ($runIds): ?>
  <h2>Resolved run ids</h2>
  <p><code><?php echo htmlspecialchars(implode(', ', $runIds), ENT_QUOTES, 'UTF-8'); ?></code></p>
  <?php endif; ?>

  <?php
  if (!empty($sections['moller_run_details']['rows']) && empty($sections['moller_run_details']['error'])) {
      echo "<h2>Peek: moller_run_details</h2>\n<table><thead><tr>";
      $cols = array('id_rundet', 'rundet_day', 'rundet_type', 'rundet_pcrex_group', 'experiment');
      foreach ($cols as $c) {
          echo '<th>' . htmlspecialchars($c, ENT_QUOTES, 'UTF-8') . '</th>';
      }
      echo "</tr></thead><tbody>\n";
      foreach ($sections['moller_run_details']['rows'] as $row) {
          echo '<tr>';
          foreach ($cols as $c) {
              $v = isset($row[$c]) ? $row[$c] : '';
              echo '<td>' . htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8') . '</td>';
          }
          echo "</tr>\n";
      }
      echo "</tbody></table>\n";
  }
  if (!empty($sections['pcrex_groups']['rows']) && empty($sections['pcrex_groups']['error'])) {
      echo "<h2>Peek: pcrex_groups</h2>\n<table><thead><tr>";
      $cols = array('id_group', 'group_date', 'group_type', 'group_exp');
      foreach ($cols as $c) {
          echo '<th>' . htmlspecialchars($c, ENT_QUOTES, 'UTF-8') . '</th>';
      }
      echo "</tr></thead><tbody>\n";
      foreach ($sections['pcrex_groups']['rows'] as $row) {
          echo '<tr>';
          foreach ($cols as $c) {
              $v = isset($row[$c]) ? $row[$c] : '';
              echo '<td>' . htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8') . '</td>';
          }
          echo "</tr>\n";
      }
      echo "</tbody></table>\n";
  }
  ?>

  <h2>SQL seed</h2>
  <p>Select all, copy, save as <code>02-seed.sql</code>.</p>
  <textarea readonly id="seed-sql"><?php echo htmlspecialchars($sqlText, ENT_QUOTES, 'UTF-8'); ?></textarea>
</body>
</html>
