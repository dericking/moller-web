<?php
require_once __DIR__ . '/data_pull.php';
function showrunsondate($day){
    echo "<h1>Information in MolPol database for date of meansurement ".$day."</h1>";

    $groupdata = isset($_SESSION["groupdata"]) ? $_SESSION["groupdata"] : array();
    echo "<h2>Summary of grouped polarization analyses from this day:</h2>";
    echo "<table class='data-table data-table-group' cellspacing='0' cellpadding='0'>";
    echo grouptableheader();
    foreach($groupdata as $groupdeets){
      if($groupdeets['group_date'] == $day){
        echo grouptablerow($groupdeets);
      }
    }
    echo "</table>";

    echo "<h2>List of runs of type <i>beam_pol</i>, <i>beam_pol_sys</i>, <i>scan_rates</i> or <i>false_asym</i> taken on this day:</h2>";

    $rundata = isset($_SESSION["rundata"]) ? $_SESSION["rundata"] : array();
    echo "<table class='data-table data-table-runs' cellspacing='0' cellpadding='0'>";
    echo runtableheader();
    foreach($rundata as $rundeets){
      if($rundeets['rundet_day']==$day){
        if($rundeets['rundet_type']=='false_asym')      echo runtablerow($rundeets);
        if($rundeets['rundet_type']=='scan_rates')      echo runtablerow($rundeets);
        if($rundeets['rundet_type']=='beam_pol')        echo runtablerow($rundeets);
        if($rundeets['rundet_type']=='beam_pol_sys')    echo runtablerow($rundeets);
        if($rundeets['rundet_type']=='pending')         echo runtablerow($rundeets);
        if($rundeets['rundet_type']=='spin_dance')      echo runtablerow($rundeets);
        //if($rundeets['rundet_type']=='bleed_through')   echo runtablerow($rundeets);
      } elseif( strtotime($rundeets['rundet_day']) > strtotime($day) ){
      	break; //PASSED ALL DB ENTRIES FOR THAT DAY, BREAK
      }
    }
    echo "</table>";
    echo tablecolorexplainer();

  }

function showlistofdates(){
    echo "<h2>List of day's where: <i>beam_pol</i>, <i>scan_rates</i>, <i>false_asym</i> measurements were taken or where <i>pending</i> runs have yet to be classified.</h2><br />";
    $runday = $_SESSION["runday"];
    foreach( $runday as $item ){ 
      echo "<a href='showbyday.php?day=$item'>".$item."</a><br>";
    }
    echo "<br /><br />";
  }

include "functions.php";  
  echo pageheaderhtml();
  //byday.php?date="..."
  $day     = molpol_get('day');
  $refresh = molpol_get('refresh');
  if(isset($_GET['refresh'])){
    datapull();
  }
  if($day){
    showrunsondate($day);
  }else{
    showlistofdates();
  }

  echo pagefooterhtml();
