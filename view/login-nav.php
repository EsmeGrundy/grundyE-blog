<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>
<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid">
        <ul class=" nav nav-justified">
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/index.php" ?>">Home</a></li>
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/login.php" ?>">Log In</a></li>
            <li role="presentation" class="nav-button"><a href="<?php echo $path . "/register.php" ?>">Register New User</a></li>
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
