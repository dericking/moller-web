<?php

  require __DIR__ . '/db_credentials.php';
  $con = mysqli_connect($servername, $username, $password, $dbname)
    or die('could not connect database');
