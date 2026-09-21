<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Publications");
PageSubtitle("Hall A Møller papers and theses");
PageStart("publications/");

/**
 * publication_table: date, authors, title, url, journal, arxiv
 * Optional: more => extra title-cell links. Missing arXiv renders as –.
 */

publication_table('Published Papers', [
    [
        'date' => '01-2023',
        'journal' => 'NIM-A',
        'authors' => 'D.E. King, D.C. Jones, et al.',
        'title' => 'Precision Møller polarimetry for PREX-2 and CREX',
        'url' => 'https://doi.org/10.1016/j.nima.2022.167506',
        'arxiv' => 'arXiv:2207.02150',
    ],
    [
        'date' => '11-2022',
        'journal' => 'NIM-A',
        'authors' => 'D.C. Jones, J. Napolitano, et al.',
        'title' => 'Accurate Determination of the Electron Spin Polarization In Magnetized Iron and Nickel Foils for Møller Polarimetry',
        'url' => 'https://doi.org/10.1016/j.nima.2022.167444',
        'arxiv' => 'arXiv:2203.11238',
    ],
    [
        'date' => '03-2017',
        'journal' => 'Physics Letters B',
        'authors' => 'J.A. Magee, A. Narayan, et al.',
        'title' => 'A Novel Comparison of Møller and Compton Electron-beam Polarimeters',
        'url' => 'https://doi.org/10.1016/j.physletb.2017.01.026',
        'arxiv' => 'arXiv:1610.06083',
    ],
    [
        'date' => '06-2012',
        'journal' => 'Il Nuovo Cimento C',
        'authors' => 'O. Glamazdin',
        'title' => 'Møller (iron foils) existing techniques',
        'url' => 'https://doi.org/10.1393/ncc/i2012-11275-8',
        'more' => [
            ['text' => 'PDF', 'url' => 'publications/docs/Glamazdin_iron_foils_2012.pdf'],
        ],
    ],
    [
        'date' => '04-2004',
        'journal' => 'Phys Rev ST Accel Beams',
        'authors' => 'J.M. Grames, C.K. Sinclair, et al.',
        'title' => 'Unique Electron Polarimeter Analyzing Power Comparison and Precision Spin-based Energy Measurement',
        'url' => 'https://doi.org/10.1103/PhysRevSTAB.7.042802',
        'more' => [
            ['text' => 'PDF', 'url' => 'publications/docs/Grames_spin_dance_2004.pdf'],
        ],
    ],
]);

publication_table('Theses', [
    [
        'date' => '08-2026',
        'journal' => 'Syracuse University',
        'authors' => 'Faraz Chahili',
        'title' => 'Møller Polarimetry for Nucleon Form Factor Experiments in the Super BigBite Spectrometer (SBS) Program',
        'url' => 'publications/docs/FarazChahili_Thesis.pdf',
    ],
    [
        'date' => '12-2021',
        'journal' => 'Syracuse University',
        'authors' => 'Eric King',
        'title' => 'Utilizing Parity Violating Electron Scattering As a Probe to Measure the Neutron Radius of ²⁰⁸Pb',
        'url' => 'https://surface.syr.edu/etd/1464/',
    ],
    [
        'date' => '05-2019',
        'journal' => 'Temple University',
        'authors' => 'William Henry',
        'title' => 'Precision Moller Polarimetry and Applications at Jefferson Laboratory',
        'url' => 'https://www.osti.gov/biblio/1574104',
    ],
    [
        'date' => '06-2012',
        'journal' => 'Syracuse University',
        'authors' => 'Ahmed Zafar',
        'title' => 'Measurement Of Neutron Radius In Lead By Parity Violating Scattering Flash ADC DAQ',
        'url' => 'https://surface.syr.edu/phy_etd/120/',
    ],
]);
PageEnd();
