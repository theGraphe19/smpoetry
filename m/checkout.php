<?php

   session_start();

   if(isset($_POST['chkout']))
   {  
      $quant = isset($_POST['quant']) ? $_POST['quant'] : '' ;
      $total_price = isset($_POST['total_price']) ? $_POST['total_price'] : '' ;

      $m_data = '220955';
   }

   else
   {
      if(empty($_SESSION['cart_item']))
      {
         unset($_SESSION['cart_item']);
         echo "<script>alert('Your cart is Empty!');</script>";
         echo "<script>location.href='https://smpoetry.com/m/'</script>";
      }
   }

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description"
         content="'She-skin and soul' is a coffee table book comprised of exquisite haiku poems,celebrating womanhood." />
      <!--  Document Title
         =============================================-->
      <title>Coffee Table Book | Romantic Poems | S. M.</title>
      <!-- Default stylesheets-->
      </script>
   <!-- Default stylesheets-->
   <link href="https://smpoetry.com/m/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
   <!-- Main stylesheet and color file-->
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://smpoetry.com/m/assets/css/style2.css" rel="stylesheet" />
      <link id="color-scheme" href="https://smpoetry.com/m/assets/css/colors/default.css" rel="stylesheet" />
      <link id="color-scheme" href="https://smpoetry.com/m/assets/css/mobile.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
         integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
      <script type="text/javascript">
         $(window).load(function () {
             $('.preloader').fadeOut('slow');
         });
      </script>
      <script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
   
      </head>
   <body style="background: white; font-size: 14px; font-family: 'Helvetica'">
      <!--------------cart section------------------>
      <div id="lpane">
         <div id="load"></div>
      </div>
      <div id="lpane_mob">
         <div id="load_mob"></div>
      </div>
      <div class="main_con">
         <div class="overlays"></div>
         <!------------Pre Loader------------------>
         <div class=" preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            z-index: 9999; background-image: url('https://smpoetry.com/m/assets/images/preloader.gif'); background-repeat: no-repeat;
            background-color: #FFF; background-position: center;">
         </div>
         <!------------Header------------------>
         <section>
            <header class="header" style=" background-color: rgba(0,0,0,0.5);">
               <a href="https://smpoetry.com/m/" class="logo">SMPOETRY</a>
               <a class="logo poemp" style="margin-left:0vw;margin-top:0.5vh;font-size:2.5vh;letter-spacing:0vw ;" data-scroll="poems" href="https://smpoetry.com/m/">poems & quotes</a>
            <a class="logo poemp" href="https://smpoetry.com/m/author.html" style="margin-left:9vw;margin-top:0.5vh;font-size:2.5vh;letter-spacing:0vw ;">author's desk</a>
               <a class="logo cart_logo"><img class="book_icon" src="https://smpoetry.com/m/assets/images/cart.png"></a>
            </header>
         </section>
         <!---------Header 2------->
         <section>
            <header class="header2" style=" background-color: rgba(0,0,0,1);">
               <input class="menu-btn" type="checkbox" id="menu-btn" />
               <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
               <a href="https://smpoetry.com/m/" class="logo">SMPOETRY</a>
               <a class="logo cart_logo"><img class="book_icon" src="https://smpoetry.com/m/assets/images/cart.png"></a>
               <ul class="menu">
                  <li><a data-scroll="poems" href="https://smpoetry.com/m/">poems & quotes</a></li>
                  <li><a href="https://smpoetry.com/m/author.html">author's desk</a></li>
               </ul>
            </header>
         </section>



      <section style="padding-top: 16vh;">
         <div class="container">
            <form name="fname" action="ccavRequestHandler.php" method="post" encytype="multipart/form-data">
               <div class="col-lg-12">
                  <div class="" style="background: #fff;">
                     <center>
                        <h3 style="font-size: 16px; color: black"><br>Order Details</h3>
                     </center>
                     <div class="container" style="width: 97%">
                        <div class="row" style="margin-bottom: 10px; margin-top: 35px">
                        <div class="col-lg-3 col-sm-3">
                           <label for="billing_first_name">Transaction ID</label>
                           <input type="text" class="form-control" name="tid" id="tid" readonly />
                        </div>
                        <div class="col-lg-3 col-sm-3">
                           <label for="billing_first_name">Order ID</label>
                           <input type="text" class="form-control" name="order_id" value="<?php echo $_SESSION['order_id']; ?>" readonly />
                        </div>
                        <div class="col-lg-3 col-sm-3">
                           <label for="billing_first_name">Amount</label>
                           <input type="text" class="form-control" name="amount" value="<?php echo $_SESSION['t_price']; ?>" readonly />
                        </div>
                        <div class="col-lg-3 col-sm-3">
                           <label for="billing_first_name">Currency</label>
                           <input type="text" class="form-control" name="currency" value="INR" readonly />
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="" style="background: #fff;">
                     <center><h3 style="font-size: 16px; color: black"><br>Billing Address</h3></center>
                     <div class="container" style="width: 97%">
                        <div class="row" style="margin-bottom: 10px; margin-top: 35px">
                           <div class="col-sm-12 col-xs-12">
                              <label for="bill_name">Full Name</label>
                              <input type="text" name="billing_name" id="bill_name"
                                 class="form-control" required>
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_email">Email</label>
                              <input type="email" name="billing_email" id="bill_email" class="form-control" required>
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_tel">Phone Number</label>
                              <input type="text" name="billing_tel" id="bill_tel" class="form-control" required>
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-12">
                              <label for="bill_address">Address (Street & Area)</label>
                              <textarea class="form-control" name="billing_address" id="bill_address" type="text" required></textarea>
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_city">City</label>
                              <input type="text" name="billing_city" id="bill_city" class="form-control" required>
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_zip">Zip Code</label>
                              <input type="text" name="billing_zip" id="bill_zip" class="form-control" required>
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 50px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_state">State</label>
                              <select name="billing_state" id="bill_state" class="form-control">
                                 <option value="">--------Select State--------</option>
                                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                                 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                 <option value="Assam">Assam</option>
                                 <option value="Bihar">Bihar</option>
                                 <option value="Chhatisgarh">Chhatisgarh</option>
                                 <option value="Goa">Goa</option>
                                 <option value="Gujarat">Gujarat</option>
                                 <option value="Haryana">Haryana</option>
                                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                                 <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                 <option value="Jharkhand">Jharkhand</option>
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Manipur">Manipur</option>
                                 <option value="Meghalaya">Meghalaya</option>
                                 <option value="Mizoram">Mizoram</option>
                                 <option value="Nagaland">Nagaland</option>
                                 <option value="Odisha">Odisha</option>
                                 <option value="Punjab">Punjab</option>
                                 <option value="Rajasthan">Rajasthan</option>
                                 <option value="Sikkim">Sikkim</option>
                                 <option value="Tamil Nadu">Tamil Nadu</option>
                                 <option value="Telangana">Telangana</option>
                                 <option value="Tripura">Tripura</option>
                                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                                 <option value="Uttarakhand">Uttarakhand</option>
                                 <option value="West Bengal">West Bengal</option>
                                 <option value="">--------Union Territories--------</option>
                                 <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                 <option value="Chandigarh">Chandigarh</option>
                                 <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                 <option value="Daman and Diu">Daman and Diu</option>
                                 <option value="Delhi">Delhi</option>
                                 <option value="Lakshadweep">Lakshadweep</option>
                                 <option value="Puducherry">Puducherry</option>
                              </select>
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="bill_country">Country</label>
                              <input type="text" name="billing_country" id="bill_country" value="India" class="form-control" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="" style="background: #fff;">
                     <center><h3 style="font-size: 16px; color: black"><br>Shipping Address</h3>
                     <br>
                     <div style="margin-top: -20px;">
                        <input type="checkbox" id="same" name="same" onchange="billingFunction()"/>
                        <label for="same">
                        &nbsp;&nbsp;&nbsp;&nbsp;Same as Billing Address.
                        </label>
                     </div></center>
                     <div class="container" style="width: 97%" id="ship_box">
                        <div class="row" style="margin-bottom: 10px; margin-top: 5px;">
                           <div class="col-sm-12 col-xs-12">
                              <label for="ship_name">Full Name</label>
                              <input type="text" name="delivery_name" id="ship_name"
                                 class="form-control">
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_email">Email</label>
                              <input type="email" name="delivery_email" id="ship_email" class="form-control">
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_tel">Phone Number</label>
                              <input type="text" name="delivery_tel" id="ship_tel" class="form-control">
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-12">
                              <label for="ship_address">Address (Area & Street)</label>
                              <textarea class="form-control" name="delivery_address" id="ship_address"
                                 type="text"></textarea>
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_city">City</label>
                              <input type="text" name="delivery_city" id="ship_city" class="form-control">
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_zip_code">Zip Code</label>
                              <input type="text" name="delivery_zip" id="ship_zip" class="form-control">
                           </div>
                        </div>
                        <div class="row" style="margin-bottom: 50px">
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_state">State</label>
                              <select name="delivery_state" id="ship_state" class="form-control">
                                 <option value="">--------Select State--------</option>
                                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                                 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                 <option value="Assam">Assam</option>
                                 <option value="Bihar">Bihar</option>
                                 <option value="Chhatisgarh">Chhatisgarh</option>
                                 <option value="Goa">Goa</option>
                                 <option value="Gujarat">Gujarat</option>
                                 <option value="Haryana">Haryana</option>
                                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                                 <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                 <option value="Jharkhand">Jharkhand</option>
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Manipur">Manipur</option>
                                 <option value="Meghalaya">Meghalaya</option>
                                 <option value="Mizoram">Mizoram</option>
                                 <option value="Nagaland">Nagaland</option>
                                 <option value="Odisha">Odisha</option>
                                 <option value="Punjab">Punjab</option>
                                 <option value="Rajasthan">Rajasthan</option>
                                 <option value="Sikkim">Sikkim</option>
                                 <option value="Tamil Nadu">Tamil Nadu</option>
                                 <option value="Telangana">Telangana</option>
                                 <option value="Tripura">Tripura</option>
                                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                                 <option value="Uttarakhand">Uttarakhand</option>
                                 <option value="West Bengal">West Bengal</option>
                                 <option value="">--------Union Territories--------</option>
                                 <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                 <option value="Chandigarh">Chandigarh</option>
                                 <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                 <option value="Daman and Diu">Daman and Diu</option>
                                 <option value="Delhi">Delhi</option>
                                 <option value="Lakshadweep">Lakshadweep</option>
                                 <option value="Puducherry">Puducherry</option>
                              </select>
                           </div>
                           <div class="col-sm-6 col-xs-6">
                              <label for="ship_country">Country</label>
                              <input type="text" name="delivery_country" id="ship_country" value="India" class="form-control" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <center>
                        <input type="text" name="quant" value="<?php echo $_SESSION['t_quantity']; ?>" hidden>
                        <input name="total_price" value="<?php echo $_SESSION['t_price']; ?>" hidden>
                        <input name="customer_id" value="<?php echo $_SESSION['customer_id']; ?>" hidden>
                        <input name="language" value="EN" hidden>
                        <input type="text" name="redirect_url" value="https://smpoetry.com/m/ccavResponseHandler.php" hidden/>
                        <input type="text" name="cancel_url" value="https://smpoetry.com/m/ccavResponseHandler.php" hidden/>

                        <input type="text" name="merchant_id" value="<?php echo $m_data; ?>" hidden>
                        
                        <input type="text" name="merchant_param1" value="additional Info." hidden/>
                        <input type="text" name="merchant_param2" value="additional Info." hidden/>
                        <input type="text" name="merchant_param3" value="additional Info." hidden/>
                        <input type="text" name="merchant_param4" value="additional Info." hidden/>
                        <input type="text" name="merchant_param5" value="additional Info." hidden/>
                        <input type="text" name="promo_code" value="" hidden/>
                        <input type="text" name="customer_identifier" value="" hidden/>
                        <a href="https://smpoetry.com/m/order_book.php">
                           <input value="Back" type="button" class="btn btn-lg btnstyle" style="margin-top: 50px; width:74px;">
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" value="Pay" data-toggle="modal" data-target="#select" class="btn btn-lg btnstyle" style="width:74px; margin-top: 50px;">
                        <div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                           <div class="modal-dialog" role="document" style="margin-top: 30vh;">
                              <div class="modal-content"
                                 style="background: transparent !important; border: none !important; box-shadow: unset !important; padding-left: 3.53vh !important;">
                                 <div class="modal-body text-center">
                                    <h5 style="color: #fff; font-size: 13px">Make sure all form fields are filled!</h5>
                                    <button name="codbtn" type="submit" class="btn btn-lg"
                                       style=" background: #fff; color: #000; width: 171px; height: 46px;">
                                       Cash on Delivery
                                    </button>
                                    <br>
                                    <br>
                                    <button name="ordbtn" type="submit" class="btn btn-lg"
                                       style="background: #fff; color: #000; width: 171px; height: 46px;">
                                       Online Payment
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </center>
                  </div>
                  
                  <center style=""><h5 style="color: #fff">Payment Options</h5></center>
                  <br>
                  <style>.slick-slide img {opacity: 0.7; margin: 0px auto !important; width: 10vh !important;}</style>
                  <section class="customer-logos slider" style="margin-top: 0px !important;">
                     <div class="slide"><img src="https://smpoetry.com/m/assets/images/logo/master.png"></div>
                     <div class="slide"><img src="https://smpoetry.com/m/assets/images/logo/visa.png"></div>
                     <div class="slide"><img src="https://smpoetry.com/m/assets/images/logo/net_banking.png"></div>
                     <div class="slide"><img src="https://smpoetry.com/m/assets/images/logo/cod.png" style="width: 15vh !important;"></div>
                  </section>
               </div>
            </form>
         </div>
            
         <div style="visibility:hidden">
