<?php
    $database = "state_country"; /*u888083860_newsm*/
    $username = "root"; /*u888083860_admin*/
    $password = ""; /*graphe@2019.*/
    
    $connection = mysqli_connect("localhost", $username, $password); // Establishing Connection with Server
    
    mysqli_select_db($connection, $database);
    
    if (!$connection)
    {
        echo "Connection Failed";
        die("Connection failed: " . mysqli_connect_error());
    }
?>