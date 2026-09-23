<?php
/**
 * Per-experiment settings (see data/EXP_TEMPLATE/README.md).
 *
 * $expname              Value of moller_run_details.experiment
 * $exptext              Header title
 * $explogo              128×128 PNG in this directory
 * $molpol_profile       'exact' (LIKE '{expname}') or 'prefix' (LIKE '{expname}%' + commiss types)
 * $expaggregatedglob    Basename glob under the aggregated plots root (empty = none)
 *
 * Plot roots (FADC-style web + filesystem pair). Folder names stay
 * run_{id}/, group_{id}/, Burst_Comparison_Group_{id}.png.
 * Relative web_base is resolved from this experiment folder. Leave
 * fs_base empty unless the plots are outside that relative path
 * (or the web_base is an absolute http(s) URL).
 */

$expname = "SBS";
$exptext = "SBS [2022]";
$explogo = "sbs_transparent.png";
$molpol_profile = "prefix";
$expaggregatedglob = "";
// Run plots are single run prompt analysis
$run_plots_web_base = '../analysis/files/';
$run_plots_fs_base = '';
// Group and burst plots appear for groups
$group_plots_web_base = '../analysis/group/';
$group_plots_fs_base = '';
$burst_plots_web_base = '../analysis/burst/';
$burst_plots_fs_base = '';
// Aggregated plots appear on index.php for experiment's ADC dashboard.
$aggregated_plots_web_base = '../analysis/aggregated/';
$aggregated_plots_fs_base = '';
