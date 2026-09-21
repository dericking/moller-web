<?php
function tablecolorexplainer(){
  $htmlout  = "<p class='table-color-legend'>";
  $htmlout .= "<span class='table-legend-swatch table-legend-swatch-accidental' aria-hidden='true'>&nbsp;</span>";
  $htmlout .= "Accidental rate &gt; 1.0125%";
  $htmlout .= "</p>";
  return $htmlout;
}

function runbuttonbar( $prev , $next ){
  $htmlout  = "<!--RUN BUTTONS BAR-->";
  $htmlout .= "<div class='run-button-row'>";
  $htmlout .= "<a href='showrun.php?run=".$prev."'><button type='button' class='runbutton'>⇦ Previous run #".$prev."</button></a>";
  $htmlout .= "<a href='showrun.php?run=".$next."'><button type='button' class='runbutton'>Next run #".$next." ⇨</button></a>";
  $htmlout .= "</div>";
  return $htmlout;
}

function runtableheader(){
  $htmlout="";
  $htmlout .= "<tr class='data-table-head'>";
  $htmlout .= "  <th>Run</th>";
  $htmlout .= "  <th>Type</th>";
  $htmlout .= "  <th>Group</th>";
  $htmlout .= "  <th>Left</th>";
  $htmlout .= "  <th>Right</th>";
  $htmlout .= "  <th>Coin</th>";
  $htmlout .= "  <th>Accid</th>";
  $htmlout .= "  <th>BCM</th>";
  $htmlout .= "  <th>Clock</th>";
  $htmlout .= "  <th>Asym</th>";
  $htmlout .= "  <th>AsymErr</th>";
  $htmlout .= "  <th>AzzUsed</th>";
  $htmlout .= "  <th>PTarg</th>";
  $htmlout .= "  <th>PolFact</th>";
  $htmlout .= "  <th>Pol</th>";
  $htmlout .= "  <th>PolErr</th>";
  $htmlout .= "  <th>Aq</th>";
  $htmlout .= "  <th>AqErr</th>";
  $htmlout .= "  <th>QPed</th>";
  $htmlout .= "  <th>DeadTau</th>";
  $htmlout .= "  <th>Comment</th>";
  $htmlout .= "</tr> ";
  return $htmlout;
}

function runtableheaderbleed(){
  $htmlout="<!--BLEED TABLE HEADER-->";
  $htmlout .= "<tr class='data-table-head'>";
  $htmlout .= "  <th>Run</th>";
  $htmlout .= "  <th>Type</th>";
  $htmlout .= "  <th>Left</th>";
  $htmlout .= "  <th>Right</th>";
  $htmlout .= "  <th>Coin</th>";
  $htmlout .= "  <th>Accid</th>";
  $htmlout .= "  <th>BCM</th>";
  $htmlout .= "  <th>Clock</th>";
  $htmlout .= "  <th>Comment</th>";
  $htmlout .= "</tr> ";
  return $htmlout;
}

function grouptableheader(){
  $htmlout = '';
  $htmlout .= "<tr class='data-table-head'>";
  $htmlout .= "<th>Group#</th>";
  $htmlout .= "<th>Group Type</th>";
  $htmlout .= "<th>Date</th>";
  $htmlout .= "<th>Wien</th>";
  $htmlout .= "<th>iHWP</th>";
  $htmlout .= "<th>Target</th>";
  $htmlout .= "<th>DeadTime Tau</th>";
  $htmlout .= "<th>Target Pol</th>";
  $htmlout .= "<th>AnPower</th>";
  $htmlout .= "<th>Pol Factor</th>";
  $htmlout .= "<th>Corr Asym</th>";
  $htmlout .= "<th>Asym Err</th>";
  $htmlout .= "<th>Polarization</th>";
  $htmlout .= "<th>Pol Err</th>";
  $htmlout .= "<th>Last Modified</th>";
  $htmlout .= "<th>Experiment</th>";
  $htmlout .= "</tr>";
  return $htmlout;
}

