<?php
        session_start();

        include('../dbcon.php');

        $o = $_SESSION['order_id'];
        $query2 = "select * from order_details where order_id = '$o'";
        $sql2 = mysqli_query($connection, $query2);
        
        $row = mysqli_fetch_assoc($sql2);
        $email = $row['bill_email'];
        
        $to = $email; 
        $from = 'info@smpoetry.com'; 
        $fromName = 'SHE : SKIN AND SOUL'; 
        
        $subject = "Thank You."; 
        
        $htmlContent = ' 
        <div class="pre"><br /> <br />
        <div id="_rc_sig">
        <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#fcfcfc">
        <tbody>
        <tr>
        <td align="center" width="100%">
        <table class="devicewidth" border="0" width="auto" cellspacing="0" cellpadding="0" align="center">
        <tbody>
        <tr>
        <td align="center" width="100%">
        <div style="position: relative;"><img class="img-responsive" style="position: relative;" src="https://smpoetry.com/assets/images/thanku.gif" />
        <div style="left: 40%; background-color: #e5e6e7;"><a href="https://www.instagram.com/_smpoetry_/"><img class="img-responsive" style="position: relative; display: unset;" src="https://smpoetry.com/assets/images/insta.png" /></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/_smpoetry_"><img class="img-responsive" style="position: relative; display: unset;" src="https://smpoetry.com/assets/images/twitter.png" /></a></div>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <p>&nbsp;</p>
        </div>
        </div>
        '; 
        
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        
        // Additional headers 
        $headers .= 'From: no-reply'.$fromName.'<'.$from.'>' . "\r\n";
        
        // Send email 
        mail($to, $subject, $htmlContent, $headers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet" />
   <link id="color-scheme" href="assets/css/mobile.css" rel="stylesheet" />
    <link rel='stylesheet prefetch'
        href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'>
<link href="assets/css/style2.css" rel="stylesheet" />

<meta name="google-site-verification" content="G_iSyF-FZtgdJQLNmX8WStj6N2eaHYRMh4l8gzfMu68" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140221702-5"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
         dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-140221702-5");
   </script>

    <style>
        body {
            height: 100%;
            padding-bottom: 80px;
        }

        .container4 p {
            margin: 0;
            font-size: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        .container4 a {
            margin: 0;
            font-size: 50px;
            position: absolute;
            top: 60%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }



        .footer {
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
            color: #ffffff;
            background: #000000;
        }

        .footer p {
            margin-top: 30px;
        }

        .article {
            padding-top: 40px;
        }
    </style>
    
</head>

<body>
    <div class=container4>
        <p>Thank You!</p>
        
        <br>
        <br>
        <br>
        <a href="https://smpoetry.com/">
            <img src="https://smpoetry.com/assets/images/sm.png" style="width: 100%;">
        </a>
    </div>

    <section>
        <footer class="footer bg-dark">
            <span style="font-size: 12px;">Copyright © <?php echo date('Y'); ?>, by Shyam Malani. Designed by
                <a href="http://thegraphe.com" target="_blank" style="color: white">The Graphē</a>
            </span>
        </footer>
    </section>




    <!--  JavaScripts
                 =============================================-->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js'></script>
</body>

</html>