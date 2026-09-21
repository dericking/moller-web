<?php
/**
 * Per-experiment settings (see data/EXP_TEMPLATE/README.md).
 *
 * $expname              Value of moller_run_details.experiment
 * $exptext              Header title
 * $explogo              128×128 PNG in this directory
 * $molpol_profile       'exact' (LIKE '{expname}') or 'prefix' (LIKE '{expname}%' + commiss types)
 * $expaggregatedglob    Basename glob under data/analysis/aggregated/ (empty = none)
 */

$expname = "SBS";
$exptext = "SBS [2022]";
$explogo = "sbs_transparent.png";
$molpol_profile = "prefix";
$expaggregatedglob = "";
