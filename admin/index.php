<?php
   include('session.php');
   include("db_connection.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>S.M. | Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- bootstrap-css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- //bootstrap-css -->
      <!-- Custom CSS -->
      <link href="css/style.css" rel='stylesheet' type='text/css' />
      <link href="css/style-responsive.css" rel="stylesheet" />
      <!-- font CSS -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <!-- font-awesome icons -->
      <link rel="stylesheet" href="css/font.css" type="text/css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" href="css/morris.css" type="text/css" />
      <!-- calendar -->
      <link rel="stylesheet" href="css/monthly.css">
      <!-- //calendar -->
      <!-- //font-awesome icons -->
      <script src="js/jquery2.0.3.min.js"></script>
      <script src="js/raphael-min.js"></script>
      <script src="js/morris.js"></script>
      <script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
   </head>
   <body>
      <section id="container">
         <!--header start-->
         <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
               <center><img src="images/sm3.png" class="img-responsive"></center>
               <div class="sidebar-toggle-box">
                  <div class="fa fa-bars"></div>
               </div>
            </div>
            <!--logo end-->
            <div class="top-nav clearfix">
               <!--search & user info start-->
               <ul class="nav pull-right top-menu">
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <img src="images/she11.png" alt="<?php echo $login_session1; ?>">
                     <span class="username"><?php echo $login_session1; ?></span>
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu extended logout">
                        <li><a href="logout.php"><i class="fa fa-key"></i>Logout</a></li>
                     </ul>
                  </li>
                  <!-- user login dropdown end -->
               </ul>
               <!--search & user info end-->
            </div>
         </header>
         <!--header end-->
         <!--sidebar start-->
         <aside>
            <div id="sidebar" class="nav-collapse">
               <!-- sidebar menu start-->
               <div class="leftside-navigation">
                  <ul class="sidebar-menu" id="nav-accordion">
                     <li>
                        <a class="active" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a class="" href="orders.php">
                        <i class="fas fa-clipboard-check"></i>
                        <span>Orders</span>
                        </a>
                     </li>
                     <li>
                        <a class="" href="pending_orders.php">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Failed Orders</span>
                        </a>
                     </li>
                     <li>
                        <a class="" href="notify.php">
                        <i class="far fa-bell"></i>
                        <span>Notification</span>
                        </a>
                     </li>
                     <li>
                        <a class="" href="subscribe.php">
                        <i class="far fa-heart"></i>
                        <span>Subscribers</span>
                        </a>
                     </li>
                     <li>
                        <a class="" href="feedback.php">
                        <i class="far fa-thumbs-up"></i>
                        <span>Inspire Us</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- sidebar menu end-->
            </div>
         </aside>
         <!--sidebar end-->
         <!--main content start-->
         <section id="main-content">
            <section class="wrapper">
               <!-- //market-->
               <!--<div class="market-updates">-->
               <!--   <div class="col-md-3 market-update-gd">-->
               <!--      <div class="market-update-block clr-block-2">-->
               <!--         <div class="col-md-4 market-update-right">-->
               <!--            <i class="fa fa-eye"> </i>-->
               <!--         </div>-->
               <!--         <div class="col-md-8 market-update-left">-->
               <!--            <h4>Visitors</h4>-->
               <!--            <h3>-->
               <!--            </h3>-->
               <!--         </div>-->
               <!--         <div class="clearfix"> </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-md-3 market-update-gd">-->
               <!--      <div class="market-update-block clr-block-1">-->
               <!--         <div class="col-md-4 market-update-right">-->
               <!--            <i class="fa fa-users"></i>-->
               <!--         </div>-->
               <!--         <div class="col-md-8 market-update-left">-->
               <!--            <h4>Members</h4>-->
               <!--            <h3>-->
               <!--            </h3>-->
               <!--         </div>-->
               <!--         <div class="clearfix"> </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-md-3 market-update-gd">-->
               <!--      <div class="market-update-block clr-block-1">-->
               <!--         <div class="col-md-4 market-update-right">-->
               <!--            <i class="fa fa-users"></i>-->
               <!--         </div>-->
               <!--         <div class="col-md-8 market-update-left">-->
               <!--            <h4>Booking Requests</h4>-->
               <!--            <h3>-->
               <!--            </h3>-->
               <!--         </div>-->
               <!--         <div class="clearfix"> </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="clearfix"> </div>-->
               <!--</div>-->
               <!-- //market-->
               <!---728x90--->
               <!---728x90--->
               <div class="agil-info-calendar">
                  <!-- calendar -->
                  <div class="col-md-6 agile-calendar">
                     <div class="calendar-widget">
                        <div class="panel-heading ui-sortable-handle">
                           <span class="panel-icon">
                           <i class="fa fa-calendar-o"></i>
                           </span>
                           <span class="panel-title"> Calendar Widget</span>
                        </div>
                        <!-- grids -->
                        <div class="agile-calendar-grid">
                           <div class="page">
                              <div class="w3l-calendar-left">
                                 <div class="calendar-heading">
                                 </div>
                                 <div class="monthly" id="mycalendar"></div>
                              </div>
                              <div class="clearfix"> </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- //calendar -->
                  <div class="clearfix"> </div>
               </div>
               <!---728x90--->
               <!-- tasks -->
               <div class="clearfix"> </div>
               </div>
            </section>
            <!-- footer -->
            <div class="footer">
               <div class="wthree-copyright">
                  <center>
                     <p>© 2019 SMPOETRY. All rights reserved | Designed by <a href="http://thegraphe.com">The Graphē - A Design Studio</a></p>
                  </center>
               </div>
            </div>
            <!-- / footer -->
         </section>
         <!--main content end-->
      </section>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="js/scripts.js"></script>
      <script src="js/jquery.slimscroll.js"></script>
      <script src="js/jquery.nicescroll.js"></script>
      <script src="js/jquery.scrollTo.js"></script>
      <!-- morris JavaScript -->
      <script>
         $(document).ready(function() {
             //BOX BUTTON SHOW AND CLOSE
             jQuery('.small-graph-box').hover(function() {
                 jQuery(this).find('.box-button').fadeIn('fast');
             }, function() {
                 jQuery(this).find('.box-button').fadeOut('fast');
             });
             jQuery('.small-graph-box .box-close').click(function() {
                 jQuery(this).closest('.small-graph-box').fadeOut(200);
                 return false;
             });
         
             //CHARTS
             function gd(year, day, month) {
                 return new Date(year, month - 1, day).getTime();
             }
         
             graphArea2 = Morris.Area({
                 element: 'hero-area',
                 padding: 10,
                 behaveLikeLine: true,
                 gridEnabled: false,
                 gridLineColor: '#dddddd',
                 axes: true,
                 resize: true,
                 smooth: true,
                 pointSize: 0,
                 lineWidth: 0,
                 fillOpacity: 0.85,
                 data: [{
                         period: '2015 Q1',
                         iphone: 2668,
                         ipad: null,
                         itouch: 2649
                     }, {
                         period: '2015 Q2',
                         iphone: 15780,
                         ipad: 13799,
                         itouch: 12051
                     }, {
                         period: '2015 Q3',
                         iphone: 12920,
                         ipad: 10975,
                         itouch: 9910
                     }, {
                         period: '2015 Q4',
                         iphone: 8770,
                         ipad: 6600,
                         itouch: 6695
                     }, {
                         period: '2016 Q1',
                         iphone: 10820,
                         ipad: 10924,
                         itouch: 12300
                     }, {
                         period: '2016 Q2',
                         iphone: 9680,
                         ipad: 9010,
                         itouch: 7891
                     }, {
                         period: '2016 Q3',
                         iphone: 4830,
                         ipad: 3805,
                         itouch: 1598
                     }, {
                         period: '2016 Q4',
                         iphone: 15083,
                         ipad: 8977,
                         itouch: 5185
                     }, {
                         period: '2017 Q1',
                         iphone: 10697,
                         ipad: 4470,
                         itouch: 2038
                     },
         
                 ],
                 lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                 xkey: 'period',
                 redraw: true,
                 ykeys: ['iphone', 'ipad', 'itouch'],
                 labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                 pointSize: 2,
                 hideHover: 'auto',
                 resize: true
             });
         
         });
      </script>
      <!-- calendar -->
      <script type="text/javascript" src="js/monthly.js"></script>
      <script type="text/javascript">
         $(window).load(function() {
         
             $('#mycalendar').monthly({
                 mode: 'event',
         
             });
         
             $('#mycalendar2').monthly({
                 mode: 'picker',
                 target: '#mytarget',
                 setWidth: '250px',
                 startHidden: true,
                 showTrigger: '#mytarget',
                 stylePast: true,
                 disablePast: true
             });
         
             switch (window.location.protocol) {
                 case 'http:':
                 case 'https:':
                     // running on a server, should be good.
                     break;
                 case 'file:':
                     alert('Just a heads-up, events will not work when run locally.');
             }
         
         });
      </script>
      <!-- //calendar -->
   </body>
</html>
