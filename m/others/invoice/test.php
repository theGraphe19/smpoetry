<?php
    session_start();
    if(isset($_POST['chkout']))
    {
        date_default_timezone_set("Asia/Kolkata");
        $order_date = date('d/m/y');
        $_SESSION['order_date'] = $order_date;

        $tid = isset($_POST['tid']) ? $_POST['tid'] : '' ;
        $_SESSION['tid'] = $tid;

        $curr = isset($_POST['currency']) ? $_POST['currency'] : '' ;
        
        
        $order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '' ;
        $_SESSION['order_id'] = $order_id;

        $customer_id = isset($_POST['cust_id']) ? $_POST['cust_id'] : '' ;
        $_SESSION['customer_id'] = $customer_id;
        
        $delivery_price = 0;
        $_SESSION['delivery_price'] = $delivery_price;

        $total_price = isset($_POST['amount']) ? $_POST['amount'] : '' ;
        $_SESSION['total_price'] = $total_price;

        $order_status = '0';

        $quant = isset($_POST['quantity']) ? $_POST['quantity'] : '' ;
        $_SESSION['quantity'] = $quantity;

        $order_time = date('h:i:s A');

        $bill_name = isset($_POST['billing_name']) ? $_POST['billing_name'] : '' ;
        $_SESSION['bill_name'] = $bill_name;

        $bill_email = isset($_POST['billing_email']) ? $_POST['billing_email'] : '';
        
        $bill_phn_num = isset($_POST['billing_tel']) ? $_POST['billing_tel'] : '';
        $_SESSION['bill_phn_num'] = $bill_phn_num;

        $bill_address = isset($_POST['billing_address']) ? $_POST['billing_address'] : '';
        $_SESSION['bill_address'] = $bill_address;

        $bill_city = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
        $_SESSION['bill_city'] = $bill_city;

        $bill_zip_code = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
        $_SESSION['bill_zip_code'] = $bill_zip_code;

        $bill_state = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
        $_SESSION['bill_state'] = $bill_state;

        $bill_country = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
        $_SESSION['bill_country'] = $bill_country;
        
        $ship_name = isset($_POST['delivery_name']) ? $_POST['delivery_name'] : '' ;
        $ship_phn_num = isset($_POST['delivery_tel']) ? $_POST['delivery_tel'] : '';
        $ship_address = isset($_POST['delivery_address']) ? $_POST['delivery_address'] : '';
        $ship_city = isset($_POST['delivery_city']) ? $_POST['delivery_city'] : '';
        $ship_zip_code = isset($_POST['delivery_zip']) ? $_POST['delivery_zip'] : '';
        $ship_state = isset($_POST['delivery_state']) ? $_POST['delivery_state'] : '';
        $ship_country = isset($_POST['delivery_country']) ? $_POST['delivery_country'] : '';
        
    }
?>