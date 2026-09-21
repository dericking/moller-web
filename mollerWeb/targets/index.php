<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Targets");
PageSubtitle("High-field target, old tilting target, and target control");
PageStart("targets/");

link_table('Møller Target Documentation', [
    [
        'text' => 'HydrogenlikeWavefunction.pdf',
        'url'  => 'https://github.com/jonesdc76/MollerPolarimetry/blob/master/HydrogenlikeWaveFunctions.pdf',
        'type' => 'EXT',
        'date' => '2020',
        'desc' => 'Don Jones\' tech note on the hydrogenlike wavefunctions that can be used in Levchuk Effect calculations.',
    ],
    [
        'text' => 'TargetHeating.pdf',
        'url'  => 'https://github.com/jonesdc76/MollerPolarimetry/blob/master/TargetPolarization/TargetHeating.pdf',
        'type' => 'EXT',
        'date' => '2026',
        'desc' => 'Don Jones\' tech note on target heating calculations for the Hall A Møller Polarimeter foils.',
    ],
    [
        'text' => 'Polarimeter control screens',
        'url'  => 'targets/docs/screens_2016.pdf',
        'type' => 'PDF',
        'date' => '2016',
        'desc' => 'Møller polarimeter control screens',
    ],
]);

link_table('2019 Foil Wrinkling Photos', [
    [
        'text' => 'DSC_9096.jpg',
        'url'  => 'targets/docs/DSC_9096.jpg',
        'type' => 'JPG',
        'date' => '2019',
        'desc' => '4 μm target foil with beam spot (full frame). EXIF 2 April 2019; logged with the 3 April 2019 commissioning notes.',
    ],
    [
        'text' => 'DSC_9096_cropped.png',
        'url'  => 'targets/docs/DSC_9096_cropped.png',
        'type' => 'PNG',
        'date' => '2019',
        'desc' => 'Crop of the beam-spot / wrinkle region from DSC_9096.',
    ],
], ['sort' => 'none']);

link_table('Legacy Target Information', [
    [
        'text' => 'Temple target',
        'url'  => 'targets/templeTarget/',
        'type' => 'DIR',
        'date' => '2010',
        'desc' => 'High-field target documents and drawings',
    ],
    [
        'text' => 'Tilting target',
        'url'  => 'targets/tiltingTarget/',
        'type' => 'DIR',
        'date' => '2004',
        'desc' => 'Old Helmholtz / tilting target drawings, photos, and optics',
    ],
]);

link_table('Legacy Content', [
    [
        'text' => 'Polarimeter control screens (2010)',
        'url'  => 'targets/docs/screens_2010.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'Earlier control-screen notes using EDM menu paths',
    ],
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
