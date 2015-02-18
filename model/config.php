<?php

require_once (__DIR__ . "/Database.php");
session_start();
session_regenerate_id(true);

$path = "/grundyE-blog";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])) { //if the variable is not set, then...
    $connection = new Database($host, $username, $password, $database); //create a new database
    $_SESSION["connection"] = $connection; //connection to database
}
