<?php 
    $conn = mysqli_connect("localhost", "root", "Mam&talinda679", "chat");
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>