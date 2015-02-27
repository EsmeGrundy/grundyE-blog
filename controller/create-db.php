<?php
    require_once(__DIR__ . "/../model/config.php");
 
    
    $query = $_SESSION["connection"] -> query("CREATE TABLE posts (" //creates the posts table
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "date date NOT NULL,"
            . "PRIMARY KEY(id))");
    if($query){ //if query is successful...
        echo "successfuly created table: posts";
    }
    else{
        echo "<p class='queries'>" . $_SESSION["connection"]->error . "</p>";
    }
    
    $query2 = $_SESSION["connection"] -> query("CREATE TABLE users (" //creates users table
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char(128) NOT NULL, "
            . "salt char(128) NOT NULL, "
            . "PRIMARY KEY (id))");

    if($query2){ //if query2 is successful...
        echo "Successfully created table: users";
    }
    else{
        echo "<p class='queries'>" . $_SESSION["connection"]->error . "</p>";
    }
