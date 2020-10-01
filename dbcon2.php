<?php
    // $database = "u888083860_sm"; /**/
    // $username = "u888083860_smadm"; /**/
    // $password = "graphe@2019."; /*graphe@2019.*/

    date_default_timezone_set("Asia/Kolkata");

    $database = "sm_int"; /**/
    $username = "root"; /**/
    $password = ""; /*graphe@2019.*/
    
    $connection = mysqli_connect("localhost", $username, $password); // Establishing Connection with Server
    
    mysqli_select_db($connection, $database);
    
    if (!$connection)
    {
        echo "Connection Failed";
        die("Connection failed: " . mysqli_connect_error());
    }
?>