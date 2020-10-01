<?php

	include('dbcon.php');

    $errorMSG = "";
    $emaill = '';

	if (empty($_POST["emaill"])) {
	    $errorMSG .= "Email is required ";
	} else {
	    $emaill = $_POST["emaill"];
	}
    
    $code = "select * from newsletter";
    $check = mysqli_query($connection, $code);
    while($row = mysqli_fetch_assoc($check))
    {
        $e_email = $row['email'];
    }
    if($emaill === $e_email)
    {
        if($errorMSG == "")
		{
		    echo "You have already subscribed!";
        }
    }
    else
    {
        $sql = "insert into newsletter (email) values('$emaill')";
        $success = mysqli_query($connection, $sql);

        if ($success && $errorMSG == "")
        {
            echo "Thank you for Subscribing!";
        }
        else
        {
            if($errorMSG == "")
            {
                echo "Something went wrong";
            }
            else
            {
                echo $errorMSG;
            }
        }
    }
?>