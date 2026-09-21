<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Detector");
PageSubtitle("Calorimeter, aperture scintillator, and detector photos");
PageStart("detector/");

link_table('Detector', [
    [
        'text' => 'Photonis XP2282 PMT',
        'url'  => 'detector/docs/XP2282.pdf',
        'type' => 'PDF',
        'desc' => 'Product specification for the 51 mm, 8-stage XP2282 photomultiplier used on the calorimeter.',
    ],
    [
        'text' => 'Hamamatsu R4124 PMT',
        'url'  => 'detector/docs/R4124.pdf',
        'type' => 'PDF',
        'desc' => 'Hamamatsu R4124 data sheet. Used on all eight aperture-scintillator channels.',
    ],
    [
        'text' => 'Aperture scintillator detector',
        'url'  => 'detector/docs/apert_scint_2010.pdf',
        'type' => 'PDF',
        'date' => '2013',
        'desc' => 'Segmented aperture scintillator detector: geometry, cabling, and HV.',
    ],
    [
        'text' => 'Detector photos (6 GeV era)',
        'url'  => 'photos/detector/',
        'type' => 'DIR',
        'desc' => 'Detector in the shielding box, Hall A beamline, and old-target views (dsc011xx).',
    ],
    [
        'text' => 'Detector photos (February 2009)',
        'url'  => 'photos/2009_02_06_detector/',
        'type' => 'DIR',
        'date' => '2009',
        'desc' => 'Detector photos from 6 February 2009.',
    ],
    [
        'text' => 'Collimator control',
        'url'  => 'detector/docs/collimator_control.pdf',
        'type' => 'PDF',
        'date' => '2003',
        'desc' => 'Collimator and slide control notes',
    ],
]);

link_table('Related drawings', [
    [
        'text' => 'A00000-02-04-0700 Rev D',
        'url'  => 'magnets/docs/A00000-02-04-0700RevD.pdf',
        'type' => 'PDF',
        'date' => '19 December 2006',
        'desc' => 'Møller dipole / detector assembly (drawing lives with the other beamline drawings under Magnets).',
    ],
]);

PageEnd();
