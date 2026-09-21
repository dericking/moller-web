<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("Legacy target notes");
PageSubtitle("Atomic-hydrogen, motion-control, encoder, foil-tension, and Helmholtz-alignment notes");
PageStart("targets/");

link_table('Legacy Content', [
    [
        'text' => 'Atomic hydrogen target studies',
        'url'  => 'targets/legacy/docs/atomic_h_target.pdf',
        'type' => 'PDF',
        'date' => '2002',
        'desc' => 'Feasibility studies for an ultra-cold atomic hydrogen gas target.',
    ],
    [
        'text' => 'New target movement control',
        'url'  => 'targets/legacy/docs/ch2_new.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'Draft notes on the new Møller target movement control (incomplete chapter).',
    ],
    [
        'text' => 'Target encoder test',
        'url'  => 'targets/legacy/docs/encoder_test.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'Linear encoder (HAMOL_LENC1) readout test from 16 February 2010.',
    ],
    [
        'text' => 'Foil tension and target polarization',
        'url'  => 'targets/legacy/docs/foil_tension.pdf',
        'type' => 'PDF',
        'date' => '2003',
        'desc' => 'Supermendur target polarization dependence on foil tension.',
    ],
    [
        'text' => 'Helmholtz-coil alignment (beam bending)',
        'url'  => 'targets/legacy/docs/clone_aligment.pdf',
        'type' => 'PDF',
        'desc' => 'Tables of beam shift from Helmholtz-coil rotation and shift (filename keeps the original aligment spelling).',
    ],
]);

PageEnd();
