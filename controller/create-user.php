<?php

require_once (__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


$salt = "$5$" . "rounds = 5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username' ,"
        . "password = '$hashedPassword' ,"
        . "salt = '$salt' "
);

if ($query) {
    echo "Successfully created user: $username";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//
//$usernameCheck = mysqli_query("SELECT username FROM users WHERE username='$username'");
//$userChecker = mysql_fetch_assoc($usernameCheck);
//
//if ($username === $userChecker["username"]) {
////    header("location: " . $path . "/register.php");
//    echo "Username already exists";
//} else {
////    header("location: " . $path . "/index.php");
//    echo "Successfully created user: $username";
//}