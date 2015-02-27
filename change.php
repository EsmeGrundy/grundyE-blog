<?php
require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/view/header.php");
if (authenticateUser()) {//if the function authenticateUser is true...
    require_once (__DIR__ . "/view/navigation.php");//the nav with the blog post form and others is displayed
} else {
    require_once (__DIR__ . "/view/login-nav.php");//the other nav bar is displayed
}
require_once (__DIR__ . "/view/password-form.php");
require_once (__DIR__ . "/view/footer.php");

