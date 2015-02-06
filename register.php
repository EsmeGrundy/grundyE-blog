<?php
require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/view/header.php");
if (authenticateUser()) {
    require_once (__DIR__ . "/view/navigation.php");
} else {
    require_once (__DIR__ . "/view/login-nav.php");
}
require_once (__DIR__ . "/view/register-form.php");
require_once (__DIR__ . "/view/footer.php");

