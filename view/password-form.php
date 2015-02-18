<?php
    require_once (__DIR__ . "/../model/config.php");
    ?>

<h1 class="change-password">Change Password: </h1>
<form method="post" action="<?php echo $path . "/controller/change-password.php"?>" class="change-password">
    <div>
        <label for="password">Old Password: </label>
        <input type="password" name="old-password"/>
    </div>
    <div>
        <label for="password">New Password: </label>
        <input type="password" name="new-password"/>
    </div>
    <div>
        <label for="password">Confirm Password: </label>
        <input type="password" name="confirm-password"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

