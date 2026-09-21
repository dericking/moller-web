<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Links & Tools");
PageStart("links/");

/**
 * Keys: text, url, desc. Optional: type, date.
 * Several files in one row: 'links' => [ ['type'=>'PDF','url'=>'…'], … ]
 *
 * This page is the section hub. Calculators live under tools/ (not here).
 */

link_table('Tools', [
    [
        'text' => 'Asymmetry Uncertainty Calculator',
        'url'  => 'tools/asymmetry-uncertainty/',
        'type' => 'WEB',
        'desc' => 'Required counts N or relative uncertainty σA/A for rate asymmetries, with optional run time from event rate. (D. Jones)',
        'date' => '2026',
    ],
    [
        'text' => 'Target Foil Heating Calculator',
        'url'  => 'tools/foil-heating/',
        'type' => 'WEB',
        'desc' => 'Intensity-weighted average temperature rise for a circular iron foil. (D. Jones)',
        'date' => '2026',
    ],
    [
        'text' => 'Magnet Pole Tip & Current Calculator',
        'url'  => 'tools/magnet-pole-tip/',
        'type' => 'WEB',
        'date' => '2020',
        'desc' => 'Quadrupole and dipole: current ↔ pole-tip field. (D.E. King)',
    ],
], [
    'sort' => false,
]);

link_table('Møller Polarimeter External Links', [
    [
        'text' => 'ELOG',
        'url'  => 'https://hallcweb.jlab.org/elogs/Hall+A+Moller/',
        'type' => 'EXT',
        'desc' => "Møller Polarimetry ELOG (login req'd)",
    ],
    [
        'text' => 'Wiki',
        'url'  => 'https://hallaweb.jlab.org/wiki/index.php/Moller',
        'type' => 'EXT',
        'desc' => 'The Wiki for the Møller polarimeter. All sections/pages are not regularly maintained but there is quite a bit of useful information here.',
    ],
    [
        'text' => 'MolPol',
        'url'  => 'https://www.github.com/JeffersonLab/halla_molpol_sim',
        'type' => 'EXT',
        'desc' => 'Geant4 Monte Carlo simulation software for the Møller Polarimeter.',
    ],
    [
        'text' => 'MOLANA',
        'url'  => 'https://www.github.com/JeffersonLab/halla_molana',
        'type' => 'EXT',
        'desc' => 'Current Hall-A Møller polarimetry analysis code.',
    ],
]);

PageEnd();
