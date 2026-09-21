<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Analysis");
PageSubtitle("Analysis documentation and polarization notes");
PageStart("analysis/");

link_table('General Analysis Documentation', [
    [
        'text' => 'Don Jones\' Dead Time and Accidental Treatment -- DeadTime.pdf',
        'url'  => 'https://github.com/jonesdc76/MollerPolarimetry/blob/master/DeadTime.pdf',
        'type' => 'EXT',
        'date' => '2024',
        'desc' => 'Don Jones\' tech note on the derivation of dead time and accidental corrections given what we measure',
    ],
    [
        'text' => 'Hall-C polarization sign wiki',
        'url'  => 'https://hallcweb.jlab.org/polwiki/index.php/Sign_of_the_beam_polarization',
        'type' => 'EXT',
        'date' => '2011',
        'desc' => 'Hall-C polarimetry “Sign of the Beam Polarization” wiki page',
    ],
    [
        'text' => 'Helicity signals',
        'url'  => 'analysis/docs/hel_signals.pdf',
        'type' => 'PDF',
        'date' => '2009',
        'desc' => 'Helicity signals',
    ],
    [
        'text' => 'Laser phase',
        'url'  => 'analysis/docs/laser_phase.pdf',
        'type' => 'PDF',
        'date' => '2009',
        'desc' => "Laser’s phase influence on the polarization",
    ],
    [
        'text' => 'LED generator',
        'url'  => 'analysis/docs/led_gen.pdf',
        'type' => 'PDF',
        'date' => '2006',
        'desc' => 'LED generator information',
    ],
    [
        'text' => 'Historical deadtime calculation with LEDs',
        'url'  => 'analysis/docs/DeadTimeDiagram.pdf',
        'type' => 'PDF',
        'desc' => 'Method superseded.',
    ],
    [
        'text' => 'Ntuple structure',
        'url'  => 'analysis/docs/ntuple_struct.pdf',
        'type' => 'PDF',
        'desc' => 'The structure of the Møller data ntuple',
    ],
    [
        'text' => 'Old ADC PAW analysis',
        'url'  => 'analysis/docs/OldADCPawAnalysis.pdf',
        'type' => 'PDF',
        'date' => '2019',
        'desc' => 'Slides on the raw ADC data structure in the CODA stream and the old PAW analysis (R. Pomatsalyuk). Relevant to the pre-FADC ADC/TDC ntuple.',
    ],
    [
        'text' => 'Polarization analysis',
        'url'  => 'analysis/docs/polar_analysis.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'Method of the data analysis and polarization calculation',
    ],
    [
        'text' => 'Data analysis write-up (PAW)',
        'url'  => 'analysis/docs/analysis_manual_PAW.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'Data analysis write-up (PAW)',
    ],
    [
        'text' => 'Sign of the beam polarization',
        'url'  => 'analysis/docs/spin_direction.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => '(E. Chudakov) Sign of the beam polarization',
    ],
    [
        'text' => 'Signs of the polarizations',
        'url'  => 'analysis/docs/polar_sign.pdf',
        'type' => 'PDF',
        'date' => '1998',
        'desc' => "Logical signal of “1” correlates to positive polarization",
    ],
]);

PageEnd();