function grouptablerow( $gdata ){
  $htmlout = '';
  $htmlout .= "<tr>";
  $htmlout .= "<td><a href='showgroup.php?group=".$gdata['id_group']."'>".$gdata['id_group']."</a></td>";
  $htmlout .= "<td>".$gdata['group_type']."</td>";
  $htmlout .= "<td><a href='showbyday.php?day=".$gdata['group_date']."'>".$gdata['group_date']."</a></td>";
  if($gdata['group_wein'] == -1) $htmlout .= "<td>FLIP-LEFT</td>";
  if($gdata['group_wein'] == 1 ) $htmlout .= "<td>FLIP-RIGHT</td>";
  if($gdata['group_wein'] != -1 && $gdata['group_wein'] != 1) $htmlout .= "<td><i>UNKNOWN STATE!<i></td>";
  $htmlout .= "<td>".$gdata['group_hwp']."</td>";

  $target="null";
  if($gdata['group_target']==1) $target="Cu";
  if($gdata['group_target']==2) $target="10um";
  if($gdata['group_target']==3) $target="4um";
  if($gdata['group_target']==4) $target="1um";
  $htmlout .= "<td>".$target."</td>";

  $htmlout .= "<td>".number_format($gdata['group_dttau'],8)."</td>";

  $htmlout .= "<td>".number_format($gdata['group_targpol'],5)."</td>";
  $htmlout .= "<td>".number_format($gdata['group_anpow'],6)."</td>";
  $htmlout .= "<td>".number_format( 1.0/ ($gdata['group_anpow']*$gdata['group_targpol']),6)."</td>";

  $htmlout .= "<td>".number_format($gdata['group_block_asym'],6)."</td>";
  $htmlout .= "<td> +/- ".number_format($gdata['group_block_asym_err'],6)."</td>";

  $pol=$gdata['group_block_asym'] / 0.08005 / $gdata['group_anpow']*100;
  $pol=round($pol,2);
  $htmlout .= "<td>".number_format($pol,2)."%</td>";
  $polerr=$gdata['group_block_asym_err'] / 0.08005 / $gdata['group_anpow']*100;
  $polerr=round($polerr,2);
  $htmlout .= "<td> +/- ".number_format($polerr,2)."%</td>";

  $htmlout .= "<td>".$gdata['group_analysis_timestamp']."</td>";
  //if($gdata['id_group'] < 1000 ) $htmlout .= "<td>March 2019 Commissioning</td>";
  if($gdata['id_group'] < 2999 ) $htmlout .= "<td>PREX-II</td>";
  if($gdata['id_group'] > 2999 && $gdata['id_group'] < 3099 ) $htmlout .= "<td>CREX</td>";
  if($gdata['id_group'] > 3098 ) $htmlout .= "<td>SBS</td>";
  $htmlout .= "</tr>";
  return $htmlout;
}

function groupfitsummary( $gdata ){
  $htmlout = '';
  $htmlout .= "<table class='data-table data-table-fit data-table-fit-summary' cellspacing='0' cellpadding='0'>";
  $htmlout .= "<thead>";
  $htmlout .= "<tr class='data-table-cols'><th>Type</th><th>Mean</th><th>Error</th><th>chi2/ndf</th></tr>";
  $htmlout .= "</thead><tbody>";
  $htmlout .= "<tr><td>Poly0 (By Pattern)</td><td>".$gdata['group_asym']."</td><td>".$gdata['group_asym_err']."</td><td>&nbsp;</td></tr>";
  $htmlout .= "<tr><td>Gauss (By Pattern)</td><td>".$gdata['group_asymgaus']."</td><td>".$gdata['group_asymgaus_err']."</td><td>".$gdata['group_asymgaus_chi2ndf']."</td></tr>";
  $htmlout .= "<tr><td>Poly0 (By Pattern Block)</td><td>".$gdata['group_block_asym']."</td><td>".$gdata['group_block_asym_err']."</td><td>&nbsp;</td></tr>";
  $htmlout .= "<tr><td>Gauss (By Pattern Block)</td><td>".$gdata['group_block_asymgauss']."</td><td>".$gdata['group_block_asymgauss_err']."</td><td>".$gdata['group_block_asymgauss_chi2ndf']."</td></tr>";
  $htmlout .= "</tbody></table>";
  return $htmlout;
}

