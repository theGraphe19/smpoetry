<?php
   session_start();

   date_default_timezone_set("Asia/Kolkata");
   $o = date('s') + rand('111', '99999') + rand('11111', '22222');
   $order_id = $o;
   $_SESSION['order_id'] = $order_id;

   $c = rand('11111', '22222').date('s') + rand('111', '99999');
   $customer_id = $c;
   $_SESSION['customer_id'] = $customer_id;
   
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <script>
            var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
            if (isMobile) {
               window.location.href = "https://www.smpoetry.com/m/";
            }
      </script>

      <script type="application/ld+json">
            {
               "@context": "https://schema.org",
               "@type": "BookStore",
               "name": "SM Poetry",
               "address": {
                  "@type": "PostalAddress",
                  "streetAddress": "193/1, Mahatma Gandhi Rd, 2nd Floor, Bara Bazar, Jorasanko, Kolkata, West Bengal 700007",
                  "addressLocality": "Kolkata",
                  "addressRegion": "WB",
                  "postalCode": "700007"
               },
               "image": "https://scontent.fccu7-1.fna.fbcdn.net/v/t1.0-9/57852576_393910938116981_6159204357704253440_n.jpg?_nc_cat=100&_nc_sid=09cbfe&_nc_ohc=Kb83dTTpik0AX_ZS8NM&_nc_ht=scontent.fccu7-1.fna&oh=e2a4a300ea77daf1772fbfd4d92002ef&oe=5F02E443",
               "email": " contact@smpoetry.com",
               "url": "https://l.facebook.com/l.php?u=http%3A%2F%2Fwww.smpoetry.com%2F%3Ffbclid%3DIwAR18Mea71r6SHW0ddAR_PtSSYk2oqI0hwViuO2Cnoqx2lWhOsHDKLS4bw9A&h=AT0RZLgss3Ns8Xz7-i-e2KPSfnoFIArmV0Sjxas3mvJY111kRpbr-WUEcodevqxbAzNisqvSjFaTs3t4KZkK_OyU8hOi_4wgyxV8kztUu8uoafPkFID_Lie19sgKArpoxIZFqbKrcasX8-z5UtZomg",
               "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 09:00-21:00",
               "openingHoursSpecification": [
                  {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                        "opens": "09:00",
                        "closes": "21:00"
                  }
               ],
               "geo": {
                  "@type": "GeoCoordinates",
                  "latitude": "22.580828",
                  "longitude": "88.354803"
               },
               "priceRange": "$"
            }
      </script>

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

      <style type="text/css"></style>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>SMPOETRY</title>
      <link rel="stylesheet" href="style.css" />
      <script src="js/TweenMax.min.js"></script>
      <meta name="author" content="Souparna Das" />
      <link rel="stylesheet" type="text/css" href="css/base.css" />
      <link rel="stylesheet" type="text/css" href="css/main.css" />
      <script>
            document.documentElement.className = "js";
            var supportsCssVars = function () {
               var e,
                  t = document.createElement("style");
               return (t.innerHTML = "root: { --tmp-var: bold; }"), document.head.appendChild(t), (e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)"))), t.parentNode.removeChild(t), e;
            };
            supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
      </script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script type="text/javascript"></script>

      <script type="text/javascript">
            function submit_soap() {
               var pin = $("#check_pin").val();
               $(".get_av").css({
                  height: "10%",
                  "line-height": "2.1vh",
               });
               $.get("ship.php", { check_pin: pin }, function (data) {
                  $("#json_res").html(data);
               });
            }
      </script>

      <script>
            $(document).ready(function () {
               $(".n_details").hide();
               $(".d_details").hide();
               $(".other_n_details").hide();
               $(".other_d_details").hide();

               //-----------------india button---------------
               $("#india").click(function () {
                  $(".n_details").fadeIn();
                  $(".select_con").fadeOut();
               });

               $("#hide").click(function () {
                  $(".n_details").fadeOut();
                  $(".d_details").fadeIn();

                  var p = parseInt($("#pricess").text(), 10);
                  var q = parseInt($("#quantityss").val(), 10);

                  $("#t_quantityss").html($("#quantityss").val());
                  $("#totalss").html(p * q);

                  document.getElementById("store_quantity").value = document.getElementById("t_quantityss").innerHTML;
                  document.getElementById("store_total_price").value = document.getElementById("totalss").innerHTML;
               });

               $("#return_con").click(function () {
                  $(".n_details").fadeOut();
                  $(".select_con").fadeIn();
               });

               $("#return_con_others").click(function () {
                  $(".other_n_details").fadeOut();
                  $(".select_con").fadeIn();
               });

               $("#show").click(function () {
                  $(".d_details").fadeOut();
                  $(".n_details").fadeIn();
               });

               //--------------other button--------------------
               $("#others").click(function () {
                  $(".other_n_details").fadeIn();
                  $(".select_con").fadeOut();
               });

               $("#other_hide").click(function () {
                  $(".other_n_details").fadeOut();
                  $(".other_d_details").fadeIn();

                  var other_p = parseFloat($("#other_pricess").text(), 10);
                  var other_q = parseFloat($("#other_quantityss").val(), 10);
                  var other_r = parseFloat($("#country_price").text(), 10);
                  var res = ((other_p + other_r) * other_q).toFixed(2);

                  $("#other_t_quantityss").html($("#other_quantityss").val());
                  $("#other_totalss").html(res);

                  document.getElementById("other_store_con").value = document.getElementById("country_name").value;
                  document.getElementById("other_store_quantityss").value = document.getElementById("other_t_quantityss").innerHTML;
                  document.getElementById("other_store_totalss").value = document.getElementById("other_totalss").innerHTML;
               });

               $("#other_show").click(function () {
                  $(".other_d_details").fadeOut();
                  $(".other_n_details").fadeIn();
               });
            });
      </script>

      <script type="text/javascript">
            $(document).ready(function () {
               $("#country_name").on("change", function () {
                  var countryID = $(this).val();
                  if (countryID) {
                        $.ajax({
                           type: "POST",
                           url: "ajaxFile.php",
                           data: "country_name=" + countryID,
                           success: function (html) {
                              $("#country_price").html(html);
                           },
                        });
                  } else {
                        $("#country_price").html("Select country first");
                  }
               });
            });
      </script>
   </head>
   <body class="loading">
      <div class="copyr">
            Copyright &#169;
            <?php echo date('Y'); ?>, by Shyam Malani. Designed by <a href="https://thegraphe.com" target="_blank" style="color: #000;">The Graphē</a>
      </div>
      <div class="preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999999999; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 1); background-position: center;">
            <main role="main" class="main-content" id="main-content">
               <div class="titleCont">
                  <h1 class="main-title" id="main-title">
                        "be graceful<br />
                        <span style="padding-left: 100px;">in whichever shape life shapes you</span><br />
                        <span style="padding-right: 110px;">crescent moon taught me this"</span><br />
                        <span style="padding-left: -20px;">- s. m.</span>
                  </h1>
               </div>
               <canvas id="noise" class="noise"></canvas>
               <div class="vignette"></div>
            </main>
      </div>
      <script src="script.js"></script>

      <div class="left_menu">
            <div class="menu_grad"></div>
            <div class="top_auth_con">
               <div class="auth_text">
                  <p>
                        SMPOETRY<br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <span>KNOW YOUR AUTHOR</span>
                  </p>
               </div>
            </div>
            <div class="nav_con">
               <div class="menu_tile" id="she">
                  <p>
                        SHE _<br />
                        <span style="font-weight: 200; font-size: 0.7vw;">Skin and soul</span>
                  </p>
               </div>
               <div class="menu_tile hovere" id="du">
                  <p>
                        DEAR YOU<br />
                        <span style="font-weight: 200; font-size: 0.7vw;">COMING SOON</span>
                  </p>
               </div>
               <div class="menu_tile hovere" id="rf">
                  <p>
                        writer's forum <br />
                        <span style="font-weight: 200; font-size: 0.7vw;">Penned by You</span>
                  </p>
               </div>
               <div class="menu_tile hovere" id="hr">
                  <p>
                        Happy Readers <br />
                        <span style="font-weight: 200; font-size: 0.7vw;">Liked by You</span>
                  </p>
               </div>
            </div>
            <div class="bot_social_con">
               <div class="icon_con">
                  <!-- <div class="s_icon fb"></div>
               <div class="s_icon insta"></div>
               <div class="s_icon twitter"></div> -->
                  <p style="margin: auto;"><a href="mailto:contact@smpoetry.com" class="connect">connect</a></p>
               </div>
            </div>
      </div>
      <script type="text/javascript">
            $(".hovere").hover(
               function () {
                  $(this).css({
                        transform: " scale(1.1,1.1)",
                        transition: "0.3s ",
                  });
               },
               function () {
                  $(this).css({
                        transform: " scale(1,1)",
                        transition: "1.8s cubic-bezier(0.215, 0.61, 0.355, 1)",
                  });
               }
            );

            $(".auth_img").css({
               transform: "scale(1,1)",
            });

            //redirects

            function exit_animation() {
               $("#she").css({ transform: "translate(-100px,25px)", transition: "1.5s cubic-bezier(0.215, 0.61, 0.355, 1)" });
               $("#du").css({ transform: "translate(-100px,25px)", transition: "1.5s cubic-bezier(0.215, 0.61, 0.355, 1)", "transition-delay": "0.2s" });
               $("#pq").css({ transform: "translate(-100px,25px)", transition: "1.5s cubic-bezier(0.215, 0.61, 0.355, 1)", "transition-delay": "0.4s" });
               $("#rf").css({ transform: "translate(-100px,25px)", transition: "1.5s cubic-bezier(0.215, 0.61, 0.355, 1)", "transition-delay": "0.6s" });
               $("#hr").css({ transform: "translate(-100px,25px)", transition: "1.5s cubic-bezier(0.215, 0.61, 0.355, 1)", "transition-delay": "0.8s" });
               $(".menu_grad").css({ width: "0% ", transition: "1.8s cubic-bezier(0.075, 0.82, 0.165, 1)", "transition-delay": "0.6s" });
               $(".auth_text").css({ height: "0px", "background-color": "rgba(0,0,0,1)", transform: "", transition: "0.65s cubic-bezier(0.075, 0.82, 0.165, 1)", "transition-delay": "0.4s" });
               $(".auth_text p").fadeOut("normal");
               $(".bot_social_con").css({ width: "0vw", "background-color": "rgba(65,65,65,1)", transition: "1.8s cubic-bezier(0.075, 0.82, 0.165, 1)", "transition-delay": "0.0s" });
               $(".connect").fadeOut("slow");
            }

            $("#du").click(function () {
               exit_animation();
               $(".preloader").delay(500).fadeIn("slow");

               setTimeout(function () {
                  window.location.href = "du/";
               }, 2000);
            });

            $("#pq").click(function () {
               exit_animation();
               $(".preloader").delay(500).fadeIn("slow");
               setTimeout(function () {
                  window.location.href = "index.php";
               }, 2000);
            });

            $("#rf").click(function () {
               exit_animation();
               $(".preloader").delay(500).fadeIn("slow");
               setTimeout(function () {
                  window.location.href = "rf/";
               }, 2000);
            });

            $("#hr").click(function () {
               exit_animation();
               $(".preloader").delay(500).fadeIn("slow");
               setTimeout(function () {
                  window.location.href = "hr/";
               }, 2000);
            });

            $(".auth_text").hover(
               function () {
                  $(this).css({
                        background: "rgba(0,0,0,1)",
                        transition: "3s",
                  });
               },

               function () {}
            );
      </script>

      <main>
            <p class="message">Please view on desktop to see the full layout</p>
            <div class="bm_con" style="width: 100%; height: 100%; position: absolute; z-index: 99; background-color: transparent;">
               <div class="bm_overlay" style="width: 100%; height: 100%; position: absolute; z-index: 99; background-color: transparent;"></div>
               <div class="bookmark" style="">
                  <!--------------------------------Select Country------------------------------------------->
                  <div class="select_con" style="height: 100%;">
                        <div class="flex-container">
                           <div class="bookmark_logo" style="margin: auto; width: 69%; height: 69%;">
                              <img style="width: 100%; height: auto;" src="img/shefull.png" />
                           </div>
                        </div>

                        <div style="height: 50%;">
                           <div class="flex-container" style="margin-top: 15%; height: 35%;">
                              <div class="price_bm" style="margin: auto; width: 50%; text-align: center; color: white;">
                                    <button id="india" class="checkout" style="padding: 15%; width: 100%; height: 30%; font-size: 0.7vw;">INDIA</button>
                              </div>
                           </div>

                           <div class="flex-container" style="height: 35%;">
                              <div class="price_bm" style="margin: auto; width: 50%; text-align: center; color: white;">
                                    <button id="others" class="checkout" style="padding: 15%; width: 100%; height: 30%; font-size: 0.7vw;">OTHERS</button>
                              </div>
                           </div>
                        </div>

                        <div class="flex-container sign" style="height: 25% !important;">
                           <div class="bookmark_logo signature" style=""></div>
                        </div>
                  </div>

                  <!--------------------------------India------------------------------------------->

                  <div class="n_details" style="height: 100%;">
                        <div class="flex-container">
                           <div class="bookmark_logo" style="margin: auto; width: 69%; height: 69%;">
                              <img style="width: 100%; height: auto;" src="img/shefull.png" />
                           </div>
                        </div>

                        <div class="flex-container" style="height: 5%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>₹ <span id="pricess">4500</span></p>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 10%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>
                                    Quantity :
                                    <input
                                       value="1"
                                       id="quantityss"
                                       min="1"
                                       style="outline: 0px solid black; text-align: center; color: white; background-color: rgba(0, 0, 0, 0); width: 15%; border: 0px solid black; border-bottom: 1px solid rgba(255, 255, 255, 0.5);"
                                       type="number"
                                    />
                              </p>
                           </div>
                        </div>

                        <form>
                           <div class="flex-container" style="height: 10%;">
                              <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                                    <p>
                                       <input
                                          id="check_pin"
                                          name="check_pin"
                                          placeholder="Pincode"
                                          style="outline: 0px solid black; text-align: center; color: white; background-color: rgba(0, 0, 0, 0); width: 40%; border: 0px solid black; border-bottom: 1px solid rgba(255, 255, 255, 0.5);"
                                          type="text"
                                       />
                                       <br />
                                       <br />
                                       <button onclick="submit_soap()" type="button" class="check" style="font-size: 0.5vw;">CHECK AVAILABILITY</button>
                                    </p>
                              </div>
                           </div>
                        </form>

                        <div class="flex-container get_av" style="height: 00%;">
                           <div id="json_res" style="margin: auto; width: 100%; text-align: center; color: white;"></div>
                        </div>

                        <div class="flex-container" style="height: 16%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <button id="hide" class="checkout" style="font-size: 0.7vw;">BUY</button>
                              <br />
                              <br />
                              <button id="return_con" class="checkout" style="font-size: 0.5vw;">BACK</button>
                           </div>
                        </div>

                        <div class="flex-container sign">
                           <div class="bookmark_logo signature" style=""></div>
                        </div>
                  </div>

                  <div class="d_details" style="height: 100%;">
                        <div class="flex-container">
                           <div class="bookmark_logo" style="margin: auto; width: 69%; height: 69%;">
                              <img style="width: 100%; height: auto;" src="img/shefull.png" />
                           </div>
                        </div>

                        <div class="flex-container" style="height: 20%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>₹ 4500 X <span id="t_quantityss">1</span></p>
                              <h6></h6>
                              <p>Total Price : ₹ <span id="totalss">4500</span></p>
                              <h6></h6>
                              <p>Free Delivery in India</p>
                              <h6></h6>
                              <p>Delivery Time : 3-5 days</p>
                              <h6></h6>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 25%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <button id="show" class="checkout" style="font-size: 0.7vw;">EDIT</button>
                              <p>&nbsp;</p>
                              <form action="checkout/" method="post" encytype="multipart/form-data">
                                    <input type="text" name="store_quantity" id="store_quantity" value="" hidden />
                                    <input type="text" name="store_total_price" id="store_total_price" value="" hidden />
                                    <button type="submit" name="chkout" class="checkout" style="font-size: 0.7vw;">CHECKOUT</button>
                              </form>
                           </div>
                        </div>

                        <div class="flex-container sign">
                           <div class="bookmark_logo signature"></div>
                        </div>
                  </div>

                  <!--------------------------------Others------------------------------------------->
                  <div class="other_n_details" style="height: 100%;">
                        <div class="flex-container">
                           <div class="bookmark_logo" style="margin: auto; width: 69%; height: 69%;">
                              <img style="width: 100%; height: auto;" src="img/shefull.png" />
                           </div>
                        </div>

                        <div class="flex-container" style="height: 5%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>$ <span id="other_pricess">90</span></p>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 10%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>
                                    Quantity :
                                    <input
                                       value="1"
                                       id="other_quantityss"
                                       min="1"
                                       style="outline: 0px solid black; text-align: center; color: white; background-color: rgba(0, 0, 0, 0); width: 15%; border: 0px solid black; border-bottom: 1px solid rgba(255, 255, 255, 0.5);"
                                       type="number"
                                    />
                              </p>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 15%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>
                                    <select required class="price_bm" id="country_name" name="country_name" style="border: none; background: transparent; color: #fff; text-align: center;">
                                       <option value="">-- Select Country --</option>
                                       <?php
                                 include('dbcon2.php');
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
                              </p>
                              <p>
                                    Shipping Charge : <font style="font-weight: 50;">$ <span name="country_price" id="country_price">0.00</span></font>
                              </p>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 16%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <button type="submit" id="other_hide" class="checkout" style="font-size: 0.7vw;">BUY</button>
                              <br />
                              <br />
                              <button id="return_con_others" class="checkout" style="font-size: 0.5vw;">BACK</button>
                           </div>
                        </div>

                        <div class="flex-container sign">
                           <div class="bookmark_logo signature" style=""></div>
                        </div>
                  </div>

                  <div class="other_d_details" style="height: 100%;">
                        <div class="flex-container">
                           <div class="bookmark_logo" style="margin: auto; width: 69%; height: 69%;">
                              <img style="width: 100%; height: auto;" src="img/shefull.png" />
                           </div>
                        </div>

                        <div class="flex-container" style="height: 15%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <p>$ 90 X <span id="other_t_quantityss">1</span></p>
                              <h6></h6>
                              <p>Total Price : $ <span id="other_totalss">90</span></p>
                              <h6></h6>
                              <p>Delivery Time : 10 - 14 days</p>
                           </div>
                        </div>

                        <div class="flex-container" style="height: 30%;">
                           <div class="price_bm" style="margin: auto; width: 100%; text-align: center; color: white;">
                              <button id="other_show" class="checkout" style="font-size: 0.7vw;">EDIT</button>
                              <p>&nbsp;</p>
                              <form action="others/checkout/" method="post" encytype="multipart/form-data">
                                    <input type="text" name="other_store_con" id="other_store_con" value="" hidden />
                                    <input type="text" name="other_store_quantityss" id="other_store_quantityss" value="" hidden />
                                    <input type="text" name="other_store_totalss" id="other_store_totalss" value="" hidden />
                                    <button type="submit" name="other_chkout" class="checkout" style="font-size: 0.7vw;">CHECKOUT</button>
                              </form>
                           </div>
                        </div>

                        <div class="flex-container sign">
                           <div class="bookmark_logo signature"></div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="slideshow">
               <div class="slide slide--layout-1 slide--current">
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="">
                              <video id="vid" width="100%" height="100%" src="img/5.mp4" type="video/mp4" autoplay muted loop></video>
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="text-align: justify; text-transform: lowercase; font-family: 'Roboto';">
                              She is beautiful, mirror whispered. Light caresses her curvy attire. Silk slips on the cuts and twists of her youthful describe. She arouses the world to the carnal desires. Abandoned unabashedly now she is
                              the dreams of all male eyes. She laughs. She smiles. She understands the hypocrisy of this world. Hiding sins within, they all talk divine. But still her heart aches. Her soul craves. She is loved or her skin
                              is scaled. Only her heart knows what is going on inside. Her soul will smile when her true love arrives..<br />
                              <br />
                              <span style="text-transform: uppercase;">SHE</span> is waiting for your eyes..
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <!-- <figure class="slide__figure">
                  <div class="slide__figure-inner ">
                     <div class="slide__figure-img" style="background-image: linear-gradient(to left ,rgba(255,255,255,0.1),rgba(0,0,0,0.1), rgba(255,255,255,0.1), rgba(0,0,0,0.1),rgba(255,255,255,0.1));transform:scale(2.5,2.5);text-align: justify; font-family: 'Roboto';"></div>
                     <div class="slide__figure-reveal"></div>
                  </div>
                  
                  </figure> -->
                  <span class="slide__number slide__number--left nun">1</span>
                  <span class="slide__number slide__number--right nun">2</span>
               </div>
               <div class="slide slide--layout-2">
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="background-color: rgba(0, 0, 0, 0);">
                              <iframe id="viewer" class="ifr" style="height: 100%; width: 100%; border: 0px solid black;" src="d2/book.php" name="viewer" allowfullscreen allowvr onmousewheel=""> </iframe>
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="text-align: justify; text-transform: lowercase; font-family: 'Roboto';">
                              SHE is so much more, more than these defined mere roles, SHE is more than just a biology, or a gender, or these hypocritical social constructs. SHE id a wonder, a creation that made even the GOD feel proud.
                              SHE is magic, the magic that created the whole universe. SHE is an antithesis to her own existence, SHE is love and hate, SHE is power and soft, SHE is ice and fire, a paradox, a mirage, the sunshine in
                              moonlight. SHE is nit just a rousign seductress, SHE is seduction herself. SHE is not just a word or sentence, SHE is the rhythm, music SHE is a complete story, a yet to be written poetry.<br />
                              <br />
                              turnover and see<br />
                              how <span style="text-transform: uppercase;">SHE</span> looks dipped in ink and spilled..
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="text-align: justify; opacity: 0.3; font-weight: bold; text-transform: lowercase; font-family: 'Roboto';">
                              click and drag the book to interact<br />
                              how <span style="text-transform: uppercase;">SHE</span> looks dipped in ink and spilled..
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <span class="slide__number slide__number--left">3</span>
                  <span class="slide__number slide__number--right">4</span>
               </div>
               <div class="slide slide--layout-3">
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="background-image: url(img/download.png);"></div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="">
                              <button class="buy" style="">MAKE IT YOUR OWN</button>
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="font-family: 'Roboto Condensed', sans-serif;">Price : <b>₹4500 </b></div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="">
                              <button class="hp" style="">HAPPY READERS</button>
                           </div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title"></h3>
                           <p class="slide__figure-description"></p>
                        </figcaption>
                  </figure>
                  <figure class="slide__figure nun">
                        <div class="slide__figure-inner">
                           <div class="slide__figure-img" style="background-image: url();"></div>
                           <div class="slide__figure-reveal"></div>
                        </div>
                        <figcaption>
                           <h3 class="slide__figure-title">Coffee mazagran eu</h3>
                           <p class="slide__figure-description">Breve seasonal frappuccino</p>
                        </figcaption>
                  </figure>
                  <!-- <span class="slide__number slide__number--left">5</span>
                  <span class="slide__number slide__number--right">6</span> -->
               </div>
               <!-- revealer -->
               <div class="revealer">
                  <div class="revealer__item revealer__item--left"></div>
                  <div class="revealer__item revealer__item--right"></div>
               </div>
               <nav class="arrow-nav">
                  <button class="arrow-nav__item arrow-nav__item--prev">
                        TURN BACK
                  </button>
                  <button class="arrow-nav__item arrow-nav__item--next">
                        TURN OVER
                  </button>
               </nav>
               <!-- navigation -->
               <nav class="nav nun">
                  <button class="nav__button">
                        <span class="nav__button-text">index</span>
                  </button>
                  <h2 class="nav__chapter">Riding on a storm</h2>
                  <div class="toc">
                        <a class="toc__item" href="#entry-1">
                           <span class="toc__item-page">01.</span>
                           <span class="toc__item-title">Riding on a storm</span>
                        </a>
                        <a class="toc__item" href="#entry-2">
                           <span class="toc__item-page">03.</span>
                           <span class="toc__item-title">Guidelines for happiness</span>
                        </a>
                        <a class="toc__item" href="#entry-3">
                           <span class="toc__item-page">05.</span>
                           <span class="toc__item-title">Freedom fighter</span>
                        </a>
                        <a class="toc__item" href="#entry-4">
                           <span class="toc__item-page">07.</span>
                           <span class="toc__item-title">Lost and found</span>
                        </a>
                        <a class="toc__item" href="#entry-5">
                           <span class="toc__item-page">09.</span>
                           <span class="toc__item-title">Fantasies of Wood</span>
                        </a>
                  </div>
               </nav>
               <!-- little sides -->
               <div class="slideshow__indicator nun"></div>
               <div class="slideshow__indicator nun"></div>
            </div>
      </main>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/TweenMax.min.js"></script>
      <script src="js/demo.js"></script>
      <script type="text/javascript">
            $(".hp").click(function () {
               $("#hr").trigger("click");
            });

            $(".buy ,.bookmark").click(function () {
               //alert("adsad");

               if (!$(".bookmark").hasClass("open")) {
                  $(".bm_con").css({
                        transform: "scale(1,1) skew(0deg,0deg)",

                        transition: "1.3s cubic-bezier(0.075, 0.82, 0.165, 1)",
                        "transition-delay": "600ms",
                  }),
                        $(".bookmark").addClass("open"),
                        $(".bookmark").css({
                           "border-radius": "0px",

                           transition: "1.1s",
                        }),
                        $(".slideshow").css({
                           cursor: "default",
                        }),
                        $(".slideshow").css({
                           opacity: "0.1",

                           transition: "1.5s ",
                        });
               }
            });

            $(".bm_overlay").click(function () {
               if ($(".bookmark").hasClass("open")) {
                  $(".bm_con").css({
                        transform: "translate(40vw,-85vh)",

                        transition: "0.6s cubic-bezier(0.215, 0.61, 0.355, 1)",
                  }),
                        $(".slideshow").css({
                           filter: "blur(0px)",
                           opacity: "1",

                           transition: "0.8s ",
                           "transition-delay": "200ms",
                        }),
                        $(".bookmark").css({
                           cursor: "pointer",
                           "border-radius": "10px",
                        }),
                        $(".bookmark").removeClass("open");
               }
            });
      </script>

      <script>
            $(".buy").trigger("click");
            $(".bm_overlay").trigger("click");
      </script>
   </body>
</html>