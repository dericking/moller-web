<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("Electronics Upgrade");
PageSubtitle("2006–2007 Phase I detector electronics upgrade");
PageStart("daq/");

link_table('Upgrade notes', [
    [
        'text' => 'Electronics upgrading (2007)',
        'url'  => 'daq/e_upgrade/docs/upgrading_electronics.pdf',
        'type' => 'PDF',
        'date' => '2007',
        'desc' => 'Phase I status: modules installed and linked notes for PLU, TDC, DAC, and discriminator.',
    ],
    [
        'text' => 'Electronics upgrading proposal (2006)',
        'url'  => 'daq/e_upgrade/docs/electronics_upgrade.pdf',
        'type' => 'PDF',
        'date' => '2006',
        'desc' => 'Earlier proposal: bandwidth goals, candidate modules, discriminator modification notes, and old/new schematics.',
    ],
]);

link_table('Module pages', [
    [
        'text' => 'PLU Module (CAEN V1495)',
        'url'  => 'daq/e_upgrade/docs/plu_module.pdf',
        'type' => 'PDF',
        'desc' => 'Custom 16×16 programmable logic unit firmware, flashing, register map, and configuration.',
    ],
    [
        'text' => 'TDC Module (CAEN V1190B)',
        'url'  => 'daq/e_upgrade/docs/tdc_module.pdf',
        'type' => 'PDF',
        'desc' => 'Multi-hit TDC settings and CODA / VxWorks configuration notes.',
    ],
    [
        'text' => 'DAC Module (VMIVME-4140)',
        'url'  => 'daq/e_upgrade/docs/dac_module.pdf',
        'type' => 'PDF',
        'desc' => 'Analog outputs for remote discriminator thresholds; library and plu_server commands.',
    ],
    [
        'text' => 'P/S 708 Discriminator (modified)',
        'url'  => 'daq/e_upgrade/docs/discriminator_module.pdf',
        'type' => 'PDF',
        'desc' => 'S/N 23899; /OUT used for remote threshold voltage.',
    ],
    [
        'text' => 'LeCroy 2365 Octal Logic Matrix',
        'url'  => 'daq/e_upgrade/docs/2365-spec.pdf',
        'type' => 'PDF',
        'desc' => 'Spec sheet for the PLU being replaced (CAMAC ECLine Model 2365).',
    ],
]);

link_table('Schematics and datasheets', [
    [
        'text' => 'Old detector electronics (schematic)',
        'url'  => 'daq/e_upgrade/docs/all_old.pdf',
        'type' => 'PDF',
        'desc' => 'Simplified schematic of the pre-upgrade detector electronics.',
    ],
    [
        'text' => 'New detector electronics (schematic)',
        'url'  => 'daq/e_upgrade/docs/all_new.pdf',
        'type' => 'PDF',
        'desc' => 'Schematic of the upgraded detector electronics.',
    ],
    [
        'text' => 'LED front panel',
        'url'  => 'daq/e_upgrade/docs/LED_front.pdf',
        'type' => 'PDF',
        'desc' => 'Front-panel drawing.',
    ],
    [
        'text' => 'Electronics list',
        'url'  => 'daq/e_upgrade/docs/e-list.pdf',
        'type' => 'PDF',
        'desc' => 'Module list for the upgrade.',
    ],
    [
        'text' => 'CAEN V1495',
        'url'  => 'daq/e_upgrade/docs/V1495_REV1.pdf',
        'type' => 'PDF',
        'desc' => 'General Purpose VME Board (PLU).',
    ],
    [
        'text' => 'CAEN V1190B',
        'url'  => 'daq/e_upgrade/docs/V1190_REV7.pdf',
        'type' => 'PDF',
        'desc' => 'Time to Digital Converter.',
    ],
    [
        'text' => 'CAEN V495',
        'url'  => 'daq/e_upgrade/docs/V495_rev0.pdf',
        'type' => 'PDF',
        'desc' => 'Programmable Logic Unit (candidate from 2006 proposal).',
    ],
    [
        'text' => 'VMIVME-4140',
        'url'  => 'daq/e_upgrade/docs/vmivme4140_manual.pdf',
        'type' => 'PDF',
        'desc' => 'Digital to Analog Converter manual.',
    ],
    [
        'text' => 'P/S 708 datasheet',
        'url'  => 'daq/e_upgrade/docs/708ds.pdf',
        'type' => 'PDF',
        'desc' => 'Philips Scientific 708 Discriminator Datasheet',
    ],
    [
        'text' => 'P/S 754 datasheet',
        'url'  => 'daq/e_upgrade/docs/754ds.pdf',
        'type' => 'PDF',
        'desc' => 'Philips Scientific 754 Quad Majority Logic Datasheet',
    ],
]);

PageEnd();