function runtablerowbleed( $data ){
  $run=$data['id_run'];
  $grp=$data['FLOOR(rundet_pcrex_group)'];
  $properanpow=$data['rundet_anpow'];
  $htmlout="";
  $htmlout .= "<tr>";
  $htmlout .= "<td><a href='showrun.php?run=$run'>".$run."</a></td>";
  $htmlout .= "<td>".$data['rundet_type']."</td>";
  $htmlout .= "<td>".$data['run_leftrate']."</td>";
  $htmlout .= "<td>".$data['run_rightrate']."</td>";
  $htmlout .= "<td>".$data['run_coinrate']."</td>";
  $htmlout .= "<td>".$data['run_accrate']."</td>";
  $htmlout .= "<td>".$data['run_bcm']."</td>";
  $htmlout .= "<td>".$data['run_clock']."</td>";
  $htmlout .= "<td>".$data['rundet_comment']."</td>";
  $htmlout .= "</tr> ";
  return $htmlout;
}

function runtablerow( $data ){
  $run=$data['id_run'];
  $grp=$data['FLOOR(rundet_pcrex_group)'];
  $properanpow=$data['rundet_anpow'];
  $htmlout="";
  $htmlout .= "<tr>";

  $htmlout .= "<td><a href='showrun.php?run=$run'>".$run."</a></td>";

  $htmlout .= "<td>".$data['rundet_type']."</td>";
  $htmlout .= "<td><a href='showgroup.php?group=$grp'>".$grp."</a></td>";
  $htmlout .= "<td>".$data['run_leftrate']."</td>";
  $htmlout .= "<td>".$data['run_rightrate']."</td>";
  $htmlout .= "<td>".$data['run_coinrate']."</td>";

  if( ($data['run_accrate']/$data['run_coinrate']*100) < 1.0125 ) $htmlout .= "<td>".$data['run_accrate']."</td>";
  else $htmlout .= "<td class='accidentalwarning'>".$data['run_accrate']."</td>";

  $htmlout .= "<td>".$data['run_bcm']."</td>";
  $htmlout .= "<td>".$data['run_clock']."</td>";
  $htmlout .= "<td>".number_format($data['run_asym'],6)."</td>";
  $htmlout .= "<td>".number_format($data['run_asymerr'],6)."</td>";

  if( ($data['run_anpow']!=$data['rundet_anpow']) && $data['rundet_type']=="beam_pol" ) $htmlout .= "<td class='anpowerror'>".$data['run_anpow']."</td>";
  else $htmlout .= "<td>".$data['run_anpow']."</td>";

  $htmlout .= "<td>".number_format($data['run_ptarg'],5)."</td>";
  $htmlout .= "<td>".number_format( 1.0/($data['run_ptarg']*$data['run_anpow']),6)."</td>";

  $htmlout .= "<td>".number_format(100*$data['run_pol'],2)."</td>";
  $htmlout .= "<td>".number_format(100*$data['run_polerr'],2)."</td>";

  $htmlout .= "<td>".$data['run_qasym']."</td>";
  $htmlout .= "<td>".$data['run_qasymerr']."</td>";

  if( ($data['run_qpedused']!=$data['rundet_qpedset']) && $data['rundet_type']=="beam_pol" ) $htmlout .= "<td class='qpederror'>".$data['run_qpedused']."</td>";
  else $htmlout .= "<td>".$data['run_qpedused']."</td>";

  if( ($data['run_deadtimetau']!=$data['rundet_deadtimetau']) && $data['rundet_type']=="beam_pol" ) $htmlout .= "<td class='qpederror'>".$data['run_deadtimetau']."</td>";
  else $htmlout .= "<td>".$data['run_deadtimetau']."</td>";

  if( empty($data['rundet_comment']) ) $htmlout .= "<td><i>No comment</i></td>";
  else $htmlout .= "<td>".$data['rundet_comment']."</td>";

  $htmlout .= "</tr> ";

  return $htmlout;
}

