<?php
require_once __DIR__ . '/data_pull.php';
  function listbygroup($group){

    $groupdata = isset($_SESSION["groupdata"]) ? $_SESSION["groupdata"] : array();
    foreach($groupdata as $groupdeets){
        if($groupdeets['id_group']==$group){
            echo "<h2>Summary of grouping ".$group." analysis:</h2>";
            echo "<table class='data-table data-table-group' cellspacing='0' cellpadding='0'>";
            echo grouptableheader();
            echo grouptablerow($groupdeets);
            echo "</table>";
            echo "<h2>Fit Summary on grouping ".$group.":</h2>";
            echo groupfitsummary($groupdeets);
            $groupId = molpol_positive_int_id($group);
            $burst = molpol_burst_plot_file($groupId);
            if ($groupId > 0 && $burst[0] !== '' && is_file($burst[0])) {
              echo "<img src='" . htmlspecialchars($burst[1], ENT_QUOTES, 'UTF-8') . "' alt='' class='burst-plot'><br />";
            }
            break;
        }
    }

    echo sectionbanner("List of runs taken in grouping $group:");

    $rundata = isset($_SESSION["rundata"]) ? $_SESSION["rundata"] : array();

    echo "<!--GROUP RUN LIST-->\n";
    echo "<div class='list-table-wrap'>\n";
    echo "<table class='data-table data-table-runs' cellspacing='0' cellpadding='0'>\n";
    echo runtableheader();
    $foundone=false;
    foreach($rundata as $rundeets){
      if($rundeets['FLOOR(rundet_pcrex_group)']==$group){
        echo runtablerow($rundeets);
	if($rundeets['rundet_pcrex_group'] > ($group+2) ) $foundone=true;
      } elseif( $foundone == true ){
      	break;
      }
    }
    echo "</table>\n";
    echo tablecolorexplainer();
    echo "</div>\n";

    echo sectionbanner("Most recent plots for grouping $group:");
    $groupId = molpol_positive_int_id($group);
    $groupPlots = molpol_group_plot_paths($groupId);
    echo molpol_render_plot_gallery($groupPlots[0], $groupPlots[1], true);

  }

function showgroupsummarytable($group){

    $groupdata = isset($_SESSION["groupdata"]) ? $_SESSION["groupdata"] : array();
    echo "<h2>Summary of PREX-II group analyses:</h2>";
    echo "<table class='data-table data-table-group' cellspacing='0' cellpadding='0'>";
    echo grouptableheader();
    foreach($groupdata as $groupdeets){
      if($groupdeets['id_group'] >= 1000 && $groupdeets['id_group'] < 2999){
        echo grouptablerow($groupdeets);
      }
    }
    echo "</table>";

    $groupdata = isset($_SESSION["groupdata"]) ? $_SESSION["groupdata"] : array();
    echo "<h2>Summary of CREX group analyses:</h2>";
    echo "<table class='data-table data-table-group' cellspacing='0' cellpadding='0'>";
    echo grouptableheader();
    foreach($groupdata as $groupdeets){
      if($groupdeets['id_group'] >= 3000){
        echo grouptablerow($groupdeets);
      }
    }
    echo "</table>";

  }

include "functions.php";
  echo pageheaderhtml();
  $group     = molpol_get('group');
  $refresh   = molpol_get('refresh');
  $allgroup  = molpol_get('allgroup');
  if(isset($_GET['refresh'])){
    datapull();
  }
  if($allgroup){
    showgroupsummarytable();
  } else if($group){
    listbygroup($group);
  }else{
    echo "<p>No group specified to list. :(</p>";
  }

  echo pagefooterlastupdated();
  echo pagefooterincludescripts();
  echo pagefooterclosepage();
