<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    $output = "";
    if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }else{
        echo "No users avalible to chat"; 
    }
    echo $output;
?>