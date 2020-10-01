<?php
    $database = "u888083860_sm"; //
    $username = "u888083860_smadm"; //
    $password = "graphe@2019."; //graphe@2019.
    
    $connection2 = mysqli_connect("localhost", $username, $password); // Establishing Connection with Server
    
    mysqli_select_db($connection, $database);
    
    if (!$connection)
    {
        echo "Connection Failed";
        die("Connection failed: " . mysqli_connect_error());
    }
?>