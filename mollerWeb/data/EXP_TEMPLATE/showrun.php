<?php
require_once __DIR__ . '/data_pull.php';
include "functions.php";
    echo pageheaderhtml();
    $run     = molpol_get('run');
    $runday  = "";

    if($run){

      $rundata = isset($_SESSION['rundata']) ? $_SESSION['rundata'] : array();
      $prevrun = 0;
      $nextrun = 0;
      foreach($rundata as $rundeets){
        if($rundeets['id_run']==$run){
          $runday=$rundeets['rundet_day'];
          //break;   
        }else{
          if($runday==""){
            $prevrun=$rundeets['id_run'];
          }
          if($runday!=""){
            $nextrun=$rundeets['id_run'];
            break;
          }
        }
      }

      // echo runbuttonbar( $prevrun , $nextrun );

      echo "<div class='run-heading-row'>";
      echo sectionbanner("Displaying data for run $run which was taken on $runday.");
      echo "<a href='showsettings.php?run=" . molpol_positive_int_id($run) . "'><button type='button' class='runbutton'>Run settings</button></a>";
      echo "</div>";

      $runId = molpol_positive_int_id($run);
      $plotPaths = molpol_run_plot_paths($runId);
      $real_path = $plotPaths[0];
      $runPlotsWeb = $plotPaths[1];
      $rundata = isset($_SESSION['rundata']) ? $_SESSION['rundata'] : array();

      echo "<div class='list-table-wrap'><table class='data-table data-table-runs' cellspacing='0' cellpadding='0'>";
      echo runtableheader();
      foreach($rundata as $rundeets){
        if($rundeets['id_run']==$run){
          echo runtablerow($rundeets);
  	  $foundone=true;
          break;
        }
      }
      echo "</table>";
      echo tablecolorexplainer();
      echo "</div>";

      echo sectionbanner("Most recent plots for run $run:");
      echo molpol_render_plot_gallery($real_path, $runPlotsWeb, false);

      $errorfile = ($real_path === '') ? '' : rtrim($real_path, "/\\") . '/errors_' . $runId . '.txt';
      if ($errorfile !== '' && file_exists($errorfile)){
        echo "<br /><table id='errortable'><tr><td>";
        echo nl2br( file_get_contents($errorfile) );
        echo "</td></tr></table>";
      }

      // echo runbuttonbar( $prevrun , $nextrun );

    }else{
      echo "There is no run number specified.
        <br><br>The address for this page must be in the form <i>showrun.php?run=NNNNN</i>.
        <br><br>If you continue to arrive here in error please notify 
        <i><b> @ericking </b></i> and let him 
        know how you were arriving at this page.";
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
