<?php

require 'connect.php';
foreach($_REQUEST as $key => $value) {
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
?>