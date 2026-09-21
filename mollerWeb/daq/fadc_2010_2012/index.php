<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("FADC DAQ (2010–2012)");
PageSubtitle("Hall A Møller 2010-2012 FADC documentation. Information here may or may not be complete. The 2012-2016 FADC DAQ was retired and dismantled.");
PageDate("");
PageStart("daq/");

link_table('DAQ description', [
    [
        'text' => 'VME crate diagram',
        'url'  => 'daq/fadc_2010_2012/docs/myvme-1.pdf',
        'type' => 'PDF',
        'desc' => 'VME crate layout for the FADC DAQ.',
    ],
    [
        'text' => 'VME crate modules',
        'url'  => 'daq/fadc_2010_2012/docs/FADC_config_module_description.pdf',
        'type' => 'PDF',
        'desc' => 'Module list for the FADC VME crate.',
    ],
    [
        'text' => 'Scaler module V560',
        'url'  => 'daq/fadc_2010_2012/docs/v560_rev1.pdf',
        'type' => 'PDF',
        'desc' => 'CAEN V560 scaler.',
    ],
    [
        'text' => 'CAEN QDC V792',
        'url'  => 'daq/fadc_2010_2012/docs/ADC_V792.pdf',
        'type' => 'PDF',
        'desc' => 'CAEN V792 QDC.',
    ],
    [
        'text' => 'Connection diagram',
        'url'  => 'daq/fadc_2010_2012/docs/mymoller-1.pdf',
        'type' => 'PDF',
        'desc' => 'FADC DAQ connection diagram.',
    ],
    [
        'text' => 'Signal connections',
        'url'  => 'daq/fadc_2010_2012/docs/signals_connection.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'FADC, V560, and V792 channel map.',
    ],
]);

link_table('FADC documentation', [
    [
        'text' => 'Hardware architecture',
        'url'  => 'daq/fadc_2010_2012/docs/Hall_A_Moller_DAQ_2.pdf',
        'type' => 'PDF',
        'desc' => 'Hardware architecture slides.',
    ],
    [
        'text' => 'Firmware architecture (part 1)',
        'url'  => 'daq/fadc_2010_2012/docs/ADC_FPGA_forMollerDAQ.pdf',
        'type' => 'PDF',
        'desc' => 'FPGA firmware architecture.',
    ],
    [
        'text' => 'Firmware architecture (part 2)',
        'url'  => 'daq/fadc_2010_2012/docs/FX20_FIRMWARE_HALLA_MOLLER_DAQ.pdf',
        'type' => 'PDF',
        'desc' => 'FX20 firmware architecture.',
    ],
    [
        'text' => 'Data format',
        'url'  => 'daq/fadc_2010_2012/docs/FADC_Data_Format_2.pdf',
        'type' => 'PDF',
        'desc' => 'FADC data format.',
    ],
]);

link_table('Operations', [
    [
        'text' => 'CODA startup',
        'url'  => 'daq/fadc_2010_2012/docs/start_coda.pdf',
        'type' => 'PDF',
        'date' => '2010',
        'desc' => 'Starting FADC CODA on hamoller (`start_coda_brad`, fadc_moller config).',
    ],
    [
        'text' => 'FADC programming notes',
        'url'  => 'daq/fadc_2010_2012/docs/FADC_programming.notes',
        'type' => 'NOTES',
        'desc' => 'JLab FADC library extensions (`mollerLib.c`): trigger FPGA registers, thresholds, prescale, delays, and `faMollerStatus`.',
    ],
    [
        'text' => 'Data trigger analysis',
        'url'  => 'daq/fadc_2010_2012/docs/note_30Mar2011.pdf',
        'type' => 'PDF',
        'date' => '2011',
        'desc' => 'Helicity delay, empty triggers, and aperture-threshold notes (updated 2016).',
    ],
    [
        'links' => [
            ['type' => 'JPG', 'text' => 'MPS vs helicity', 'url' => 'daq/fadc_2010_2012/docs/mps_vs_hel_2.jpg'],
            ['type' => 'JPG', 'text' => 'zoomed', 'url' => 'daq/fadc_2010_2012/docs/mps_vs_hel_1.jpg'],
        ],
        'date' => '2012',
        'desc' => 'Signal photos as of 7 October 2012.',
    ],
]);

link_table('Known issues and firmware', [
    [
        'text' => 'Known FADC issues',
        'url'  => 'daq/fadc_2010_2012/docs/fadc_upgrade.pdf',
        'type' => 'PDF',
        'date' => '2016',
        'desc' => 'Helicity-delay bugs, empty data triggers, radiation errors, and firmware-upgrade ideas.',
    ],
]);

link_table('Literature', [
    [
        'text' => 'FADC for Hall A Møller',
        'url'  => 'daq/fadc_2010_2012/docs/FADC_for_HallA_Moller-2009.pdf',
        'type' => 'PDF',
        'date' => '2009',
        'desc' => 'FADC for Hall A Møller (18 March 2009).',
    ],
    [
        'text' => 'Møller FADC DAQ upgrade',
        'url'  => 'daq/fadc_2010_2012/docs/mfadc_annrev_full.pdf',
        'type' => 'PDF',
        'date' => '2011',
        'desc' => 'Møller FADC DAQ upgrade write-up.',
    ],
]);

PageEnd();
