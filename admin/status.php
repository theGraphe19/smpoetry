<?php
    include('session.php');
    include('db_connection.php');

    if($show_id = $_GET['feedback_show_id'])
    {  
        $show_query="update feedback set status = '1' WHERE id='$show_id'";
        $run=mysqli_query($connection,$show_query);
        header('location: feedback.php');
    }

    if($hide_id = $_GET['feedback_hide_id'])
    {  
        $hide_query="update feedback set status = '0' WHERE id='$hide_id'";
        $run=mysqli_query($connection,$hide_query);
        header('location: feedback.php');
    }

    if($delete_id = $_GET['feedback_delete_id'])
    {  
        $delete_query="delete from feedback WHERE id='$delete_id'";
        $run=mysqli_query($connection,$delete_query);
        header('location: feedback.php');
    }

    if($delete_subscribe_id = $_GET['subscribe_id'])
    {  
        $delete_subscribe_query="delete from newsletter WHERE id='$delete_subscribe_id'";
        $run=mysqli_query($connection,$delete_subscribe_query);
        header('location: subscribe.php');
    }
    
?>