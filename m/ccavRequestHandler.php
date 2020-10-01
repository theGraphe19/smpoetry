<?php
    session_start();
    include('dbcon.php');
    
    if(isset($_POST['codbtn']))
    {
        $order_id = $_SESSION['order_id'];
        $customer_id = $_SESSION['customer_id'];
        $tid = isset($_POST['tid']) ? $_POST['tid'] : '' ;
        $quant = isset($_POST['quant']) ? $_POST['quant'] : '' ;
        $lang = isset($_POST['language']) ? $_POST['language'] : '' ;
        $delivery_price = '0';
        $total_price = isset($_POST['amount']) ? $_POST['amount'] : '' ;
        $curr = isset($_POST['currency']) ? $_POST['currency'] : '' ;

        date_default_timezone_set("Asia/Kolkata");
        $order_date = date('d/m/y');
        $order_time = date('h:i:s A');
        
        $bill_name = isset($_POST['billing_name']) ? $_POST['billing_name'] : '' ;
        $bill_email = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';
        $bill_tel = isset($_POST['billing_tel']) ? $_POST['billing_tel'] : '';
        $bill_address = isset($_POST['billing_address']) ? $_POST['billing_address'] : '';
        $bill_city = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
        $bill_state = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
        $bill_country = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
        $bill_zip = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
        
        $ship_name = isset($_POST['delivery_name']) ? $_POST['delivery_name'] : '' ;
        $ship_tel = isset($_POST['delivery_tel']) ? $_POST['delivery_tel'] : '';
        $ship_address = isset($_POST['delivery_address']) ? $_POST['delivery_address'] : '';
        $ship_city = isset($_POST['delivery_city']) ? $_POST['delivery_city'] : '';
        $ship_state = isset($_POST['delivery_state']) ? $_POST['delivery_state'] : '';
        $ship_country = isset($_POST['delivery_country']) ? $_POST['delivery_country'] : '';
        $ship_zip = isset($_POST['delivery_zip']) ? $_POST['delivery_zip'] : '';

        $order_status = '0';

        $order_method = 'cod';

        $query = "insert into order_details (order_id, customer_id, tid, quantity, language, delivery_price, total_price, currency, order_date, order_time, 
                bill_name, bill_email, bill_tel, bill_address, bill_city, bill_state, bill_country, bill_zip, ship_name, ship_tel, ship_address, ship_city, 
                ship_state, ship_country, ship_zip, order_method, order_status) values('$order_id', '$customer_id', '$tid', '$quant', '$lang', '$delivery_price', '$total_price', 
                '$curr', '$order_date', '$order_time', '$bill_name', '$bill_email', '$bill_tel', '$bill_address', '$bill_city', '$bill_state', '$bill_country', 
                '$bill_zip', '$ship_name', '$ship_tel', '$ship_address', '$ship_city', '$ship_state', '$ship_country', '$ship_zip', '$order_method', '$order_status')";
        
        mysqli_query($connection, $query);

        echo "<script>alert('Your order has been placed!')</script>";
        echo "<script>location.href='https://smpoetry.com/m/thankyou.php'</script>";

    }

    if(isset($_POST['ordbtn']))
    {
        $order_id = $_SESSION['order_id'];
        $customer_id = $_SESSION['customer_id'];
        $tid = isset($_POST['tid']) ? $_POST['tid'] : '' ;
        $quant = isset($_POST['quant']) ? $_POST['quant'] : '' ;
        $lang = isset($_POST['language']) ? $_POST['language'] : '' ;
        $delivery_price = '0';
        $total_price = isset($_POST['amount']) ? $_POST['amount'] : '' ;
        $curr = isset($_POST['currency']) ? $_POST['currency'] : '' ;

        date_default_timezone_set("Asia/Kolkata");
        $order_date = date('d/m/y');
        $order_time = date('h:i:s A');
        
        $bill_name = isset($_POST['billing_name']) ? $_POST['billing_name'] : '' ;
        $bill_email = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';
        $bill_tel = isset($_POST['billing_tel']) ? $_POST['billing_tel'] : '';
        $bill_address = isset($_POST['billing_address']) ? $_POST['billing_address'] : '';
        $bill_city = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
        $bill_state = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
        $bill_country = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
        $bill_zip = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
        
        $ship_name = isset($_POST['delivery_name']) ? $_POST['delivery_name'] : '' ;
        $ship_tel = isset($_POST['delivery_tel']) ? $_POST['delivery_tel'] : '';
        $ship_address = isset($_POST['delivery_address']) ? $_POST['delivery_address'] : '';
        $ship_city = isset($_POST['delivery_city']) ? $_POST['delivery_city'] : '';
        $ship_state = isset($_POST['delivery_state']) ? $_POST['delivery_state'] : '';
        $ship_country = isset($_POST['delivery_country']) ? $_POST['delivery_country'] : '';
        $ship_zip = isset($_POST['delivery_zip']) ? $_POST['delivery_zip'] : '';

        $order_status = '0';

        $order_method = 'online';
        
        
        $query = "insert into order_details (order_id, customer_id, tid, quantity, language, delivery_price, total_price, currency, order_date, order_time, 
                bill_name, bill_email, bill_tel, bill_address, bill_city, bill_state, bill_country, bill_zip, ship_name, ship_tel, ship_address, ship_city, 
                ship_state, ship_country, ship_zip, order_method, order_status) values('$order_id', '$customer_id', '$tid', '$quant', '$lang', '$delivery_price', '$total_price', 
                '$curr', '$order_date', '$order_time', '$bill_name', '$bill_email', '$bill_tel', '$bill_address', '$bill_city', '$bill_state', '$bill_country', 
                '$bill_zip', '$ship_name', '$ship_tel', '$ship_address', '$ship_city', '$ship_state', '$ship_country', '$ship_zip', '$order_method', '$order_status')";
        
        mysqli_query($connection, $query);
    }
    else{
        unset($_SESSION['cart_item']);
      echo "<script>alert('Your cart is Empty!');</script>";
      echo "<script>location.href='https://smpoetry.com/m/'</script>";
    }
?>
<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='17532BC22F9C5E2A0264D3C2173DFE87';//Shared by CCAVENUES
	$access_code='AVZE85GF72AC53EZCA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>