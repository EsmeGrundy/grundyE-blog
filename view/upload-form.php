<?php
require_once (__DIR__ . "/../controller/login-verify.php");
require_once (__DIR__ . "/../model/config.php");

if (!authenticateUser()) {
    header("location: " . $path . "/index.php");
    die();
}
?>

<h1>Upload Image</h1>
<form method="post" action="<?php echo $path . "/controller/upload.php" ?>" enctype="multipart/form-data">
 <div>
        <label for="post">Image: </label>
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </div>
    
</form>