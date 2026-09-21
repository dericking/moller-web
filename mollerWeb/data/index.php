<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Møller Polarimeter Data Analysis");
PageSubtitle("Database-backed results and legacy archives");
PageStart("data/");

/**
 * Frozen public URLs: data/SBS/index.php, data/CREX/index.php, data/PREX-II/index.php
 */

$recent = [
    [
        'href'  => 'data/SBS/index.php',
        'label' => 'SBS',
        'year'  => '2022',
        'blurb' => 'GEp, GEn, GMn, & GEn-RP',
    ],
    [
        'href'  => 'data/CREX/index.php',
        'label' => 'CREX',
        'year'  => '2020',
        'blurb' => 'Polarimetry measurements taken for CREX',
    ],
    [
        'href'  => 'data/PREX-II/index.php',
        'label' => 'PREX-II',
        'year'  => '2019',
        'blurb' => 'Polarimetry measurements taken for PREX-II',
    ],
];

$legacyYears = [2016, 2015, 2014, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998];
$legacyYearExperiments = [
    2016 => 'E12-06-114 [DVCS] and E12-07-108 [GMp]',
    2015 => 'E12-06-114 [DVCS] and E12-07-108 [GMp]',
    2014 => '',
    2012 => 'E08-027 [G2P] and E08-007',
    2011 => 'E08-008 [D-Threshold]',
    2010 => 'E06-002 [PREX] and E07-007 and E08-025 [DVCS]',
    2009 => 'E06-010 [Transversity], E06-014 [d2n], E05-015 and E08-005, E05-102, E05-109 [HAPPEX-III], and E08-011 [PVDIS]',
    2008 => 'E06-010 [Transversity]',
    2007 => '',
    2006 => 'E02-013 [GEn]',
    2005 => '',
    2004 => '',
    2003 => '',
    2002 => '',
    2001 => '',
    2000 => '',
    1999 => '',
    1998 => '',
];
?>
<h2>Recent Møller Results</h2>
<div class="data-exp-cards">
  <?php foreach ($recent as $exp): ?>
  <a class="data-exp-card" href="<?= htmlspecialchars(site_url($exp['href']), ENT_QUOTES, 'UTF-8') ?>">
    <p class="data-exp-year"><?= htmlspecialchars($exp['year'], ENT_QUOTES, 'UTF-8') ?></p>
    <h3><?= htmlspecialchars($exp['label'], ENT_QUOTES, 'UTF-8') ?></h3>
    <p><?= htmlspecialchars($exp['blurb'], ENT_QUOTES, 'UTF-8') ?></p>
  </a>
  <?php endforeach; ?>
</div>

<?php
$yearRows = [];
foreach ($legacyYears as $year) {
    $yearRows[] = [
        'text' => (string) $year,
        'url'  => 'data/old/byYear/' . $year . '_raw_results_archive.php',
        'desc' => $legacyYearExperiments[$year],
        'date' => (string) $year,
    ];
}

link_table('Legacy results by year', $yearRows, [
    'text' => 'Year',
    'desc' => 'Experiments',
    'columns' => ['text', 'desc'],
    'sort' => 'date-desc',
]);

link_table('Legacy results by experiment', [
    ['text' => 'E94-010',              'url' => 'data/old/byExp/e94-010.php',              'date' => 'September—December 1998',     'desc' => 'E94-010'],
    ['text' => 'HAPPEX',               'url' => 'data/old/byExp/happex_apr-may_1999.php',  'date' => 'April—May 1999',               'desc' => 'HAPPEX'],
    ['text' => 'HAPPEX',               'url' => 'data/old/byExp/happex_july_1999.php',     'date' => 'July 1999',                    'desc' => 'HAPPEX'],
    ['text' => 'E89-012 and E94-019',  'url' => 'data/old/byExp/happex_apr-may_1999.php',  'date' => 'July—November 1999',           'desc' => 'E89-012 E94-019'],
    ['text' => 'E93-049',              'url' => 'data/old/byExp/happex_apr-may_1999.php',  'date' => 'April—May 2000',               'desc' => "4He(e,e'p)3H"],
    ['text' => 'E91-011',              'url' => 'data/old/byExp/e91-011.php',              'date' => 'May—July 2000',                'desc' => 'N→D'],
    ['text' => 'E99-007',              'url' => 'data/old/byExp/e99-007.php',              'date' => 'May—July 2000',                'desc' => 'GEp(II)'],
    ['text' => 'E97-110',              'url' => 'data/old/byExp/e97-110.php',              'date' => 'July—August 2003',             'desc' => 'GDH'],
    ['text' => 'E02-013',              'url' => 'data/old/byExp/e02-013.php',              'date' => 'February—May 2006',            'desc' => 'GEn'],
    ['text' => 'E06-010',              'url' => 'data/old/byExp/e06-010.php',              'date' => 'October 2008—February 2009',   'desc' => 'Transversity'],
    ['text' => 'E06-014',              'url' => 'data/old/byExp/e06-014.php',              'date' => 'February—March 2009',          'desc' => 'd2n'],
    ['text' => 'E05-015',              'url' => 'data/old/byExp/e05-015.php',              'date' => 'April—May 2009',               'desc' => 'Quasi-Elastic'],
    ['text' => 'E05-102',              'url' => 'data/old/byExp/e05-102.php',              'date' => 'May—June 2009',                'desc' => 'Quasi-Elastic'],
    ['text' => 'E05-109',              'url' => 'data/old/byExp/e05-109.php',              'date' => 'August—October 2009',          'desc' => 'HAPPEX-III'],
    ['text' => 'E08-011',              'url' => 'data/old/byExp/e02-006.php',              'date' => 'November—December 2009',       'desc' => 'PVDIS'],
    ['text' => 'E02-006',              'url' => 'data/old/byExp/e02-006.php',              'date' => 'March—June 2010',              'desc' => 'PREX1'],
    ['text' => 'E08-027 and E08-007',  'url' => 'data/old/byExp/e08-027.php',              'date' => 'February 2012—May 2012',       'desc' => 'E08-027 G2P, E08-007'],
], [
    'text' => 'Experiment',
    'date' => 'Date',
    'columns' => ['text', 'date', 'desc'],
]);

PageEnd();
