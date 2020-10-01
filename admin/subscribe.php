<?php
   include('session.php');
   include("db_connection.php");

//   if(isset($_POST['subbtn']))
//     {
//       // File upload configuration
//       if (isset($_FILES["emailer_pic"]) && $_FILES["emailer_pic"]["error"] == 0)
//       { 
//          $file_name     = $_FILES["emailer_pic"]["name"]; 
//          $file_type     = $_FILES["emailer_pic"]["type"]; 
//          $file_size     = $_FILES["emailer_pic"]["size"]; 
//          $file_tmp_name = $_FILES["emailer_pic"]["tmp_name"]; 
//          $file_error    = $_FILES["emailer_pic"]["error"];
//          $file_name = "emailer_pic";
//       }
//       $dir="images/emailer/".$file_name;
//       move_uploaded_file($_FILES['emailer_pic']['tmp_name'],$dir);

//       $query = "update emailer_pics set emailer_img_loc = '$dir' where id = 1";
//       mysqli_query($connection, $query);
//     }
$newfilename = "";
    if (isset($_POST['subbtn']))
   {
      $filename = $_FILES["emailer_pic"]["name"];
      $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
      $file_ext = substr($filename, strripos($filename, '.')); // get file name
      $filesize = $_FILES["emailer_pic"]["size"];
      $allowed_file_types = array(".jpg");	
      $new_name = 'emailer_pic';
      if (in_array($file_ext,$allowed_file_types) && ($filesize < 5000000))
      {	
         // Rename file
         $newfilename = $new_name. date('_D_y_m_d') . $file_ext;
         move_uploaded_file($_FILES["emailer_pic"]["tmp_name"], "images/emailer/" . $newfilename);
      }
      elseif (empty($file_basename))
      {	
         // file selection error
         echo "<script>alert('Please select a file to upload.');</script>";
      } 
      elseif ($filesize > 5000000)
      {	
         // file size error
         echo "<script>alert('The file you are trying to upload is too large.');</script>";
      }
      else
      {
         // file type error
         echo "<script>alert('Only this file type is allowed for upload: " . implode(', ',$allowed_file_types) . "');</script>";
         unlink($_FILES["emailer_pic"]["tmp_name"]);
      }
      
      $dir="images/emailer/".$newfilename;
      
      $query = "insert into emailer_pics (emailer_img_name, emailer_img_loc) values('$newfilename', '$dir')";
      mysqli_query($connection, $query);
   }
