<?php

    $response = array( 
        'status' => 0, 
        'message' => 'Form submission failed, please try again.' 
    ); 
    
    // If form is submitted 
    if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['city']) || isset($_POST['words']))
    { 
        // Get the submitted form data 
        $name = $_POST['name']; 
        $email = $_POST['email'];
        $city = $_POST['city']; 
        $msg = $_POST['words'];

        date_default_timezone_set("Asia/Kolkata");
        $reader_id = date('s') + rand('111', '99999') + rand('11111', '22222');
        
        // Check whether submitted data is not empty 
        if(!empty($name) && !empty($email))
        { 
            // Validate email 
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
            { 
                $response['message'] = 'Please enter a valid email.'; 
            } 
                
            include_once 'dbcon.php'; 

            // Insert form data in the database 
            $insert = $connection->query("INSERT INTO reader (reader_id, name, email, city, message) VALUES ('".$reader_id."','".$name."','".$email."','".$city."','".$msg."')"); 

            if($insert)
            { 
                $response['status'] = 1; 
                $response['message'] = 'Form data submitted successfully!'; 
            } 
        }
        
        else
        { 
            $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
        } 
    } 
    
    // Return response 
    echo json_encode($response);

?>