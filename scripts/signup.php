<?php
require 'connect.php';
foreach($_REQUEST as $key => $value) {
echo "<p><b>" . $key . ":</b> " . $value . "</p>";
if ($key == 'username') {
    $username = $value;
}
if ($key == 'email') {
    $email = $value;
}
if ($key == 'password') {
    $password = password_hash($value, PASSWORD_DEFAULT);
}
}

$rank = 'unranked';

$query = "INSERT INTO users
VALUES (id, '$username', '$email', '$password', '$rank');";

$connection->query($query);

// mysqli_query($connection, $insert_sql);

?>