<?php
require_once __DIR__ . '/data_pull.php';
function showbytype($type){
    $rundata = isset($_SESSION["rundata"]) ? $_SESSION["rundata"] : array();
    $day="";
    $run="";
    $tabcolspan = 1;
    $subtabcolspan = 22;
    if($type=="bleed_through") $subtabcolspan = 9;
    $ispending=false;
    if($type=="pending"){
      foreach(array_reverse($rundata) as $rundeets){
        if($rundeets['rundet_type'] == "pending"){
          $ispending=true;
        }
      }
    }
    if( $type == pending && $ispending == false) goto nopending;
    if( $type == pending){
      echo sectionbanner("Runs of type ".$type);
    }
    if( $type != pending){
      echo sectionbanner("Runs of type ".$type);
    }

    echo "<!--MAIN CONTENT-->\n";

    $daycounter=-1;
    foreach(array_reverse($rundata) as $rundeets){
      $listit=false;
      
      if($rundeets['rundet_type']==$type) $listit=true;

      if($listit==true){
        if($rundeets['rundet_day'] != $day){
          $day=$rundeets['rundet_day'];
          $daycounter++;
          //FIRST THING -- IF THIS IS A NEW DATE BUT NOT THE FIRST DATE ... CLOSE THE LAST DATE TABLE AND EXPERIMENT CELL
          if($daycounter != 0){
            //CLOSE THE DATE TABLE
            echo "</tbody>
</table>
";
            //CLOSE THE EXPERIMENT TABLE DATA CELL
            echo "</td>
"; 
          }
          //DO WE NEED TO START A NEW EXPERIMENT TABLE DATA ROW?
          if(($daycounter % $tabcolspan) == 0){
            //START FIRST TABLE ROW OF EXPERIMENT TABLE IF FIRST DAY
            if($daycounter == 0){
              echo "<tr class='this-row'>"; 
            } else {
              //IF NOT FIRST DAY PREVIOUS ROW OF EXPERIMENT TABLE AND START NEW ONE
              echo "</tr>
<tr class='that-row'>
"; 
            }
          }
          //DECLARE CELL FOR EXPERIMENT TABLE TO HOLD DAILY TABLE LIST
          echo "<td valign='top'>";
          //DECLARE THE TABLE FOR THE NEW DATE -- TODO: WE'RE GOING TO WANT TO LINK THIS
          if($type=="bleed_through") echo "<!--TABLE OF RUN STATS-->
<table class='data-table data-table-runs' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<th colspan=".$subtabcolspan.">
<a href='showbyday.php?day=$day'>".$day."</a>
</th>
</tr>"
;
          else echo "<table class='data-table data-table-runs' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<th colspan=".$subtabcolspan."><a href='showbyday.php?day=$day'>".$day."</a>
</th>
</tr>
";
          if($type=="bleed_through") echo runtableheaderbleed();
          else echo runtableheader();
          //IS THIS NEW GROUP? IT'S A NEW DAY SO IT BETTER DAMN WELL BE.
	  if( $rundeets['id_run'] != $run ){
	    $run = $rundeets['id_run'];
            if($type=="bleed_through") echo runtablerowbleed( $rundeets );
            else echo runtablerow( $rundeets );
	  }
        //NOW WHAT TO DO IF IT IS NOT A NEW DAY
        } else {
            if($type=="bleed_through") echo runtablerowbleed( $rundeets );
            else echo runtablerow( $rundeets );
        }//END IF NEW DAY CHECK
      }//END IF EXP="PREXII"
    }//END FOR EACH

    //END THE LAST DATA TABLE
    echo "</tr>
</tbody>
</table>";
    if($type != "bleed_through") echo tablecolorexplainer();

    nopending:
    if( $type == pending && $ispending == false) echo "<p>There are currently no runs pending classification. :)</p>";

  }

include "functions.php";
  echo pageheaderhtml();
  $runtype = molpol_get('type');
  $refresh = molpol_get('refresh');

  if(isset($_GET['refresh'])){
    if($refresh==true) datapull();
  }
  //types supported bleed_through, pending, beam_pol, spin_dance, false_asym
  if($runtype){

    if($runtype == 'pending'
        || $runtype == 'bleed_through'
        || $runtype == 'false_asym'
        || $runtype == 'beam_pol'
        || $runtype == 'beam_pol_sys'
        || $runtype == 'scan_rates'
        || $runtype == 'spin_dance'
        || $runtype == 'commiss'){
      showbytype($runtype);
    } else {
      echo "<p>No type specified to list. :(</p>";
    }

  }

  echo pagefooterlastupdated();
  echo " 
";
  echo pagefooterincludescripts();
  echo " 
";
  echo pagefooterclosepage();
  echo " 
";
