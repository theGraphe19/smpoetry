<?php 
    
    session_start();

    include("../dbcon.php");
    
    $o_id = $_SESSION['order_id'];
    $order_status = '0';
    $order_method = 'cod';

    if(isset($_POST["verify_btn"]))
    {
        $num = isset($_POST['verifictn_num']) ? $_POST['verifictn_num'] : '' ;

        $sql = "SELECT * FROM verify WHERE order_id = '$o_id'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);

        if($row['num']===$num)
        {
            $query = "UPDATE `verify` SET `status` = 1";
            $sql111 = "UPDATE `order_details` SET `order_method`='$order_method', `order_status`='$order_status' WHERE `order_id` = '$o_id'";
            mysqli_query($connection,$query);
            mysqli_query($connection,$sql111);

            echo "<script>alert('Your order has been placed!')</script>";
            echo "<script>location.href='invoice/'</script>";
        }
        else
        {
            echo "<script>alert('Try Again!')</script>";
        }
    }

    if(isset($_POST['resend_code']))
    {
        $verify = rand(100000, 999999);

        $verify_query = "update verify SET num = $verify where order_id = $o_id";
        mysqli_query($connection, $verify_query);

        include("dbcon.php");

        $sql = "SELECT * FROM order_details WHERE order_id = '$o_id'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);
        
        $to = $row['bill_email'];
        $subject = "SMPOETRY, Verification Code";
        $txt = "Here is your new Verification Code. $verify";
        $headers = "From: info@smpoetry.com";
        mail($to,$subject,$txt,$headers);

        echo "<script>alert('We have sent you a new verification code in your email id. Please verify your email id.')</script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Verify OTP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style>
            input
            {
                text-align: center;
                font-size: 25px;
                border : none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg text-center" style="background: #0000000f;">
                    <br>
                    <h2>Please enter verification code.</h2>
                    <h3>(we want to make sure it's you)</h3>
                    <br>
                    <form method="post" encytype="multipart/form-data">
                        <input type="text" placeholder="Enter your code here..." name="verifictn_num" required>
                        <br><br>
                        <button type="submit" class="btn btn-lg" name="verify_btn" style="background: black; color: white">VERIFY</button>
                        <br><br>
                    </form>
                    <form method="post" encytype="multipart/form-data">
                        <button type="submit" name="resend_code" style="background: transparent; border: none;">Resend Code</button>
                        <br><br>
                    </form>
                    <a href="../"
                        <button name="resend_code" style="background: transparent; border: none;">Go to Website</button>
                    </a>
                    <br>
                </div>
            </div>
        <div>
    </body>
</html>