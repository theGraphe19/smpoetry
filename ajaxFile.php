<?php
//Include database configuration file
include('dbcon2.php');

if(isset($_POST["country_name"])){
    //Get all state data
	$country_name= $_POST['country_name'];
    $query = "SELECT * FROM countries WHERE country_name = '$country_name'";
	$run_query = mysqli_query($connection, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        while($row = mysqli_fetch_array($run_query))
        {
            $country_price=$row['country_price'];
            echo $country_price;
        }
    }else{
        echo 'not available';
    }
}
?>