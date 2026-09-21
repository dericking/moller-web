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

$expname = "CREX";
$exptext = "CREX (2020)";
$explogo = "rexy.png";
$molpol_profile = "exact";
$expaggregatedglob = "aggregated_crex_*.png";
