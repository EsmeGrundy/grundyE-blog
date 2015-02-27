<?php

require_once (__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


$salt = "$5$" . "rounds = 5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt); //encrypts the password given by the user

$query = $_SESSION["connection"]->query("INSERT INTO users SET "  //queries the database to put the users' email, username, hashed password and salt into database
        . "email = '$email',"
        . "username = '$username' ,"
        . "password = '$hashedPassword' ,"
        . "salt = '$salt' "
);

if ($query) { //if the query is true...
    echo "Successfully created user: $username";
    header("location: " . $path . "/index.php"); //returrns user to home page
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echoes error
}
 
