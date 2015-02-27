<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li><a class="nav-button name" href="<?php echo $path . "/Portfolio2/public_html/index.html"?>"><img id="logo" src="images/EsmeLogo.svg" alt=""></a></li>
            <li><a class="nav-button" href="#about">About Me</a></li>
            <li><a class="nav-button" href="#projects">Projects</a></li>
            <li><a class="nav-button" href="#technology">Technology</a></li>
            <li><a class="nav-button" href="http://localhost/grundyE-blog/index.php">Blog</a></li>
        </ul>

    </div>
</nav>
<nav class="navbar navbar-default navbar-fixed-bottom ">
    <div class="container-fluid">
        <ul class=" nav nav-justified">
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/login.php" ?>">Log In</a></li>
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/register.php" ?>">Register New User</a></li>
        </ul>
    </div>
</nav>