<iframe NAME="iframe1" WIDTH="40" HEIGHT="40"></iframe>
</div>
      </section>

      
      
      <!----------------- footer ---------------->
      <section class="footer" style="position: relative !important;">
         <div class="footer2" style="background: #8885850a;">
            <div class="container">
               <div class="col-lg-12">
                  <div class="container" style="width: 90%">
                     <div class="row">
                        <div class="col-lg-4 text-center">
                           <h3><a href="#" data-toggle="modal" data-target="#terms"
                                 style="color: #000; font-size: 13px;"><u>Privacy Policy</u></a></h3>
                        </div>
                        <div class="col-lg-4 text-center">
                           <h2><a href="https://smpoetry.com/m/"
                                 style="color: #000; font-size: 2.5rem; font-family:'Marvel'; text-decoration: none;">SMPOETRY</a>
                           </h2>
                        </div>
                        <div class="col-lg-4 text-center">
                           <h3>
                              <a href="https://www.instagram.com/_smpoetry_/" target="_blank">
                                 <i class="fab fa-instagram"
                                    style="font-size: 16px; color: black; text-decoration: none;"></i>
                              </a>
                              &nbsp;&nbsp;
                              <a href="https://www.facebook.com/SMpoetry-393910234783718/" target="_blank">
                                 <i class="fab fa-facebook-f"
                                    style="font-size: 16px; color: black; text-decoration: none;"></i>
                              </a>
                              &nbsp;&nbsp;
                              <a href="https://twitter.com/_smpoetry_/" target="_blank">
                                 <i class="fab fa-twitter"
                                    style="font-size: 16px; color: black; text-decoration: none;"></i>
                              </a>
                              &nbsp;&nbsp;
                              <a href="mailto:contact@smpoetry.com">
                                 <i class="fas fa-envelope"
                                    style="font-size: 16px; color: black; text-decoration: none;"></i>
                              </a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true" style="color: #000;">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"
                           style="color:#000; font-family: 'Open Sans', sans-serif">Terms &
                           Conditions
                        </h4>
                     </div>
                     <div class="modal-body">
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Track
                              Order</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              You will receive a tracking link with tracking ID by email once the product has been
                              dispatched.
                              Click on that link and put your tracking
                              ID to track your order.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Cookies</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              Cookies are small pieces of information saved by your browser in your computer. Cookies
                              are used
                              to record various
                              aspects of your visit and assist SMPoetry.com to provide you with uninterrupted service.
                              SMPoetry.com does not use
                              cookies to save personal information for outside uses.
                              We have implemented Google Analytics features based on Display Advertising (Google
                              Display
                              Network Impression Reporting,
                              and Google Analytics Demographics and Interest Reporting). Visitors can opt out of
                              Google
                              Analytics for Display
                              Advertising and customize Google Display Network ads using the Ads Settings.
                              We, along with third-party vendors, including Google, use first-party cookies (such as
                              the
                              Google Analytics cookies) and
                              third-party cookies together to report how our ad impressions, other uses of ad
                              services, and
                              interactions with these ad
                              impressions and ad services are related to visits to our site.
                              No use or services available on this website are directed towards children. SMPoetry.com
                              does
                              not knowingly collect
                              personal information from children or sell its products to children.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Return
                              Policy</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              Our products are sold for good and all. You assume the responsibility for your purchase,
                              and no
                              refunds will be issued.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Cancellation</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              We request you to be careful while placing an order because once you order our product,
                              the
                              order cannot be cancelled.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Free
                              Delivery</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              Our free shipment policy allows you to get this book delivered at home (within India)
                              without
                              any cost. Deliveries
                              outside Indian Territory are chargeable.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Pricing
                              Info</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              The book ‘SHE - SKIN AND SOUL’ is a premium coffee table poetry book, printed on high
                              quality
                              paper with aesthetic
                              illustrations and photographs. The book has hard cover binding and comes with a black
                              outer hard
                              case. Each book is
                              meticulously manufactured that emanates sophistication and artistry. smpoetry.com does not
                              guarantee that the price will
                              be the lowest in the city, region or geography. Prices and availability are subject to
                              change
                              without notice or any
                              consequential liability to you.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Credit Card
                              Details</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              You might be required to provide your credit or debit card details to the approved payment
                              gateways while making the
                              payment. In this regard you agree to provide correct and accurate credit or debit card
                              details to the approved payment
                              gateways for availing services on the website. You shall not use the credit or debit card
                              that is not lawfully owned by
                              you. The information provided by you will not be utilized or shared with any third party
                              unless required in relation to
                              fraud verifications or by law, regulation or court order. You will be solely responsible
                              for the security and
                              confidentiality of your credit or debit card details.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Delivery and
                              Product</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              smpoetry.com takes care of the delivery of your ordered product and ensures a successful
                              delivery. You will get clear
                              information about the shipment and delivery of your product during courier process. Your
                              shipping address and pin code
                              will be verified with the database of smpoetry.com before you proceed to pay for your
                              purchase. If your order is not
                              serviceable by delivery partners, vendors, or your location is not covered by us, we would
                              request you to provide us
                              with an alternate shipping address which we expect to have on our delivery
                              partner’s/vendor’s delivery list. If there is
                              any dispute regarding the shipment of the products or services for the area not covered by
                              smpoetry.com, we will not be
                              held responsible for the non-delivery of the product. In case you book multiple orders for
                              the products and services in
                              one transaction, efforts will be made to ship all products together. However, this may not
                              always be possible.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Services</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              You should take all the responsibility for your own actions in utilizing the products
                              purchased by you. smpoetry.com
                              shall not be liable for any such action.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Use of
                              Information Collected</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              smpoetry.com owns all the informations collected via the website or applications installed
                              on the website. As
                              applicable, the information collected by smpoetry.com shall only be used to contact you
                              about the website and website
                              related news and services available on the website; monitor and improve the website;
                              calculate the number of visitors to
                              the website and to know the geographical locations of the visitors. Some of your
                              information may be shared with and used
                              by third parties who shall need to have access to information, such as courier companies,
                              credit card processing
                              companies, vendors etc. to enable them and smpoetry.com perform their duties and fulfill
                              your order requirements.
                              smpoetry.com does not allow any unauthorized persons or organization to use any
                              information that smpoetry.com may
                              collect from you through this website. However, smpoetry.com is not responsible for any
                              information collected or shared
                              or used by any other third party website due to your browser settings.
                           </p>
                        </div>
                        <div class="form-group text-left">
                           <label for="recipient-name" class="control-label pp_label">Products</label>
                           <p class="pp" style=" font-family: 'Open Sans', sans-serif;">
                              smpoetry.com operate the sale of its products with complete astuteness and  is committed
                              to bring more products in
                              coming times. Shipping for all the products on the website shall be per the company's
                              policy, which may be changed by
                              smpoetry.com from time to time.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!---------------------------copyright------------------->
         <div>
            <footer class="copyright bg-dark">
               <span class="spans">Copyright © 2019, by Shyam Malani. Designed by
                  <a href="http://thegraphe.com/" target="_blank" style="color: white">The Graphē</a>
               </span>
            </footer>
         </div>
      </section>
      <script type="text/javascript">
         $('.modal-content').resizable({
            //alsoResize: ".modal-dialog",
            minHeight: 300,
            minWidth: 300
         });
         $('.modal-dialog').draggable();

         $('#select').on('show.bs.modal', function () {
            $(this).find('.modal-body').css({
               'max-height': '100%'
            });
         });
      </script>

      <!--  JavaScripts =============================================-->
      <script>
         $(document).ready(function(){
            $('.customer-logos').slick({
               slidesToShow: 4,
               slidesToScroll: 1,
               autoplay: false,
               autoplaySpeed: 1500,
               arrows: false,
               dots: false,
               pauseOnHover: true,
               responsive: [{
                     breakpoint: 768,
                     settings: {
                        slidesToShow: 4
                     }
               }, {
                     breakpoint: 520,
                     settings: {
                        slidesToShow: 4
                     }
               }]
            });
         });
      </script>
      
      <script src="https://smpoetry.com/m/assets/js/main.js"></script>
      <script type="text/javascript">
         function billingFunction() {
             if (document.getElementById('same').checked) {
                 document.getElementById('ship_name').value = document.getElementById('bill_name').value;
                 document.getElementById('ship_email').value = document.getElementById('bill_email').value;
                 document.getElementById('ship_tel').value = document.getElementById('bill_tel').value;
                 document.getElementById('ship_address').value = document.getElementById('bill_address').value;
                 document.getElementById('ship_city').value = document.getElementById('bill_city').value;
                 document.getElementById('ship_zip').value = document.getElementById('bill_zip').value;
                 document.getElementById('ship_state').value = document.getElementById('bill_state').value;
                 
         
                 // setTimeout(function () { $("#ship_box").hide(); }, 200);
             }
             else {
                 document.getElementById('ship_name').value = '';
                 document.getElementById('ship_email').value = '';
                 document.getElementById('ship_tel').value = '';
                 document.getElementById('ship_address').value = '';
                 document.getElementById('ship_city').value = '';
                 document.getElementById('ship_zip').value = '';
                 document.getElementById('ship_state').value = '';
         
               //   $("#ship_box").show();
             }
         }
         
      </script>

   

   <!-- // <script>
   //    function OnButton1()
   //    {
   //       document.fname.action = "pay/test.php"    // First target
   //       document.fname.target = "iframe1";    // Open in a iframe
   //       document.fname.submit();
   //    }
   // </script> -->
   </body>
</html>