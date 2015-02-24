<?php
    require_once (__DIR__ . "/../model/config.php");
    
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//    $date = date("Y, m, d");
    
    $query = $_SESSION["connection"] -> query("INSERT INTO posts SET title = '$title', post ='$post'");
    if($query){
         header("location: " . $path . "/index.php");
    }
    else{
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
         header("location: " . $path . "/index.php");
    }

//    $date = date('Y-m-d H:i:s');
//    $query2 = $_SESSION["connection"]->query("INSERT INTO posts (dateposted) VALUES ('$date')");
//    
//    if($query2){
//        header("location: " . $path . "/index.php");
//    }
//    else{
//        echo "<p>" . $_SESSION["connection"]->error . "</p>";
//    }
    

