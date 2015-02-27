<?php
    require_once(__DIR__ . "/../model/config.php");

    $query = "SELECT * FROM posts"; //selects everything from the posts table
    $result = $_SESSION["connection"] -> query($query); //queries the database for the variable $query
    
    if($result){ //if the result query is true..
        while($row = mysqli_fetch_array($result)) { //while row is equal to the array of $result...
            echo "<div class='post panel panel-default'>"; //creates blog post with title, post, and date
            echo "<div class='panel-heading'>";
            echo "<h2 class='panel-title'>" . $row['title'] . "</h2>";
            echo "</div>";
            echo "<br />";
            echo "<div class='panel-body'>";
            echo "<p class='post-text'>" . $row['post'] . "</p>";
            echo "</div>";
            echo "<br />";
            echo "<div>";
             echo "<p>" . $row['date'] . "</p>";
            echo "</div>";
            echo "</div>";

            

        }
            
        
    }