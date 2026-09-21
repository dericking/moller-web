<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("DAQ");
PageSubtitle("DAQ hardware notes, electronics, and historical FADC documentation");
PageStart("daq/");

link_table('DAQ Information', [
    [
        'text' => 'MollerElectronicDiagram.pdf',
        'url'  => 'daq/docs/MollerElectronicDiagram.pdf',
        'type' => 'PDF',
        'date' => '2023',
        'desc' => 'Møller electronics diagram [PDF] by Don Jones.',
    ],
    [
        'text' => 'MollerElectronicDiagram.key',
        'url'  => 'daq/docs/MollerElectronicDiagram.key',
        'type' => 'KEY',
        'date' => '2023',
        'desc' => 'Møller electronics diagram Keynote [KEY] by Don Jones.',
    ],
    [
        'text' => 'electronics_connections.txt',
        'url'  => 'daq/docs/electronics_connections_2022.txt',
        'type' => 'TXT',
        'date' => '2022',
        'desc' => '[Don\'s 2022 electronics map] Møller electronics connections.',
    ],
    [
        'text' => 'detconnect.dat',
        'url'  => 'daq/docs/detconnect.dat',
        'type' => 'DAT',
        'date' => '2019',
        'desc' => 'DAQ module and trigger interface information.',
    ],
    [
        'text' => 'coda_format_moller_adc.txt',
        'url'  => 'daq/docs/coda_format_moller_adc.txt',
        'type' => 'TXT',
        'date' => '2011',
        'desc' => 'CODA readout format for the old ADC/TDC DAQ: scaler events (tag 0x20) and ADC–TDC physics events.',
    ],
    [
        'text' => 'data_ntuple_adc.txt',
        'url'  => 'daq/docs/data_ntuple_adc.txt',
        'type' => 'TXT',
        'date' => '2011',
        'desc' => 'Leaf declaration for the old ADC DAQ DATA ntuple (moller_data_RNNB.nt).',
    ],
    [
        'text' => 'scaler_ntuple_adc.txt',
        'url'  => 'daq/docs/scaler_ntuple_adc.txt',
        'type' => 'TXT',
        'date' => '2011',
        'desc' => 'Leaf declaration for the old ADC DAQ SCALER ntuple (moller_scal_RNNB.nt).',
    ],
    [
        'text' => 'Helicity Control Board User’s Guide (Draft 3)',
        'date' => '2010',
        'desc' => 'Injector helicity board (Flood, Hansknecht, Higgins, Suleiman). Still the board in use. Hosted copy plus the JLab/PREX-wiki PDF.',
        'links' => [
            ['type' => 'PDF', 'text' => 'hosted PDF', 'url' => 'literature/docs/Hel_Board_UserGuide.pdf'],
            ['type' => 'EXT', 'text' => 'PREX wiki', 'url' => 'https://prex.jlab.org/wiki/images/3/34/HelicityUsersGuideFeb4.pdf'],
        ],
    ],
    [
        'text' => 'Moller_Trigger.pdf',
        'url'  => 'daq/docs/Moller_Trigger.pdf',
        'type' => 'PDF',
        'date' => '2012',
        'desc' => 'Old Møller polarimeter DAQ trigger/scaler setup. Kept for historical reference.',
    ],
]);

link_table('Legacy Content Files', [
    [
        'text' => 'electronics_connections.txt',
        'url'  => 'daq/docs/electronics_connections.txt',
        'type' => 'TXT',
        'date' => '2019',
        'desc' => 'More detailed cable map (outdated; superseded by the 2022 map). Last in-file note is a discriminator replacement on 09 Aug 2019.',
    ],
    [
        'text' => 'cables_3.txt',
        'url'  => 'daq/docs/cables_3.txt',
        'type' => 'TXT',
        'date' => '2010',
        'desc' => 'Cabling from April 2010.',
    ],
    [
        'text' => 'cables_2.txt',
        'url'  => 'daq/docs/cables_2.txt',
        'type' => 'TXT',
        'date' => '2010',
        'desc' => 'Cabling from February 2010.',
    ],
    [
        'text' => 'Electronics 1998–2008',
        'url'  => 'daq/docs/electronics_old.pdf',
        'type' => 'PDF',
        'date' => '2008',
        'desc' => 'General description of the electronics used in 1998–2008.',
    ],
    [
        'text' => 'Remote connections',
        'url'  => 'daq/docs/remote_connections.pdf',
        'type' => 'PDF',
        'date' => '2008',
        'desc' => 'Port-server telnet connections to VME CPUs and the HV crate.',
    ],
    [
        'text' => 'cables_1.txt',
        'url'  => 'daq/docs/cables_1.txt',
        'type' => 'TXT',
        'date' => '2006',
        'desc' => 'Cabling by April 2006.',
    ],
    [
        'text' => 'Running the polarimeter DAQ',
        'url'  => 'daq/docs/guide1.2_linux.pdf',
        'type' => 'PDF',
        'date' => '2006',
        'desc' => 'Running the polarimeter DAQ.',
    ],
    [
        'text' => 'Slow control',
        'url'  => 'daq/docs/slow_mpc.pdf',
        'type' => 'PDF',
        'date' => '2004',
        'desc' => 'Møller polarimeter (slow) control.',
    ],
    [
        'text' => 'LeCroy 2365 Programmable Logic Unit',
        'url'  => 'daq/docs/LeCroy-2365.pdf',
        'type' => 'PDF',
        'desc' => 'Manufacturer data sheet for the CAMAC PLU used in the old ADC DAQ (and as the FADC-era PLU prototype). Hard to find elsewhere; hosted here.',
    ],
]);

link_table('Legacy Content Directories', [
    [
        'text' => 'BCM / Unser documentation',
        'url'  => 'daq/bcm/',
        'type' => 'DIR',
        'date' => '2013',
        'desc' => 'Beam-current monitor papers, manuals, and calibration procedures.',
    ],
    ['text' => '2007 Electronics Upgrade Phase I', 'url' => 'daq/e_upgrade/', 'type' => 'DIR', 'date' => '2007', 'desc' => 'Upgrade Project Phase I (notes, modules, schematics)'],
    ['text' => 'Legacy Photos', 'url' => 'photos/', 'type' => 'DIR', 'desc' => 'electronics1–5.jpg in the mixed polarimeter photo archive'],
    [
        'text' => '2010–2012 FADC documentation',
        'url'  => 'daq/fadc_2010_2012/',
        'type' => 'DIR',
        'date' => '2013',
        'desc' => 'Flash-ADC DAQ from the 6 GeV / early 12 GeV era (hardware, firmware, CODA, analysis notes).',
    ],
    ]);

PageEnd();