function pagestartcommon(){
  include "exp_config.php";
  if (ob_get_level()) { ob_clean(); }
  $htmlout  = "<!DOCTYPE html>\n";
  $htmlout .= "<html lang='en'>";
  $htmlout .= "<head>";
  $htmlout .= "<title>".$exptext." Møller Polarimetry Data</title>";
  $htmlout .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  $htmlout .= "<link rel='stylesheet' type='text/css' href='style.css?v=20260916f'>";
  $htmlout .= "</head>";
  $htmlout .= "<body class='exp-page'>";
  return $htmlout;
}

function pagetoplinks(){
  $htmlout  = "<!--PAGE TOP LINKS-->";
  $htmlout .= "<nav class='exp-topnav' aria-label='Site links'>";
  $htmlout .= "<a href='../'>Møller Data Home</a>";
  $htmlout .= "<a href='../../'>Møller Polarimeter Home</a>";
  $htmlout .= "<a href='https://hallaweb.jlab.org'>Hall A Home</a>";
  $htmlout .= "<a href='https://www.jlab.org'>JLab Home</a>";
  $htmlout .= "</nav>";
  return $htmlout;
}

function pagegraphictitle(){
  include "exp_config.php";
  $htmlout  = "<!--PAGE GRAPHIC AND TITLE-->";
  $htmlout .= "<header class='exp-titlebar'>";
  $htmlout .= "<div class='exp-titlebar-logo'><img src='".$explogo."' alt='' width='96' height='96'></div>";
  $htmlout .= "<div class='exp-titlebar-text'><h1>".$exptext."</h1></div>";
  $htmlout .= "</header>";
  return $htmlout;
}

function pagedatanavigationbar(){
  $htmlout  = "<!-- DATA NAVIGATION BAR -->";
  $htmlout .= "<nav class='exp-datanav' aria-label='Data sections'>";
  $htmlout .= "<a href='index.php'>Tabulated Results</a>";
  $htmlout .= "<a href='showtype.php?type=false_asym'>Cu Foil</a>";
  $htmlout .= "<a href='showtype.php?type=bleed_through'>Bleedthrough</a>";
  $htmlout .= "<a href='showtype.php?type=pending&refresh=true'>Pending</a>";
  $htmlout .= "</nav>";
  return $htmlout;
}

function pagestartmainbody(){
  return "<main class='exp-main'>";
}

function pageheaderhtml(){
  include "exp_config.php";
  if (ob_get_level()) { ob_clean(); }
  $htmlout  = "<!DOCTYPE html>\n";
  $htmlout .= "<html lang='en'>";
  $htmlout .= "<head>";
  $htmlout .= "<title>".$exptext." Møller Polarimetry Data</title>";
  $htmlout .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  $htmlout .= "<link rel='stylesheet' type='text/css' href='style.css?v=20260916f'>";
  $htmlout .= "</head>";
  $htmlout .= "<body class='exp-page'>";
  $htmlout .= pagetoplinks();
  $htmlout .= pagegraphictitle();
  $htmlout .= pagedatanavigationbar();
  $htmlout .= "<main class='exp-main'>";
  return $htmlout;
}

/** Close main + site footer line. */
function pagefooterlastupdated(){
  $htmlout  = "</main>";
  $htmlout .= "<footer class='exp-footer'>";
  $htmlout .= "This page is maintained by the Møller Polarimetry Working Group";
  $htmlout .= "</footer>";
  return $htmlout;
}

function pagefooterincludescripts(){
  return "";
}

function pagefooterclosepage(){
  $htmlout  = "<!--PAGE CLOSE-->";
  $htmlout .= "</body>";
  $htmlout .= "</html>";
  return $htmlout;
}

function sectionbanner($text){
  return "<h2>" . $text . "</h2>\n";
}

function sectionheaderpanel($text){
  return sectionbanner("Grouped Data Taken during ".$text);
}

/** Compatibility alias — showbyday used to call this missing name. */
function pagefooterhtml() {
  return pagefooterlastupdated() . pagefooterincludescripts() . pagefooterclosepage();
}
