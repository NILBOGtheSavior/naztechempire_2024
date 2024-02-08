<?php
$mysqli = require __DIR__ .  '/connect.php';

if (empty($_POST["username"])) {
    die("Name is required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8 ) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number");
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$rank = 'unranked';

$sql = "INSERT INTO users
VALUES (id, '$username', '$email', '$password', '$rank');";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($stmt->execute()) {
    header("Location: ../account.php");
    exit();
} else {
    if ($mysqli->errno === 1062) {
        die("Account already exists");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>