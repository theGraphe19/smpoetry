<?php
   include('db_connection.php');
   session_start();
   
   $user_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($connection,"select * from admin where admin_name = '$user_check' ");
   
   $rows = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session1 = $rows['admin_name'];
   //$login_session2 = $rows['admin_img'];

   if(!isset($_SESSION['login_admin'])){
      header("location:login.php");
      die();
   }
?>