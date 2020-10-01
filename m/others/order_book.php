<?php
   
   session_start();
   require_once("dbcontroller.php");
   $db_handle = new DBController();
   if(!empty($_GET["action"])) {
   switch($_GET["action"]) {
    case "add":
        if(!empty($_POST["quantity"])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM other_product WHERE code='" . $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 
                        'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"],'image'=>"assets/images/PNG.jpg"));
            
            if(!empty($_SESSION["cart_items"])) {
                if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_items"]))) {
                    foreach($_SESSION["cart_items"] as $k => $v) {
                            if($productByCode[0]["code"] == $k) {
                                if(empty($_SESSION["cart_items"][$k]["quantity"])) {
                                    $_SESSION["cart_items"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_items"][$k]["quantity"] = $_POST["quantity"];
                            }
                    }
                } else {
                    $_SESSION["cart_items"] = array_merge($_SESSION["cart_items"],$itemArray);
                }
            } else {
                $_SESSION["cart_items"] = $itemArray;
            }
        }
    break;
    case "remove":
        if(!empty($_SESSION["cart_items"])) {
            foreach($_SESSION["cart_items"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_items"][$k]);              
                    if(empty($_SESSION["cart_items"]))
                        unset($_SESSION["cart_items"]);
            }
               header('Location: https://smpoetry.com/m/others/order_book.php');
        }
    break;
    case "empty":
        unset($_SESSION["cart_items"]);
    break;  
   }
   }
?>

<!DOCTYPE html>
<html lang="en-US" >
    
    
   <head>
      <link rel="stylesheet" type="text/css" href="https://smpoetry.com/m/others/sliderstyle.css"/>
      <link href="https://smpoetry.com/m/others/assets/css/mobile.css" rel="stylesheet" />
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
      <script type="text/javascript" src="https://smpoetry.com/m/others/slider.jquery.js"></script>
      <script src="https://smpoetry.com/m/others/assets/js/main.js"></script>
      <link href="https://smpoetry.com/m/others/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description"
      content="'She-skin and soul' is a coffee table book comprised of exquisite haiku poems,celebrating womanhood." />
   <!--  Document Title
         =============================================-->
   <title>S. M. | Coffee Table Book | Micro-Poems</title>
   
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
      <!--  Stylesheets
         =============================================
         -->
      <!-- Default stylesheets-->
      <link href="https://smpoetry.com/m/others/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Font Awesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
         integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
      <!-- Main stylesheet and color file-->
      
      <link href="https://smpoetry.com/m/others/assets/css/style2.css" rel="stylesheet" />
      <link id="color-scheme" href="https://smpoetry.com/assets/css/colors/default.css" rel="stylesheet" />
      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript">
         $(window).load(function () {
             $('.preloader').fadeOut('slow');
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
            $('#country_name').on('change',function(){
                  var countryID = $(this).val();
                  if(countryID){
                     $.ajax({
                        type:'POST',
                        url:'ajaxFile.php',
                        data:'country_name='+countryID,
                        success:function(html){
                              $('#country_price').html(html);
                        }
                     }); 
                  }else{
                     $('#country_price').html('Select country first');
                  }
            });
         });
      </script>
   </head>
   <body style="background:rgba(255,255,255,0);">
      <div id="lpane">
         <div id="load" style="display:none;"></div>
      </div>
      <div id="lpane_mob">
         <div id="load_mob"></div>
      </div>
      <div class="main_con">
         <div class="overlays"></div>
         <!------------Pre Loader------------------>
         <div class=" preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            z-index: 9999; background-image: url('https://smpoetry.com/m/others/assets/images/preloader.gif'); background-repeat: no-repeat;
            background-color: #FFF; background-position: center;">
         </div>
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
         
            <!-------------------------------------slider---------------->
            <style>
               body { background-color:rgba(0,0,0,1);}
            </style>
            <div class="container" >
               <!--<section class="slider">-->
               <!--   <img width="100%" height="100%" src="https://smpoetry.com/m/others/assets/images/PNG.png"class="right"/>-->
               <!--   <img width="100%" height="100%" src="https://smpoetry.com/m/others/assets/images/PNG2.png" class="left"/>-->
               <!--   <img width="100%" height="100%" src="https://smpoetry.com/m/others/assets/images/she1.png" class="center"/>-->
               <!--</section>-->
               <iframe id="viewer" class="ifr" style="height: 50vh;width: 100%;border: 0px solid black; margin-top: 10vh" src="../d2/book.php" name="viewer" allowfullscreen allowvr onmousewheel=""> 
							</iframe>
            </div>
            <!-------------Book details----------------->
            <div class="container prod_details">
               <?php
                  $product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
                     if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                  ?>
               <div id="prod_name" style="font-size: 1.5rem;font-family: 'Helvetica';"  class="row prod_det text-center">
                  <?php echo $product_array[$key]["name"]; ?>
               </div>
               <div class="row prod_det text-center">
                  <input id="newquant" type="number" name="quantity" value="1" min="1" style="font-family:Helvetica;font-size:2rem; text-align: center;"/>
               </div>
               <div class=" prod_det row text-center" style="font-size: 1.8rem;font-family: 'Helvetica';">
                  <b><?php echo "$  ".$product_array[$key]["price"]; ?></b>
               </div>
               
               <div class="row prod_det text-center">
                  <label style="font-family:Helvetica;font-size:1.6rem; text-align: center; padding-right: 2vh">Delivery : </label>
                     <select id="country_name" name="country_name" style="padding-top: 5px; padding-bottom: 5px; font-family:Helvetica;font-size:1.4rem; text-align: center;">
                        <option value="">-- Select Country --</option>
                        <?php
                           include('dbcon.php');
                           $q = "select * from countries order by country_name ASC";
                           $run = mysqli_query($connection, $q);

                           while($row = mysqli_fetch_array($run))
                           {
                        ?>
                        <option value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
                        <?php
                           }
                        ?>
                     </select>
               </div>
               <div class="row prod_det text-center">
                  <label style="font-family:Helvetica; font-size:1.6rem; text-align: center; padding-left: 2vh; padding-right: 2vh">
                     Shipping Charge : <font style="font-weight: 50;">$ <span name="country_price" id="country_price">0.00</span></font>
                  </label>
               </div>
               <div class="prod_det row text-center">
                  <button id="add"  class="btn btn-lg btnstyle">ADD TO CART</button>
               </div>
               <?php
                  }
                  }
               ?>
            </div>
            <br><br><br><br>
         
         
        
      </div>

      <!----------------- footer ---------------->
      <section class="footer" style="position: relative !important;">
         <div class="footer2" style="background: #8885850a;">
            <div class="container">
               <div class="col-lg-12">
                  <div class="container" style="width: 90%">
                     <div class="row">
                        <div class="col-lg-4 text-center">
                           <h3><a href="#" data-toggle="modal" data-target="#terms"
                                 style="color: #000; font-size: 13px;"><u>Terms & Conditions</u></a></h3>
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
                           style="color:#000; font-family: 'Open Sans', sans-serif">Privacy Policy
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

         $('#terms').on('show.bs.modal', function () {
            $(this).find('.modal-body').css({
               'max-height': '100%'
            });
         });

         $('#select').on('show.bs.modal', function () {
            $(this).find('.modal-body').css({
               'max-height': '100%'
            });
         });

         $('#soon').on('show.bs.modal', function () {

            $(this).find('.modal-body').css({
               'max-height': '100%'
            });
         });
      </script>

      <!--  JavaScripts =============================================-->
         <!-- <script src="https://smpoetry.com/test/assets/lib/wow/dist/wow.js"></script>
            --><script src="https://smpoetry.com/m/others/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        
         <script type="text/javascript">
            function getquantity(){
            var number=document.getElementById("noqunatity").value;
            if(number == null){
                alert("Your cart is Empty!");
            }
            
            }
         </script>
         <script type="text/javascript">
            $('.modal-content').resizable({
                //alsoResize: ".modal-dialog",
                minHeight: 300,
                minWidth: 300
                });
                $('.modal-dialog').draggable();
            
                $('#terms').on('show.bs.modal', function() {
                $(this).find('.modal-body').css({
                    'max-height': '100%'
                });
                });
         </script>
      <script src="https://smpoetry.com/m/others/assets/js/main.js"></script>
   </body>
</html>