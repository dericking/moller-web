<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("OSP & Manual");
PageSubtitle("Operational safety procedure and polarimeter manual");
PageStart("ops/");

link_table('Operations documents', [
    [
        'text' => 'Møller polarimeter manual',
        'url'  => 'ops/docs/moller-polarimeter-manual.pdf',
        'type' => 'PDF',
        'date' => '2023',
        'desc' => 'Møller polarimeter chapter from the Hall A Standard Equipment Manual dated August 28, 2023.',
    ],
    [
        'text' => 'OSP',
        'desc' => 'Current Operational Safety Procedure — add when a current OSP is available. The outdated OSP tree was not carried forward.',
    ],
]);

PageEnd();
