<?php
    include('dbcon.php');

    $query = "select * from feedback where status = 1";
    $run = mysqli_query($connection, $query);
    $arr = array();

    while($row = mysqli_fetch_array($run))
    {
        array_push($arr, array('name'=>$row[1], 'message'=>$row[3]));
    }

    echo json_encode(array('result'=>$arr));
?>