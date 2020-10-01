<?php
    session_start();
    include('../dbcon.php');
    
    if(isset($_POST['codbtn']))
    {
        $order_id = $_SESSION['order_id'];
        $customer_id = $_SESSION['customer_id'];
        
        $quant = isset($_POST['quant']) ? $_POST['quant'] : '' ;
        
        $delivery_price = '0';
        $total_price = isset($_POST['amount']) ? $_POST['amount'] : '' ;
        
        date_default_timezone_set("Asia/Kolkata");
        $order_date = date('d/m/y');
        $order_time = date('h:i:s A');
        
        $bill_name = isset($_POST['billing_name']) ? $_POST['billing_name'] : '' ;
        $bill_email = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';
        $bill_tel = isset($_POST['billing_tel']) ? $_POST['billing_tel'] : '';
        $bill_address = isset($_POST['billing_address']) ? $_POST['billing_address'] : '';
        $bill_address = mysqli_real_escape_string($connection, $bill_address);
        $bill_city = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
        $bill_state = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
        $bill_country = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
        $bill_zip = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
        
        $ship_name = isset($_POST['delivery_name']) ? $_POST['delivery_name'] : '' ;
        $ship_email = isset($_POST['delivery_email']) ? $_POST['delivery_email'] : '';
        $ship_tel = isset($_POST['delivery_tel']) ? $_POST['delivery_tel'] : '';
        $ship_address = isset($_POST['delivery_address']) ? $_POST['delivery_address'] : '';
        $ship_address = mysqli_real_escape_string($connection, $ship_address);
        $ship_city = isset($_POST['delivery_city']) ? $_POST['delivery_city'] : '';
        $ship_state = isset($_POST['delivery_state']) ? $_POST['delivery_state'] : '';
        $ship_country = isset($_POST['delivery_country']) ? $_POST['delivery_country'] : '';
        $ship_zip = isset($_POST['delivery_zip']) ? $_POST['delivery_zip'] : '';

        function generateRandomString($length = 15)
        {
            $characters = 'aAbBc0CdDeE1fFgGh2HiIjJ3kKlLm4MnNoO5pPqQr6RsStT7uUvVw8WxXyY9zZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++)
            {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $tid = 'cod_'.generateRandomString();

        $query = "insert into order_details (order_id, customer_id, razorpay_order_id, razorpay_payment_id, razorpay_signature, quantity, delivery_price, total_price, order_date, 
                    order_time, bill_name, bill_email, bill_tel, bill_address, bill_city, bill_state, bill_country, bill_zip, ship_name, ship_email, ship_tel, ship_address, 
                    ship_city, ship_state, ship_country, ship_zip) values('$order_id', '$customer_id', '0', '$tid', '0', '$quant', '$delivery_price', '$total_price', '$order_date', '$order_time', 
                    '$bill_name', '$bill_email', '$bill_tel', '$bill_address', '$bill_city', '$bill_state', '$bill_country', '$bill_zip', '$ship_name', '$ship_email', 
                    '$ship_tel', '$ship_address', '$ship_city', '$ship_state', '$ship_country', '$ship_zip')";
        
        mysqli_query($connection, $query);

        $verify = rand(100000, 999999);

        $verify_query = "insert into verify (order_id, num) values('$order_id', '$verify')";
        mysqli_query($connection, $verify_query);

        $to = $bill_email;
        $subject = "SMPOETRY, Verification Code";
        $txt = "Here is your Verification Code. $verify";
        $headers = "From: info@smpoetry.com";
        mail($to,$subject,$txt,$headers);

        echo "<script>alert('We have sent you a verification code in your email id. Please verify your email id.')</script>";
        echo "<script>location.href='cod_verify.php'</script>";

    }
    elseif(isset($_POST['razorpay_order_id']) && isset($_POST['razorpay_payment_id']) && isset($_POST['razorpay_signature']))
    {
        $order_id = $_SESSION['order_id'];
        $customer_id = $_SESSION['customer_id'];
        $quant = isset($_POST['quant']) ? $_POST['quant'] : '' ;
        $delivery_price = '0';
        $total_price = isset($_POST['amount']) ? $_POST['amount'] : '' ;
        
        date_default_timezone_set("Asia/Kolkata");
        $order_date = date('d/m/y');
        $order_time = date('h:i:s A');
        
        $bill_name = isset($_POST['billing_name']) ? $_POST['billing_name'] : '' ;
        $bill_email = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';
        $bill_tel = isset($_POST['billing_tel']) ? $_POST['billing_tel'] : '';
        $bill_address = isset($_POST['billing_address']) ? $_POST['billing_address'] : '';
        $bill_address = mysqli_real_escape_string($connection, $bill_address);
        $bill_city = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
        $bill_state = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
        $bill_country = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
        $bill_zip = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
        
        $ship_name = isset($_POST['delivery_name']) ? $_POST['delivery_name'] : '' ;
        $ship_email = isset($_POST['delivery_email']) ? $_POST['delivery_email'] : '';
        $ship_tel = isset($_POST['delivery_tel']) ? $_POST['delivery_tel'] : '';
        $ship_address = isset($_POST['delivery_address']) ? $_POST['delivery_address'] : '';
        $ship_address = mysqli_real_escape_string($connection, $ship_address);
        $ship_city = isset($_POST['delivery_city']) ? $_POST['delivery_city'] : '';
        $ship_state = isset($_POST['delivery_state']) ? $_POST['delivery_state'] : '';
        $ship_country = isset($_POST['delivery_country']) ? $_POST['delivery_country'] : '';
        $ship_zip = isset($_POST['delivery_zip']) ? $_POST['delivery_zip'] : '';

        $order_status = '1';

        $order_method = 'online';
        
        
        $query = "insert into order_details (order_id, customer_id, razorpay_order_id, razorpay_payment_id, razorpay_signature, quantity, delivery_price, total_price, order_date, 
                    order_time, bill_name, bill_email, bill_tel, bill_address, bill_city, bill_state, bill_country, bill_zip, ship_name, ship_email, ship_tel, ship_address, 
                    ship_city, ship_state, ship_country, ship_zip, order_method, order_status) values('$order_id', '$customer_id', '".$_POST['razorpay_order_id']."', 
                    '".$_POST['razorpay_payment_id']."', '".$_POST['razorpay_signature']."', '$quant', '$delivery_price', '$total_price', '$order_date', '$order_time', 
                    '$bill_name', '$bill_email', '$bill_tel', '$bill_address', '$bill_city', '$bill_state', '$bill_country', '$bill_zip', '$ship_name', '$ship_email', 
                    '$ship_tel', '$ship_address', '$ship_city', '$ship_state', '$ship_country', '$ship_zip', '$order_method', '$order_status')";
        
        $run = mysqli_query($connection, $query);

        if($run)
        {
            echo "<script>location.href='invoice/'</script>";
        }
        else
        {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>location.href='../'</script>";
        }
    }
    else
    {
        if(empty($_SESSION['quantity']) && empty($_SESSION['total_price']))
        {
            unset($_SESSION['quantity']);
            unset($_SESSION['total_price']);
            echo "<script>alert('Your cart is Empty!');</script>";
            echo "<script>location.href='../'</script>";
        }
        else
        {
            echo "<script>location.href='failure.php'</script>";
        }
    }
?>