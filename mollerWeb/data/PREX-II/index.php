<?php
require_once __DIR__ . '/data_pull.php';
function showdategrouptables($exp){

    $rundata = isset($_SESSION["rundata"]) ? $_SESSION["rundata"] : array();
    $day="";
    $daytabcolspan = 6;

    //include "functions.php";
    //$text = "Grouped Data Taken during ".$exp;
    //sectionheaderpanel($text);

    echo sectionbanner("Grouped Data Taken during ".$exp);
    echo "<div class='day-tables'>\n";

    $daycounter=-1;
    foreach(array_reverse($rundata) as $rundeets){
      $listit=false;

      if($rundeets['rundet_type']=='false_asym')   $listit=true;
      if($rundeets['rundet_type']=='scan_rates')   $listit=true;
      if($rundeets['rundet_type']=='beam_pol')     $listit=true;
      if($rundeets['rundet_type']=='beam_pol_sys') $listit=true;
      if($rundeets['rundet_type']=='pending')      $listit=true;
      if($rundeets['rundet_type']=='spin_dance')   $listit=true;

      if($listit==true && $rundeets['experiment']==$exp){
        if($rundeets['rundet_day'] != $day){
          $day=$rundeets['rundet_day'];
          $daycounter++;
          //FIRST THING -- IF THIS IS A NEW DATE BUT NOT THE FIRST DATE ... CLOSE THE LAST DATE TABLE AND EXPERIMENT CELL
          if($daycounter != 0){
            //CLOSE THE DATE TABLE
            echo "      </tbody>
    </table>
  </div>
";
          }
          //DECLARE THE TABLE FOR THE NEW DATE
          echo "
  <div class='day-table-wrap'>
    <table class='data-table data-table-day' cellspacing='0' cellpadding='0'>
      <tbody>
        <tr class='data-table-head'>
          <th colspan=".$daytabcolspan.">
            <a href='showbyday.php?day=$day'>".$day."</a>
          </th>
        </tr>
        <tr class='data-table-cols'>
          <th>Group</th>
          <th>Type</th>
          <th>IHWP</th>
          <th>Targ</th>
          <th>Patt</th>
          <th>Freq</th>
        </tr>
";
          //IS THIS NEW GROUP? IT'S A NEW DAY SO IT BETTER DAMN WELL BE.
	  if( $rundeets['FLOOR(rundet_pcrex_group)'] != $grp ){
	    $grp = $rundeets['FLOOR(rundet_pcrex_group)']; //SET GROUP = NEW GROUP
	    echo "        <tr>
          <td><a href='showgroup.php?group=$grp'>".$grp."</a></td>
          <td>".$rundeets['rundet_type']."</td>
          <td>".$rundeets['set_ihwp']."</td>
";
                  $target="null";
                  if($rundeets['set_target']==1) $target="Cu";
                  if($rundeets['set_target']==2) $target="10um";
                  if($rundeets['set_target']==3) $target="4um";
                  if($rundeets['set_target']==4) $target="1um";
            echo "          <td>".$target."</td>
          <td>".$rundeets['set_hel_pattern']."</td>
          <td>".round($rundeets['set_hel_freq'])."</td>
        </tr>
";
	  }
        //NOW WHAT TO DO IF IT IS NOT A NEW DAY
        } else {
          //IS NEW GROUP?
          if( $rundeets['FLOOR(rundet_pcrex_group)'] != $grp ){
	    $grp = $rundeets['FLOOR(rundet_pcrex_group)']; //SET GROUP = NEW GROUP
	    echo "        <tr>
          <td><a href='showgroup.php?group=$grp'>".$grp."</a></td>
          <td>".$rundeets['rundet_type']."</td>
          <td>".$rundeets['set_ihwp']."</td>
";
                  $target="null";
                  if($rundeets['set_target']==1) $target="Cu";
                  if($rundeets['set_target']==2) $target="10um";
                  if($rundeets['set_target']==3) $target="4um";
                  if($rundeets['set_target']==4) $target="1um";
            echo "          <td>".$target."</td>
          <td>".$rundeets['set_hel_pattern']."</td>
          <td>".round($rundeets['set_hel_freq'])."</td>
        </tr>
";
	  }
        }//END IF NEW DAY CHECK
      }//END IF EXP="PREXII"
    }//END FOR EACH

            echo "      </tbody>
    </table>
  </div>
";

    echo "</div><!-- end day-tables -->\n";

    echo sectionbanner("Aggregated Result Plots for ".$exp);
    echo molpol_render_aggregated_plot_gallery(
      dirname(__FILE__) . '/../analysis/aggregated',
      '../analysis/aggregated/',
      $exp
    );
  }

//echo "header('Content-Type: text/plain')";
  include "functions.php";
  //Useful for data_pull debugging
  //echo "<pre>";
  //echo print_r($rundata);
  //echo "</pre>";

  echo pagestartcommon();
  echo " 
";
  echo pagetoplinks();
  echo " 
";
  echo pagegraphictitle();
  echo " 
";
  echo pagedatanavigationbar();
  echo " 
";
  echo pagestartmainbody();
  echo " 
";
  $type    = molpol_get('type');
  $exper   = molpol_get('experiment');
  $refresh = molpol_get('refresh');
  
  showdategrouptables($expname);

  echo pagefooterlastupdated();
  echo pagefooterincludescripts();
  echo pagefooterclosepage();
