<?php
   session_start();
   unset($_SESSION['cart_items']);
   header('location: https://smpoetry.com/m/others/order_book.php');
?>