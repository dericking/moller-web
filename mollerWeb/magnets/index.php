<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Magnets");
PageSubtitle("Quadrupoles, dipole, and superconducting solenoid");
PageStart("magnets/");

link_table('Spectrometer layout', [
    [
        'text' => 'Proposal to upgrade the polarimeter to 11 GeV',
        'url'  => 'magnets/docs/upgrade_11gev.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'Original write-up by O. Glamazdin and E. Chudakov for the 11 GeV / 12 GeV-era polarimeter upgrade. Historical, but still useful for the spectrometer layout.',
    ],
]);

link_table('Møller Polarimeter Magnets Documentation', [
    [
        'text' => 'Quadrupole Information for the Møller Polarimeter in Hall A',
        'url'  => 'https://github.com/jonesdc76/MollerPolarimetry/blob/master/quads/QuadrupoleInfo.pdf',
        'type' => 'EXT',
        'date' => '2020',
        'desc' => 'Don Jones\' summary of existing information on the Hall A Møller Polarimeter\'s quadrupoles.',
    ],
    [
        'text' => 'Sarin\'s Quads Info',
        'url'  => 'magnets/docs/sarin_quads.pdf',
        'type' => 'PDF',
        'date' => '2016',
        'desc' => 'Temperature monitoring of Hall A Møller quadrupoles at 300A operating current.',
    ],
    [
        'text' => 'S. Wood quad current measurements',
        'url'  => 'magnets/docs/moller_quads_fields_swoods.pdf',
        'type' => 'PDF',
        'date' => '2011',
        'desc' => 'Steve Wood’s Hall A Møller quadrupole current measurements (MQM1H02, MQO1H03, MQO1H03A). These magnets are still in use.',
    ],
    [
        'text' => 'Quad properties',
        'url'  => 'magnets/docs/quad_summary_simul.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'Møller quadrupole properties and simulation integration details.',
    ],
    [
        'links' => [
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary11.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary12.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary13.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary21.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary22.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/QO1HO1_Summary31.pdf'],
        ],
        'date' => '2012',
        'desc' => 'Møller Quad Q01H01 field mapping results',
    ],
    [
        'links' => [
            ['type' => 'XLSX', 'url' => 'magnets/docs/QO1HO1_Summary1.xlsx'],
            ['type' => 'XLSX', 'url' => 'magnets/docs/QO1HO1_Summary2.xlsx'],
            ['type' => 'XLSX', 'url' => 'magnets/docs/QO1HO1_Summary3.xlsx'],
        ],
        'date' => '2012',
        'desc' => 'Møller Quad Q01H01 field mapping results (spreadsheets)',
    ],
    [
        'links' => [
            ['type' => 'PDF',  'url' => 'magnets/docs/QM1H02.pdf'],
            ['type' => 'XLSX', 'url' => 'magnets/docs/QM1H02.xlsx'],
        ],
        'date' => '2012',
        'desc' => 'QM1H02 field mapping results',
    ],
    [
        'text' => 'TOSCA field map for Møller magnets',
        'url'  => 'magnets/docs/TOSCA_map.pdf',
        'type' => 'PDF',
        'date' => '2012',
        'desc' => 'TOSCA field map for Møller magnets (Sasha Glamazdin).',
    ],
    [
        'links' => [
            ['type' => 'PDF', 'url' => 'magnets/docs/Moller_4th_Quad_Spec-1.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/A00000-04-01-0800Rev-Sh2-2.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/A00000-04-01-0800Rev-Sh3-1.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/A00000-04-01-0800Rev-Sh4-1.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/A00000-04-01-0805Rev-Sh1-1.pdf'],
            ['type' => 'PDF', 'url' => 'magnets/docs/A00000-04-01-0805Rev-Sh2-1.pdf'],
        ],
        'date' => '2012',
        'desc' => 'Documentation refers to this as Q4 as it was the fourth quadrupole. In the current spectrometer configuration it is Q1 (Q3 and Q4 being the original magnets it was designed after).',
    ],
    [
        'text' => 'Quad power supplies',
        'url'  => 'magnets/docs/hall_a_moller_quad_power_supplies.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'Hall A Møller quadrupole power supplies',
    ],
    [
        'links' => [
            ['type' => 'PDF', 'text' => 'Part 1', 'url' => 'magnets/docs/Moller_quads6.pdf'],
            ['type' => 'PDF', 'text' => 'Part 2', 'url' => 'magnets/docs/Moller_quads5.pdf'],
            ['type' => 'PDF', 'text' => 'Part 3', 'url' => 'magnets/docs/Moller_quads4.pdf'],
        ],
        'date' => '2000',
        'desc' => 'Møller quad tests',
    ],
    [
        'text' => 'Magnetic measurements',
        'url'  => 'magnets/docs/Moller_quads3.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'Magnetic measurements of the Møller QM quadrupoles.',
    ],
    [
        'text' => 'General quadrupole information',
        'url'  => 'magnets/docs/Moller_quads2.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'General Møller quadrupole information.',
    ],
    [
        'text' => 'Quadrupole formulas',
        'url'  => 'magnets/docs/Moller_quads1.pdf',
        'type' => 'PDF',
        'date' => '2000',
        'desc' => 'Møller quadrupole formulas.',
    ],
    [
        'text' => 'Optical quadrupole settings (pre-Geant4)',
        'url'  => 'magnets/docs/quad_set.pdf',
        'type' => 'PDF',
        'date' => '1998',
        'desc' => 'O. Glamazdin’s RAYTRACE / UNICS calculation of quadrupole optical settings (not Geant4). The method and optical setup are out of date, but the write-up is still of interest.',
    ],
]);

