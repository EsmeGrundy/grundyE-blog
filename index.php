
<?php

require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/view/header.php");
if (authenticateUser()) { //if the user is logged in
    require_once (__DIR__ . "/view/navigation.php"); //displays the nav bar with the blog-post form and log out button
}
else{//if the user is not logged in, shows nav bar with log-in button and register button
    require_once (__DIR__ . "/view/login-nav.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once (__DIR__ . "/controller/read-posts.php");
require_once (__DIR__ . "/view/footer.php");

