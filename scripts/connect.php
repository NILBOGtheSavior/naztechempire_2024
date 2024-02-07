<?php
    require 'config.php';
    $connection = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or die("<p>Error connecting to database: "
    . mysqli_error() . "</p>");

    mysqli_select_db($connection, DATABASE_NAME)
    or die("<p>Error selecting the database " . DATABASE_NAME . ": " .
    mysqli_error() . "</p>");

    $result = mysqli_query($connection, "SHOW TABLES;");

    if (!$result) {
        die("<p>Error in listing tables: " . mysqli_error() . "</p>");
        }
?>