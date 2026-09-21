<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Polarimetry Literature");
PageStart("literature/");

/**
 * publication_table: date, topic, authors, title, url, journal, arxiv
 * topic adds the Topic(s) column. Omit url/arxiv when there is no link
 * (missing arXiv renders as –). Rows sort newest-first by date.
 */

publication_table('Møller Polarimetry', [
    [
        'topic'   => 'Hall C Møller',
        'authors' => 'M. Loppacher',
        'title'   => 'Møller Polarimetry for CEBAF Hall C',
        'url'     => 'literature/docs/Loppacher_Moller_Polarimetry_CEBAF_Hall_C.pdf',
        'journal' => 'University of Basel (Inaugural Dissertation)',
        'date'    => '04-1996',
    ],
    [
        'topic'   => 'Levchuk Effect',
        'authors' => 'A. Afanasev, A. Glamazdin',
        'title'   => 'Atomic Electron Motion for Møller Polarimetry in a Double-Arm Mode',
        'url'     => 'https://arxiv.org/abs/hep-ex/9602002',
        'date'    => '02-1996',
        'arxiv'   => 'hep-ex/9602002',
    ],
    [
        'topic'   => 'Levchuk Effect',
        'authors' => 'M. Swartz, et al.',
        'title'   => 'Observation of Target Electron Momentum Effects in Single-arm Møller Polarimetry',
        'url'     => 'https://doi.org/10.1016/0168-9002(95)00384-3',
        'journal' => 'NIM-A',
        'date'    => '09-1995',
        'arxiv'   => 'hep-ex/9412006',
    ],
    [
        'topic'   => 'Levchuk Effect',
        'authors' => 'L.G. Levchuk',
        'title'   => 'The Intra-atomic Motion of Bound Electrons as a Possible Source of the Systematic Error in Electron Beam Polarization Measurements by Means of a Möller Polarimeter',
        'url'     => 'https://doi.org/10.1016/0168-9002(94)90505-3',
        'journal' => 'NIM-A',
        'date'    => '07-1994',
    ],
    [
        'topic'   => 'Moller Polarimetry',
        'authors' => 'P.S. Cooper, et al.',
        'title'   => 'Polarized Electron-Electron Scattering at GeV Energies',
        'url'     => 'https://doi.org/10.1103/PhysRevLett.34.1589',
        'journal' => 'Phys. Rev. Lett.',
        'date'    => '06-1975',
    ],
]);

publication_table('Accelerator', [
    [
        'topic'   => 'Spin Precession',
        'authors' => 'D.W. Higinbotham',
        'title'   => 'Electron Spin Precession at CEBAF',
        'url'     => 'https://doi.org/10.1063/1.3215753',
        'journal' => 'AIP Conference Proceedings (SPIN2008)',
        'date'    => '08-2009',
        'arxiv'   => '0901.4484',
    ],
]);

publication_table('Theory', [
    [
        'topic'   => 'Moller EW RadCorr',
        'authors' => 'A. Aleksejevs, S. Barkanova, et al.',
        'title'   => 'Electroweak Radiative Corrections for Polarized Møller Scattering at the Future 11 GeV JLab Experiment',
        'url'     => 'https://doi.org/10.1103/PhysRevD.82.093013',
        'journal' => 'Physical Review D',
        'date'    => '11-2010',
        'arxiv'   => '1008.3355',
    ],
    [
        'topic'   => 'Moller QED RadCorr',
        'authors' => 'A. Ilyichev and V. Zykunov',
        'title'   => 'MERADGEN 1.0: Monte Carlo Generator for the Simulation of Radiative Events in Parity Conserving Doubly-polarized Møller Scattering',
        'url'     => 'https://doi.org/10.1016/j.cpc.2006.10.002',
        'journal' => 'Computer Physics Communications',
        'date'    => '02-2007',
        'arxiv'   => 'hep-ph/0603027',
    ],
    [
        'topic'   => 'Moller QED RadCorr',
        'authors' => 'A. Ilyichev and V. Zykunov',
        'title'   => 'Lowest order QED radiative corrections to longitudinally polarized Møller scattering',
        'url'     => 'https://doi.org/10.1103/PhysRevD.72.033018',
        'journal' => 'Physical Review D',
        'date'    => '08-2005',
        'arxiv'   => 'hep-ph/0504191',
    ],
    [
        'topic'   => 'Moller QED RadCorr',
        'authors' => 'N.M. Shumeiko, J.G. Suarez',
        'title'   => 'Radiative Corrections to Moller Scattering of Polarized Particles',
        'url'     => 'https://arxiv.org/abs/hep-ph/9712407',
        'date'    => '12-1997',
        'arxiv'   => 'hep-ph/9712407',
    ],
    [
        'topic'   => 'Moller EW RadCorr',
        'authors' => 'A. Czarnecki and W.J. Marciano',
        'title'   => 'Electroweak Radiative Corrections To Polarized Møller Scattering Asymmetries',
        'url'     => 'https://doi.org/10.1103/PhysRevD.53.1066',
        'journal' => 'Physical Review D',
        'date'    => '02-1996',
        'arxiv'   => 'hep-ph/9507420',
    ],
]);

publication_table('Other Papers of Interest', [
    [
        'topic'   => 'e- Motion in Fields',
        'authors' => 'Morris L. Swartz',
        'title'   => 'Physics With Polarized Electron Beams*',
        'url'     => 'https://www.slac.stanford.edu/pubs/slacpubs/4500/slac-pub-4656.pdf',
        'journal' => 'SLAC Pubs',
        'date'    => '08-1987',
    ],
    [
        'topic'   => 'Helicity Control Board',
        'authors' => 'R. Flood, J. Hansknecht, S. Higgins, and R. Suleiman',
        'title'   => "Helicity Control Board User's Guide (Draft 3)",
        'url'     => 'literature/docs/Hel_Board_UserGuide.pdf',
        'journal' => 'Internal (JLab)',
        'date'    => '03-2010',
        'more'    => [
            ['text' => 'PREX wiki PDF', 'url' => 'https://prex.jlab.org/wiki/images/3/34/HelicityUsersGuideFeb4.pdf'],
        ],
    ],
]);

PageEnd();
