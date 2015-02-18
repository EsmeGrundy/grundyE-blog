<?php

    require_once (__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'"); //requests the salt 
                                                                                                                     //and password from the table "users"
                                                                                                                     //where the username is the username input
                                                                                                                        
    
    
  if($query -> num_rows === 1){  //if there is only one row where the username is equal to the variable $username, then...
        $row = $query->fetch_array(); //gets the data contained within the query
        if($row["password"] === crypt($password, $row["salt"])){ //if the password in the table is equal to the encrypted password entered, then...
            $_SESSION["authenticated"] = true;//user is logged-in
            header("location: " . $path . "/index.php");//returns to index.php
        }
        else{
            echo "<p>Invalid Username and Password</p>";
            header("location: " . $path . "/login.php");//refreshes the login form
        }
    }
    else{
        header("location: " . $path . "/login.php");//refreshes the login form
    }
