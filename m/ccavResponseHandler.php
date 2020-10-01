<?php

    session_start();
    include('Crypto.php');
    include('dbcon.php');
    $o = $_SESSION['order_id'];

	error_reporting(0);
	
	$workingKey='17532BC22F9C5E2A0264D3C2173DFE87';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
	    
		$sql= "UPDATE order_details SET order_status = 'Success' WHERE `order_id` = '$o'";
		$result=mysqli_query($connection,$sql);
		echo "<script>alert('Your order has been placed.');</script>";
		
		$to = "contact@smpoetry.com";
        $subject = "New Order";
        $txt = "New order recieved.";
        $headers = "From: info@smpoetry.com";
        mail($to,$subject,$txt,$headers);
		
		echo "<script>location.href='https://smpoetry.com/m/invoice/'</script>";
		
	}
	else if($order_status==="Aborted")
	{
	    
		$sql= "UPDATE order_details SET order_status = 'Aborted' WHERE `order_id` = `$o`";
		$result=mysqli_query($connection,$sql);
		echo "<script>alert('Aborted!');</script>";
		echo "<script>location.href='https://smpoetry.com/m/aborted.html'</script>";
	
	}
	else if($order_status==="Failure")
	{	
	    
		$sql= "UPDATE order_details SET order_status = 'Failure' WHERE `order_id` = `$o`";
		$result=mysqli_query($connection,$sql);
		echo "<script>alert('Something went wrong. Try again.');</script>";
		echo "<script>location.href='https://smpoetry.com/m/failure.html'</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong. Try again.');</script>";
		echo "<script>location.href='https://smpoetry.com/m/fault.html'</script>";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
?>