<?php
    require_once (__DIR__ . "/../model/config.php");
    
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = date("l jS \of F Y h:i:s A");
    
    $query = $_SESSION["connection"] -> query("INSERT INTO posts SET title = '$title', post ='$post', date='$date'");
    if($query){
         header("location: " . $path . "/index.php");
    }
    else{
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
         header("location: " . $path . "/index.php");
    }

    

