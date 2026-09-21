<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("Tilting Target System");
PageSubtitle("Old Helmholtz / tilting target drawings, photos, and optics");
PageStart("targets/");

$base = 'targets/tiltingTarget/docs';

link_table('Drawings', [
    [
        'text' => 'Coil_Com.pdf',
        'url'  => $base . '/Coil_Com.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'd3-target.jpg',
        'url'  => $base . '/d3-target.jpg',
        'type' => 'JPG',
        'date' => '2004',
    ],
    [
        'text' => 'd3-target.pdf',
        'url'  => $base . '/d3-target.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'les_6_mod.pdf',
        'url'  => $base . '/les_6_mod.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'new_target_3D.pdf',
        'url'  => $base . '/new_target_3D.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Sup_Com.pdf',
        'url'  => $base . '/Sup_Com.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Sup_Com_1.pdf',
        'url'  => $base . '/Sup_Com_1.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Target_assembly.jpg',
        'url'  => $base . '/Target_assembly.jpg',
        'type' => 'JPG',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Com_1.pdf',
        'url'  => $base . '/Tg_Com_1.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Com_2.pdf',
        'url'  => $base . '/Tg_Com_2.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Com_3.pdf',
        'url'  => $base . '/Tg_Com_3.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Com_3_3.pdf',
        'url'  => $base . '/Tg_Com_3_3.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Com_3_4.pdf',
        'url'  => $base . '/Tg_Com_3_4.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Fr_0_fr.pdf',
        'url'  => $base . '/Tg_Fr_0_fr.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Fr_2.pdf',
        'url'  => $base . '/Tg_Fr_2.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Fr_3.pdf',
        'url'  => $base . '/Tg_Fr_3.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tg_Fr_4.pdf',
        'url'  => $base . '/Tg_Fr_4.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Vac_Ch.pdf',
        'url'  => $base . '/Vac_Ch.pdf',
        'type' => 'PDF',
        'date' => '2004',
    ],
    [
        'text' => 'Tilting_target_schematic_1.jpg',
        'url'  => $base . '/Tilting_target_schematic_1.jpg',
        'type' => 'JPG',
        'date' => '1997',
    ],
    [
        'text' => 'Tilting_target_schematic_2.jpg',
        'url'  => $base . '/Tilting_target_schematic_2.jpg',
        'type' => 'JPG',
        'date' => '1997',
    ],
], ['sort' => 'none']);

link_table('Optics', [
    [
        'text' => 'Three_quad_optics.jpg',
        'url'  => $base . '/Three_quad_optics.jpg',
        'type' => 'JPG',
        'date' => '1999',
    ],
], ['sort' => 'none']);

link_table('Photos', [
    [
        'text' => 'Photos',
        'url'  => 'targets/tiltingTarget/photos/',
        'type' => 'DIR',
        'date' => '2004',
        'desc' => 'Installation and hardware photos of the old tilting target.',
    ],
], ['sort' => 'none']);

link_table('Foils', [
    [
        'text' => 'Target foils information',
        'url'  => $base . '/foils_info.pdf',
        'type' => 'PDF',
        'date' => '2004',
        'desc' => 'Foils used in the old tilting target (dimensions, weights, polarization).',
    ],
], ['sort' => 'none']);

PageEnd();
