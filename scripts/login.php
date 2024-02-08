<?php
// $url = "/" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$valid = true;
echo "<script>var valid = '$valid';</script>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sqli = require __DIR__ . '/connect.php';

    $sql = sprintf("SELECT * FROM users
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("Location: ../account.php");
            exit();
        }
    }

    $valid = false;
    echo "<script>var valid = '$valid';</script>";
}

?>