link_table('AMI-14432 Superconducting Magnet', [
    [
        'text' => 'AMI-14432 specifications',
        'url'  => 'magnets/docs/AMI-14432_specs.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'AMI-14432 magnet specifications.',
    ],
    [
        'text' => 'AMI common view',
        'url'  => 'magnets/docs/AMI_common_vew.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'AMI common-view drawing (filename spelling as on disk).',
    ],
    [
        'text' => 'AMI info',
        'url'  => 'magnets/docs/AMI_info.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'AMI information packet (large PDF).',
    ],
    [
        'text' => 'Magnet fill procedure',
        'url'  => 'magnets/docs/moller_magnet_fill_procedure.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'LHe fill procedure for the Møller superconducting magnet.',
    ],
    [
        'text' => 'PT415-RM / CP1110 manual',
        'url'  => 'magnets/docs/PT415-RM_CP1110_Manual.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'PT415-RM / CP1110 manual.',
    ],
    [
        'text' => 'External gaussmeter',
        'url'  => 'magnets/docs/External_Gaussmeter.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'External gaussmeter notes.',
    ],
    [
        'text' => 'T vs Amp',
        'url'  => 'magnets/docs/TvsAmp.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'Temperature versus current.',
    ],
    [
        'text' => 'Ramp rate',
        'url'  => 'magnets/docs/ramp_rate.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'Ramp-rate notes.',
    ],
    [
        'text' => 'Manufacturer field map',
        'url'  => 'magnets/docs/MapFromManufacturer.xlsx',
        'type' => 'XLSX',
        'date' => '2015',
        'desc' => 'Manufacturer field-map spreadsheet and related files.',
    ],
]);

link_table('Legacy Content', [
    [
        'text' => 'Magnet field mapper',
        'url'  => 'magnets/docs/field_mapper.pdf',
        'type' => 'PDF',
        'date' => '2009',
        'desc' => 'Procedure for mapping the superconducting magnet field for chamber alignment.',
    ],
    [
        'text' => '0.85 GeV solenoid note',
        'url'  => 'magnets/docs/moll_0.85gev_solen.pdf',
        'type' => 'PDF',
        'date' => '2002',
        'desc' => 'Historical note on the 0.85 GeV solenoid.',
    ],
    [
        'text' => 'Downstream quads project',
        'url'  => 'magnets/docs/downst_quads.pdf',
        'type' => 'PDF',
        'date' => '1999',
        'desc' => 'Proposal to install two quads downstream of the Møller dipole.',
    ],
    [
        'text' => 'Historic dipole photos',
        'url'  => 'photos/dipole/',
        'type' => 'DIR',
        'date' => '1997',
        'desc' => 'Early photographs of the Møller dipole magnet (p4–p6).',
    ],
    [
        'text' => 'Quadrupole magnet settings',
        'url'  => 'magnets/docs/mag_settings_0.pdf',
        'type' => 'PDF',
        'desc' => 'Quad field and current settings versus beam energy.',
    ],
    [
        'text' => 'Mixed polarimeter photo archive',
        'url'  => 'photos/',
        'type' => 'DIR',
        'desc' => 'Photo dump from the original Møller polarimeter website (targets, magnets, detector, and electronics mixed together).',
    ],
    [
        'text' => 'A00000-02-04-0000',
        'url'  => 'magnets/docs/A00000-02-04-0000Rev-.pdf',
        'type' => 'PDF',
        'date' => '2012',
        'desc' => 'Hall A beamline, SC Møller polarimeter (top assembly).',
    ],
    [
        'text' => 'A00000-02-04-0500',
        'url'  => 'magnets/docs/A00000-02-04-0500Rev-.pdf',
        'type' => 'PDF',
        'date' => '2012',
        'desc' => 'Møller target / quads assembly.',
    ],
    [
        'text' => 'A00000-02-04-0700 Rev D',
        'url'  => 'magnets/docs/A00000-02-04-0700RevD.pdf',
        'type' => 'PDF',
        'date' => '2006',
        'desc' => 'Møller dipole / detector assembly.',
    ],
    [
        'text' => 'A00000-02-04-1300 Rev A',
        'url'  => 'magnets/docs/A00000-02-04-1300RevA.pdf',
        'type' => 'PDF',
        'date' => '2012',
        'desc' => 'Beamline vacuum assembly 12 GeV / dipole vacuum box assembly.',
    ],
]);

PageEnd();
