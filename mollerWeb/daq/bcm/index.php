<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("Unser / BCM Documentation");
PageSubtitle("Beam-current monitor papers, manuals, and calibration notes. This is unreviewed legacy content.");
PageDate("");
PageStart("daq/");

link_table('Papers', [
    [
        'text' => 'The parametric current transformer (Unser PCT)',
        'url'  => 'daq/bcm/docs/Unser-PCT.pdf',
        'type' => 'PDF',
        'date' => '1991',
        'desc' => 'K. B. Unser, AIP Conf. Proc. 252, 266–275 (LEP beam-current monitor). doi:10.1063/1.42124.',
    ],
    [
        'text' => 'High accuracy BCM for Hall A',
        'url'  => 'daq/bcm/docs/Saha_BCM_WPAH103.PDF',
        'type' => 'PDF',
        'date' => '2001',
        'desc' => 'J.-C. Denard, A. Saha, G. Laveissière, PAC 2001, Chicago.',
    ],
    [
        'text' => 'Beam diagnostics for JLab',
        'url'  => 'daq/bcm/docs/BCMs_and_BPMs_training_slides_Musson_9-28-11.pdf',
        'type' => 'PDF',
        'date' => '2011',
        'desc' => 'John Musson, JLab I&C Group training slides (28 September 2011).',
    ],
]);

link_table('Manuals', [
    [
        'text' => 'Keithley 224 current source',
        'url'  => 'daq/bcm/docs/keith224man.pdf',
        'type' => 'PDF',
        'desc' => 'Keithley-224 manual.',
    ],
    [
        'text' => 'Unser / BCM notes (Musson)',
        'url'  => 'daq/bcm/docs/Unser_stuff.pdf',
        'type' => 'PDF',
        'desc' => 'Unser/BCM material from John Musson.',
    ],
]);

link_table('Calibration procedures', [
    [
        'text' => 'Unser setup and calibration (old Hall A OSP)',
        'url'  => 'http://hallaweb.jlab.org/document/OPMAN-old/node72.html',
        'type' => 'EXT',
        'desc' => 'Unser setup and calibration from the old Hall A operations manual.',
    ],
    [
        'text' => 'Hall A Unser / 0L02 cross calibration',
        'url'  => 'daq/bcm/docs/HallA_Unser_0L02_cal.pdf',
        'type' => 'PDF',
        'desc' => 'MCC Unser/0L02 cross-calibration procedure (old).',
    ],
    [
        'text' => 'Hall A BCM linearity',
        'url'  => 'daq/bcm/docs/HallA_BCM_linearity.pdf',
        'type' => 'PDF',
        'desc' => 'MCC BCM linearity procedure (old).',
    ],
]);

link_table('Other notes', [
    [
        'text' => 'BCM meeting',
        'url'  => 'daq/bcm/docs/BCM_Meeting_20130722.pdf',
        'type' => 'PDF',
        'date' => '2013',
        'desc' => 'BCM meeting slides, 22 July 2013.',
    ],
    [
        'text' => 'Unser I-to-V calibration',
        'url'  => 'daq/bcm/docs/Unser_I_to_V.pdf',
        'type' => 'PDF',
        'date' => '2013',
        'desc' => 'Unser manual I-to-V calibration, 24 July 2013.',
    ],
    [
        'text' => 'Charge digital readout unit',
        'url'  => 'daq/bcm/docs/Charge_Digital_Readout_Unit.pdf',
        'type' => 'PDF',
        'desc' => 'Functional diagram of the digital charge readout unit.',
    ],
]);

PageEnd();
