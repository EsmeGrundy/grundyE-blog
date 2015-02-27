<?php
require_once (__DIR__ . "/../controller/login-verify.php");
require_once (__DIR__ . "/../model/config.php");

if (!authenticateUser()) {
    header("location: " . $path . "/index.php");
    die();
}
?>

<h1 class="blog-post">Create Blog Post</h1>
<form method="post" action="<?php echo $path . "/controller/create-post.php" ?>" enctype="multipart/form-data" class="blog-post">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title">
    </div>

    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