?>
<?php
   if(isset($_POST['send_emails']))
   {
      $get = "select * from emailer_pics order by id DESC limit 1";
      $get_result = mysqli_query($connection, $get);
      while($get_row = mysqli_fetch_array($result2))
      {
         $set_name = $get_row['emailer_img_name'];
      }
      $sql2 = "select * from newsletter order by id ASC";
      $result2 = mysqli_query($connection,$sql2);
      while($row = mysqli_fetch_array($result2))
      {
         $to = $row['email']; 
         $from = 'info@smpoetry.com'; 
         $fromName = 'SHE : SKIN AND SOUL'; 
         
         $subject = "Daily Poems & Quotes"; 
         
         $htmlContent = ' 
         <div class="pre">
            <br /> <br />
            <div id="_rc_sig">
                  <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#fff">
                     <tbody>
                        <tr>
                           <td align="center" width="100%">
                              <table class="devicewidth" border="0" width="auto" cellspacing="0" cellpadding="0" align="center">
                                 <tbody>
                                    <tr>
                                       <td align="center" width="100%">
                                          <div style="position: relative; background: #000;"><img class="img-responsive" style="position: relative; width: 50%;" src="https://smpoetry.com/assets/images/sm4.png" /></div>
                                          <div style="position: relative; height: 90px; background: white; text-align: center; padding-top: 4vh;">
                                             <p style="font-size: 20px; font-family: Helvetica;">Title</p>
                                          </div>
                                          <div style="position: relative; background: white; text-align: center;">
                                             <img class="img-responsive" style="margin-top: 20px; width:350px;" src="https://smpoetry.com/admin/images/emailer/emailer_pic'.$set_name.date('_D_y_m_d').'.jpg" />
                                          </div>
                                          <div style="position: relative; height: 70px; background: white; text-align: left;">
                                                <p style="position: absolute; margin-left: 4vh; margin-right: 4vh; font-family:Helvetica;">
                                                   P.S. Please drop in a feedback on our website.</p>
                                             </div>
                                          <div style="position: relative; height: 50px; background: black; text-align: center; padding-top: 10px;">
                                          <a style="text-decoration: none; color: white; font-size: 16px; font-family: Helvetica;" href="https://smpoetry.com">www.smpoetry.com</a></div>
                                          <div style="left: 40%; background-color: #000; margin-top: -20px; padding-bottom: 10px;">
                                          <a style="color: black;" href="https://www.instagram.com/_smpoetry_/"> 
                                          <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="https://smpoetry.com/assets/images/insta2.png" /> 
                                          </a> &nbsp;&nbsp; <a style="color: black;" href="https://www.facebook.com/SMpoetry-393910234783718/">
                                             <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="https://smpoetry.com/assets/images/fb.png" />
                                             </a> &nbsp;&nbsp; <a style="color: black;" href="https://twitter.com/_smpoetry_">
                                             <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="https://smpoetry.com/assets/images/twitter2.png" />
                                                </a></div>
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
      }
   }
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
                        <a class="" href="notify.php">
                        <i class="far fa-bell"></i>
                        <span>Notification</span>
                        </a>
                     </li>
                     <li>
                        <a class="active" href="subscribe.php">
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
                  <div class="row" style="padding-bottom: 25px !important;">
                     <div class="col-md-12" style="margin-bottom: 20px;">
                        <h3 class="text-center" style="padding: 10px 0 10px 0">
                           Send Daily Poems & Quotes
                        </h3>
                     </div>
                      <div class="col-md-12" style="margin-bottom: 20px;">
                        <h4 class="text-center" style="padding: 10px 0 10px 0">
                           Select Layout
                        </h4>
                     </div>
                     <div class="col-md-12" style="margin-bottom: 20px;" id="no-more-tables">
                        <center>
                           <button class="btn" id="a">White Image</button>
                           &nbsp;&nbsp;&nbsp;
                           <button class="btn" id="b">Black Image</button> 
                        </center>
                     </div>
                     <div class="col-md-12" id="no-more-tables">
                        <center>
                           <form method="post" enctype="multipart/form-data">
                              <div class="input-group" style="width: 300px" >
                                 <input name="emailer_pic" type="file" class="form-control" placeholder="Upload Image" required>
                                 <span class="input-group-btn">
                                    <button name="subbtn" class="btn btn-md btnstyle" type="submit" style="background: #000; color: #fff; border: 1px solid #000 !important">UPLOAD</button>
                                 </span>
                              </div>
                           </form>
                        </center>
                     </div>
                  </div>

                  <style>
                     .btn {
                        border: none;
                        background: #000;
                        border-radius: 3px;
                        font-family: Arial;
                        color: #ffffff;
                        text-decoration: none;
                     }

                     .active {
                        background: green;
                        text-decoration: none;
                        color: #fff;
                     }
                  </style>

                   <div class="row" style="padding-bottom: 25px !important;">
                     <div id="parent">
                        <?php
                              $sql = "select * from emailer_pics order by id DESC limit 1";
                              $result = mysqli_query($connection,$sql);
                              while($row = mysqli_fetch_array($result))
                              {
                        ?>
                         <div class="col-md-6 box a">
                           <center>
                           <div class="pre">
                           <br /> <br />
                           <div id="_rc_sig">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0"   style="background: #fff">
                                 <tbody>
                                    <tr>
                                       <td align="center" width="100%">
                                          <table class="devicewidth" border="0" width="auto" cellspacing="0" cellpadding="0" align="center">
                                             <tbody>
                                                <tr>
                                                   <td align="center" width="100%" height="100vh">
                                                      <div style="position: relative; margin: 30px auto"></div>
                                                      <div style="position: relative; text-align: center; margin-bottom: 20px;">
                                                      <center>
                                                         <img class="img-responsive" style="box-shadow: 5px 5px 3px #00000047; margin-top: 20px; width:300px;" alt="<?php echo $row['emailer_img_name'] ?>" src="<?php echo $row['emailer_img_loc'] ?>" />
                                                      </center>
                                                      </div>

                                                      <div style="position: relative; margin-top: 20px; background: #000; ">
                                                         <center>
                                                            <img class="img-responsive" style="position: relative; width: 40%;" src="https://smpoetry.com/assets/images/sm4.png" />
                                                         </center>
                                                      </div>

                                                      <div style="left: 40%; margin-bottom: 15px; background-color: #fff; margin-top: 20px;">
                                                         <a style="color: #fff;" href="https://www.instagram.com/_smpoetry_/"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/insta2_b.png" /> 
                                                         </a>
                                                         &nbsp;&nbsp; 
                                                         <a style="color: #fff;" href="https://www.facebook.com/SMpoetry-393910234783718/"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/fb_b.png" /> 
                                                         </a> 
                                                         &nbsp;&nbsp; 
                                                         <a style="color: #fff;" href="https://twitter.com/_smpoetry_"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/twitter2_b.png" /> 
                                                         </a>
                                                      </div>
                                                      <div style="position: relative; height: 50px; background: #fff; text-align: center;">
                                                         <a style="text-decoration: none; color: #000; font-size: 16px; font-family: 'Helvetica';" href="https://smpoetry.com">
                                                            www.smpoetry.com
                                                         </a>
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
                           <br>
                           <form method="post">
                              <button class="btn btn-md btnstyle" type="submit" name="send_emails" style="margin: 30px auto; background: red; color: #fff; border: 1px solid red">Send Emailer</button>
                           </form>
                           </center>
                        </div>
                        <div class="col-md-6 box b">
                           <center>
                           <div class="pre">
                           <br /> <br />
                           <div id="_rc_sig">
                              <table border="0" width="100%" cellspacing="0" cellpadding="0"   style="background: #fff">
                                 <tbody>
                                    <tr>
                                       <td align="center" width="100%">
                                          <table class="devicewidth" border="0" width="auto" cellspacing="0" cellpadding="0" align="center">
                                             <tbody>
                                                <tr>
                                                   <td align="center" width="100%" height="100vh">
                                                      <div style="position: relative; margin: 30px auto"></div>
                                                      <div style="position: relative; text-align: center; margin-bottom: 20px;">
                                                      <center>
                                                         <img class="img-responsive" style="box-shadow: 5px 5px 3px #00000047; margin-top: 20px; width:300px;" alt="<?php echo $row['emailer_img_name'] ?>" src="<?php echo $row['emailer_img_loc'] ?>" />
                                                      </center>
                                                      </div>

                                                      <div style="position: relative; margin-top: 20px; background: #fff; ">
                                                         <center>
                                                            <img class="img-responsive" style="position: relative; width: 40%;" src="images/sm5.png" />
                                                         </center>
                                                      </div>

                                                      <div style="left: 40%; margin-bottom: 15px; background-color: #fff; margin-top: 20px;">
                                                         <a style="color: #fff;" href="https://www.instagram.com/_smpoetry_/"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/insta2_b.png" /> 
                                                         </a>
                                                         &nbsp;&nbsp; 
                                                         <a style="color: #fff;" href="https://www.facebook.com/SMpoetry-393910234783718/"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/fb_b.png" /> 
                                                         </a> 
                                                         &nbsp;&nbsp; 
                                                         <a style="color: #fff;" href="https://twitter.com/_smpoetry_"> 
                                                            <img class="img-responsive" style="position: relative; width: 20px; display: unset;" src="images/twitter2_b.png" /> 
                                                         </a>
                                                      </div>
                                                      <div style="position: relative; height: 50px; background: #fff; text-align: center;">
                                                         <a style="text-decoration: none; color: #000; font-size: 16px; font-family: 'Helvetica';" href="https://smpoetry.com">
                                                            www.smpoetry.com
                                                         </a>
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
                           <br>
                           <form method="post">
                              <button class="btn btn-md btnstyle" type="submit" name="send_emails" style="margin: 30px auto; background: red; color: #fff; border: 1px solid red">Send Emailer</button>
                           </form>
                           </center>
                        </div>
                        <?php
                              }
                        ?>
                      </div> 

                     <div class="col-md-6 text-center">
                        <div class="row">
                           <div class="col-md-12" style="margin-top: 25px; margin-bottom: 20px;">
                                 <h3 class="text-center">
                                    People who Subscribed
                                 </h3>
                           </div>
                           <div id="no-more-tables">
                              <table class="col-md-12 table-bordered table-striped table-condensed cf" style="padding-right: 0 !important; padding-left: 0 !important;">
                                 <thead class="cf">
                                    <tr>
                                          <th>ID</th>
                                          <th>Email</th>
                                          <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                          $sql = "select * from newsletter order by id ASC";
                                          $result = mysqli_query($connection,$sql);
                                          while($row = mysqli_fetch_array($result))
                                          {
                                    ?>
                                    <tr>
                                          <td data-title="ID"><?php echo $row['id']; ?></td>
                                          <td data-title="Email"><?php echo $row['email']; ?></td>
                                          <td data-title="Delete">
                                             <a href="status.php?subscribe_id=<?php echo $row['id'];?>">
                                                <i class="fas fa-trash-alt" style="color: #000; font-size:1.0rem;"></i>
                                             </a>
                                          </td>
                                    </tr>
                                    <?php
                                          }
                                    ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>

                  
                </div>
            </section>
            <script>
               var $btns = $('.btn').click(function() {
               if (this.id == 'c') {
                  $('#parent > div').fadeIn(450);
               } else {
                  var $el = $('.' + this.id).fadeIn(450);
                  $('#parent > div').not($el).hide();
               }
               $btns.removeClass('active');
               $(this).addClass('active');
               })
            </script>
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