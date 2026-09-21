<?php
/**
 * Caretaker file — site title, base URL, home cards, and left nav.
 *
 * Edit $homeCards for section tiles and the sidebar (no Home item — the
 * sidebar brand already goes to index.php). Set 'home' => false on a row
 * to keep it in the left nav only (no home-page card).
 *
 * $siteBase:
 *   Empty at the web root (Docker). '/equipment/moller' on hallaweb.
 *   Taken from SCRIPT_NAME vs this tree, not DOCUMENT_ROOT (Alias makes
 *   those two the same and CSS would go to /_assets/…).
 *   Prefer site_url() in templates, not hard-coded paths.
 */

$siteTitle = 'Hall-A Møller Polarimeter';

$siteBase = '';
$scriptName = isset($_SERVER['SCRIPT_NAME']) ? str_replace('\\', '/', $_SERVER['SCRIPT_NAME']) : '';
if (defined('MOLLER_ROOT') && !empty($_SERVER['SCRIPT_FILENAME'])) {
    $scriptFile = realpath($_SERVER['SCRIPT_FILENAME']);
    $root = realpath(MOLLER_ROOT);
    if ($scriptFile !== false && $root !== false) {
        $rootPrefix = $root . DIRECTORY_SEPARATOR;
        if (str_starts_with($scriptFile, $rootPrefix) || $scriptFile === $root) {
            $rel = str_replace('\\', '/', substr($scriptFile, strlen($root)));
            $rel = '/' . ltrim($rel, '/');
            $relLen = strlen($rel);
            if ($relLen > 1 && substr($scriptName, -$relLen) === $rel) {
                $siteBase = substr($scriptName, 0, -$relLen);
            }
        }
    }
}
if ($siteBase === '' && strpos($scriptName, '/equipment/moller/') === 0) {
    $siteBase = '/equipment/moller';
}

$homeCards = [
    [
      'href' => 'ops/',
      'label' => 'OSP & Manual',
      'icon' => 'fa-solid fa-book-open',
      'blurb' => 'Official Documentation'
    ],
    [
      'href' => 'links/',
      'label' => 'Links & Tools',
      'icon' => 'fa-solid fa-link',
      'blurb' => 'ELOG, Software and more'
    ],
    [
      'href' => 'data/',
      'label' => 'Data',
      'icon' => 'fa-solid fa-chart-bar',
      'blurb' => 'Current and Archived Data'
    ],
    [
      'href' => 'analysis/',
      'label' => 'Analysis',
      'icon' => 'fa-solid fa-chart-line',
      'blurb' => 'Analysis notes'
    ],
    [
      'href' => 'magnets/',
      'label' => 'Magnets',
      'icon' => 'fa-solid fa-magnet',
      'blurb' => 'Quads, dipole, solenoid'
    ],
    [
      'href' => 'detector/',
      'label' => 'Detector',
      'icon' => 'fa-solid fa-eye',
      'blurb' => 'Detector Information'
    ],
    [
      'href' => 'targets/',
      'label' => 'Targets',
      'icon' => 'fa-solid fa-bullseye',
      'blurb' => 'Current and Historical'
    ],
    [
      'href' => 'daq/',
      'label' => 'DAQ',
      'icon' => 'fa-solid fa-microchip',
      'blurb' => 'Electronics, CODA, FADC, BCM'
    ],
    [
      'href' => 'literature/',
      'label' => 'Literature',
      'icon' => 'fa-solid fa-book',
      'blurb' => 'Background papers and notes'
    ],
    [
      'href' => 'publications/',
      'label' => 'Publications',
      'icon' => 'fa-solid fa-file-lines',
      'blurb' => 'Møller papers and theses'
    ],
    [
      'href' => 'talks/',
      'label' => 'Talks',
      'icon' => 'fa-solid fa-chalkboard-user',
      'blurb' => 'Talks and presentations'
    ],
    [
      'href' => 'people/',
      'label' => 'People',
      'icon' => 'fa-solid fa-users',
      'blurb' => 'Working group'
    ],
];

$nav = array_map(static function ($card) {
    return [
        'href'  => $card['href'],
        'label' => $card['label'],
        'icon'  => $card['icon'],
    ];
}, $homeCards);

/**
 * Optional labels for PageTrailAuto() when a folder name does not match $homeCards.
 * Keys are path prefixes relative to the site root (no leading/trailing slash),
 * or a single path segment. Longer / more specific keys win when both match.
 *
 * Example: 'daq/e_upgrade' => 'Electronics Upgrade'
 */
$trailLabels = [
    'daq/e_upgrade' => 'Electronics Upgrade',
    'daq/e_upgrade/docs' => 'docs',
    'daq/e_upgrade/pdf' => 'docs',
    'daq/bcm' => 'BCM / Unser',
    'daq/bcm/docs' => 'docs',
    'daq/docs' => 'DAQ docs',
    'daq/daqdocs' => 'DAQ docs',
    'daq/fadc_2010_2012' => 'FADC 2010–2012',
    'daq/fadc_2010_2012/docs' => 'docs',
    'daq/fadc_2010_2012/updates' => 'docs',
    'magnets/docs' => 'Mag docs',
    'targets/templeTarget' => 'Temple target',
    'targets/templeTarget/docs' => 'docs',
    'targets/templeTarget/docs/Documents' => 'Documents',
    'targets/templeTarget/docs/EngineerDrawings' => 'Engineering drawings',
    'targets/templeTarget/docs/EngineerDrawings/NewDocsForWeb' => 'New docs',
    'targets/tiltingTarget' => 'Tilting target',
    'targets/tiltingTarget/docs' => 'docs',
    'targets/tiltingTarget/photos' => 'photos',
    'targets/tiltingTarget/docs/photos' => 'photos',
    'targets/legacy' => 'Legacy',
    'targets/legacy/docs' => 'docs',
    'targets/docs' => 'Target docs',
    'targets/docs/templeTarget' => 'Temple target',
    'targets/docs/templeTarget/EngineerDrawings' => 'Engineering drawings',
    'targets/docs/templeTarget/EngineerDrawings/NewDocsForWeb' => 'New docs',
    'targets/docs/legacy' => 'Legacy',
    'targets/docs/tiltingTarget' => 'Tilting target',
    'targets/Temple_target' => 'Temple target',
    'targets/Temple_target/EngineerDrawings' => 'Engineering drawings',
    'targets/Temple_target/EngineerDrawings/NewDocsForWeb' => 'New docs',
    'targets/Temple_target/2019_target_wrinkling' => '2019 target wrinkling',
    'targets/old_tilting_target' => 'Old tilting target',
    'analysis/docs' => 'Analysis docs',
    'literature/docs' => 'Literature docs',
    'photos' => 'Photos',
    'photos/2009_02_06_detector' => 'Detector (6 Feb 2009)',
    'photos/pige' => 'PiGe',
];

/**
 * Build a URL from $siteBase + a path relative to the site root.
 */
function site_url($path) {
    global $siteBase;
    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }
    $path = ltrim($path, '/');
    $base = rtrim((string) $siteBase, '/');
    return ($base === '' ? '' : $base) . '/' . $path;
}
