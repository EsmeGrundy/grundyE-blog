<?php
require_once (__DIR__ . "/../model/config.php");
    
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$newPassword = filter_input(INPUT_POST, "new-password", FILTER_SANITIZE_STRING);
$oldPassword = filter_input(INPUT_POST, )
