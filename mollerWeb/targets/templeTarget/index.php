<?php
require_once dirname(dirname(__DIR__)) . '/_includes/bootstrap.php';

PageTitle("Temple University High-Field Target");
PageSubtitle("Documents and drawings");
PageStart("targets/");

$base = 'targets/templeTarget/docs';

link_table('Documents', [
    [
        'text' => 'AK-2_CAT_ENG_130808.pdf',
        'url'  => $base . '/Documents/AK-2_CAT_ENG_130808.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'chassis3.pdf',
        'url'  => $base . '/Documents/chassis3.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'chassis_idle.pdf',
        'url'  => $base . '/Documents/chassis_idle.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'Components.txt',
        'url'  => $base . '/Documents/Components.txt',
        'type' => 'TXT',
        'date' => '2015',
        'desc' => 'List of components for the high-field target arm',
    ],
    [
        'text' => 'DM422Cm.pdf',
        'url'  => $base . '/Documents/DM422Cm.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'LimitSwitches.pdf',
        'url'  => $base . '/Documents/LimitSwitches.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'MaxNetConnections.pdf',
        'url'  => $base . '/Documents/MaxNetConnections.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'moller_fsd.pdf',
        'url'  => $base . '/Documents/moller_fsd.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'Nov20SurveyData.pdf',
        'url'  => $base . '/Documents/Nov20SurveyData.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'Nov20SurveyExplained.pdf',
        'url'  => $base . '/Documents/Nov20SurveyExplained.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'p5connector.pdf',
        'url'  => $base . '/Documents/p5connector.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'status-box3.pdf',
        'url'  => $base . '/Documents/status-box3.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'status_box_pcb.pdf',
        'url'  => $base . '/Documents/status_box_pcb.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'SurveyNov2015',
        'url'  => $base . '/Documents/SurveyNov2015',
        'type' => 'TXT',
        'date' => '2015',
        'desc' => 'Survey results for the Møller polarimeter target holder (5–6 November 2015)',
    ],
    [
        'text' => 'Target control schematics (cold 4 T)',
        'url'  => $base . '/Documents/target_control_schematics_cold.pdf',
        'type' => 'PDF',
        'date' => '2015',
        'desc' => 'Schematics list for the 4 T target control, with photos of the status panel and motor chassis',
    ],
], ['sort' => 'none']);

link_table('Engineering drawings', [
    [
        'text' => 'rotary-feed_thru.gif',
        'url'  => $base . '/EngineerDrawings/rotary-feed_thru.gif',
        'type' => 'GIF',
        'date' => '2015',
    ],
    [
        'text' => 'rotary_feed_thru_2.png',
        'url'  => $base . '/EngineerDrawings/rotary_feed_thru_2.png',
        'type' => 'PNG',
        'date' => '2015',
    ],
    [
        'text' => 'Rotational elements.pdf',
        'url'  => $base . '/EngineerDrawings/Rotational%20elements.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'Target_arm.pdf',
        'url'  => $base . '/EngineerDrawings/Target_arm.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'target_ladder.pdf',
        'url'  => $base . '/EngineerDrawings/target_ladder.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
], ['sort' => 'none']);

link_table('New documents for the web', [
    [
        'text' => 'ArmAtFeedThruConnection.jpg',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/ArmAtFeedThruConnection.jpg',
        'type' => 'JPG',
        'date' => '2015',
    ],
    [
        'text' => 'FeedThruSealing.jpg',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/FeedThruSealing.jpg',
        'type' => 'JPG',
        'date' => '2015',
    ],
    [
        'text' => 'FeedThruTechDrawing.pdf',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/FeedThruTechDrawing.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'ladderAndFoils.JPG',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/ladderAndFoils.JPG',
        'type' => 'JPG',
        'date' => '2015',
    ],
    [
        'text' => 'LadderScrewLocation.JPG',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/LadderScrewLocation.JPG',
        'type' => 'JPG',
        'date' => '2015',
    ],
    [
        'text' => 'TargetArmFix.png',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/TargetArmFix.png',
        'type' => 'PNG',
        'date' => '2015',
    ],
], ['sort' => 'none']);

link_table('New feed-through', [
    [
        'text' => '84 series motor info.pdf',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/New_Feedthru/84%20series%20motor%20info.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'MVF-170.pdf',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/New_Feedthru/MVF-170.pdf',
        'type' => 'PDF',
        'date' => '2015',
    ],
    [
        'text' => 'MVF-170.stp',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/New_Feedthru/MVF-170.stp',
        'type' => 'STP',
        'date' => '2015',
    ],
    [
        'text' => 'TEMPLE LR FDTHRU REF.stp',
        'url'  => $base . '/EngineerDrawings/NewDocsForWeb/New_Feedthru/TEMPLE%20LR%20FDTHRU%20REF.stp',
        'type' => 'STP',
        'date' => '2015',
    ],
], ['sort' => 'none']);

PageEnd();
