<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
if (!authenticateUser()) {
    header("location: " . $path . "/index.php");
    die();
}
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li><a class="nav-button name" href="index.html"><img id="logo" src="images/EsmeLogo.svg" alt=""></a></li>
            <li><a class="nav-button" href="#about">About Me</a></li>
            <li><a class="nav-button" href="#projects">Projects</a></li>
            <li><a class="nav-button" href="#technology">Technology</a></li>
            <li><a class="nav-button" href="http://localhost/grundyE-blog/index.php">Blog</a></li>
        </ul>

    </div>
</nav>

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container-fluid">
        <ul class="nav nav-justified">
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/post.php" ?>">Blog Post Form</a></li>
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/controller/logout-user.php" ?>">Log Out</a></li>
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/change.php" ?>">Change Password</a></li>
        </ul>
    </div>
</nav>
<!--<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>

    </div>
</nav>-->
