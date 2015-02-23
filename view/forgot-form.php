<?php
    require_once (__DIR__ . "/../model/config.php");
    ?>
<h1 class="forgot">Forgot Password</h1>
<form method="post" action="<?php echo $path . "/controller/forgot-password.php"; ?>" class="login">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
    <div>
        <p><a href="<?php echo $path . "/change.php"; ?>">Change Password</a></p>
    </div>
</form>

