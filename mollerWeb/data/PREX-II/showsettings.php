<?php
require_once __DIR__ . '/data_pull.php';
include "functions.php";

echo pageheaderhtml();

$runId = molpol_positive_int_id(molpol_get('run'));

if (!$runId) {
    echo "There is no run number specified.
        <br><br>The address for this page must be in the form <i>showsettings.php?run=NNNNN</i>.";
} else {
    echo sectionbanner("Settings for run <a href='showrun.php?run=" . $runId . "'>" . $runId . "</a>");

    require __DIR__ . '/db_credentials.php';
    $con = @mysqli_connect($servername, $username, $password, $dbname);
    $row = null;
    if ($con) {
        $result = $con->query('SELECT * FROM moller_settings WHERE id_set_run = ' . $runId);
        $row = $result ? mysqli_fetch_assoc($result) : null;
        $con->close();
    }

    if (!$con) {
        echo "<p>Could not connect to the database.</p>";
    } elseif (!$row) {
        echo "<p>No settings row for run " . htmlspecialchars((string) $runId, ENT_QUOTES, 'UTF-8') . ".</p>";
    } else {
        echo "<div class='list-table-wrap'><table class='data-table data-table-settings' cellspacing='0' cellpadding='0'>";
        echo "<tr class='data-table-head'><th>Field</th><th>Value</th></tr>";
        foreach ($row as $field => $value) {
            $f = htmlspecialchars((string) $field, ENT_QUOTES, 'UTF-8');
            $v = ($value === null) ? '' : htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
            echo "<tr><td>" . $f . "</td><td>" . $v . "</td></tr>";
        }
        echo "</table></div>";
    }
}

echo pagefooterlastupdated();
echo pagefooterincludescripts();
echo pagefooterclosepage();
