<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "/index.php" ?>">Home</a></li>
        <li><a href="<?php echo $path . "/login.php" ?>">Log In</a></li>
        <li><a href="<?php echo $path . "/register.php" ?>">Register New User</a></li>
    </ul>
</nav>
