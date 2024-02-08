<?php
    require 'config.php';
    mysqli_report(MYSQLI_REPORT_OFF);

    $mysqli = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);

    if ($mysqli->connect_errno) {
        die("Connection error: " . $mysqli->connect_error);
    }

   return $mysqli;
?>