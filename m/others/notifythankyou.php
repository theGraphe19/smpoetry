<?php

    $bill_email = $_SESSION['bill_email'];


        $to = $bill_email; 
        $from = 'contact@smpoetry.com'; 
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
        <div style="position: relative;"><img class="img-responsive" style="position: relative;" src="https://smpoetry.com/assets/images/notify.gif" />
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
        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
        
        // Send email 
        mail($to, $subject, $htmlContent, $headers);

        echo "<script>alert('We 'll.');</script>";
 
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
<section>
        <header class="header" style=" background-color: rgba(0,0,0,1);">
           <a href="https://smpoetry.com" class="logo">SMPOETRY</a>
           <a class="logo poemp" style="letter-spacing:0vw ;" data-scroll="poems" href="#">poems & quotes</a>
           
        </header>
     </section>
     <!---------Header 2------->
     <section>
        <header class="header2" style=" background-color: rgba(0,0,0,1);">
           <input class="menu-btn" type="checkbox" id="menu-btn" />
           <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
           <a href="https://smpoetry.com" class="logo">SMPOETRY</a>
           
           <ul class="menu">
              <li><a data-scroll="poems" href="#">poems & quotes</a></li>
           </ul>
        </header>
     </section>
    <div class=container4>
        <p>Thank You!</p>
        <br>
        <br>
        <br>
        <a href="https://smpoetry.com/">
            <img src="assets/images/sm.png" style="width: 100%;">
        </a>
    </div>

    <section>
        <footer class="footer bg-dark">
            <span style="font-size: 12px;">Copyright © 2019, by Shyam Malani. Designed by
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