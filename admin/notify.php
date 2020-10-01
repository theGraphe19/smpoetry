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
      <style>

          th, td{
              text-align: center;
          }
          @media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
        text-align:left;
        font-size: 14px;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
}
          </style>
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
                        <a class="" href="index.php">
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
                        <a class="active" href="notify.php">
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
                <div class="container" style="padding-right: 0 !important; padding-left: 0 !important; width: 100%">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <h3 class="text-center">
                                Notify Me
                            </h3>
                        </div>
                        <div id="no-more-tables">
                            <table class="col-md-12 table-bordered table-striped table-condensed cf" style="padding-right: 0 !important; padding-left: 0 !important;">
                                <thead class="cf">
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "select * from notify order by id ASC";
                                        $result = mysqli_query($connection,$sql);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                    ?>
                                    <tr>
                                        <td data-title="ID"><?php echo $row['id']; ?></td>
                                        <td data-title="Email"><?php echo $row['email']; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
   </body>
</html>