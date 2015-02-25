<?php
    require_once(__DIR__ . "/../model/config.php");

    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"] -> query($query);
    
    if($result){
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='post panel panel-default'>";
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