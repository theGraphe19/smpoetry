 <?php
   include('dbcon.php');
   if(isset($_POST['post_cmt']))
   {
      
      $post_id = isset($_POST['post_id']) ? $_POST['post_id'] : '' ;
      $cmt_name = isset($_POST['cmt_name']) ? $_POST['cmt_name'] : '' ;
      $cmt_email = isset($_POST['cmt_email']) ? $_POST['cmt_email'] : '' ;
      $comment = isset($_POST['comment']) ? $_POST['comment'] : '' ;
      
      date_default_timezone_set("Asia/Kolkata");
      $cmt_date = date('d-m-y');
      $cmt_time = date('h:i A');
      $sql2 = "insert into reader_cmmt (reader_id, cmt_date, cmt_time, cmt_name, cmt_email, comment)
               values('$post_id', '$cmt_date', '$cmt_time', '$cmt_name', '$cmt_email', '$comment')";
      mysqli_query($connection,$sql2);
      echo "<script>location.href='index.php'</script>";
   }

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <style type="text/css">
         @font-face {
         font-family: 'VTPortableRemington';
         font-style: normal;
         font-weight: normal;
         src: local('VTPortableRemington'), url('css/vtRemingtonPortable.woff') format('woff');
         }
     
      </style>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Marvel&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel&display=swap" rel="stylesheet">
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SMPOETRY</title>
      <link rel="stylesheet" href="style.css">
      <script src="js/TweenMax.min.js"></script>
      <meta name="author" content="Souparna Das" />
      <link rel="stylesheet" type="text/css" href="css/base.css" />

      <link rel="stylesheet" type="text/css" href="../css/main.css" />
      <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
      <script
         src="https://code.jquery.com/jquery-3.4.1.min.js"
         integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
         crossorigin="anonymous"></script>
      <script type="text/javascript"></script>
      <script type="text/javascript">
         function submit_soap(){
         	var pin = $("#check_pin").val();
                $(".get_av").css({
                   'height':'10%',
                   'line-height':'2.1vh'
                });
                $.get("ship.php", {check_pin:pin},
            function(data){
         	  $("#json_res").html(data);
            });
         }
      </script>
      <script>
         $(document).ready(function(){
            $(".d_details").hide();
         $("#hide").click(function(){
            $(".n_details").hide(500);
            $(".d_details").show(500);
         });
         
         $("#show").click(function(){
            $(".d_details").hide(500);
            $(".n_details").show(500);
         });
         });
      </script>
   </head>
   <body class="loading">
      <div class="copyr">Copyright &#169;  2019, by Shyam Malani. Designed by The Graphē</div>
      <div class=" preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;z-index: 9999999999999999;  background-repeat: no-repeat;background-color: rgba(0,0,0,1); background-position: center;">
         <main role="main" class="main-content" id="main-content">
            <div class="titleCont">
               <h1 class="main-title" id="main-title">
                  "be graceful<br><span style="padding-left:100px">in whichever shape life shapes you</span><br><span style="padding-right:110px">crescent moon taught me this"</span><br><span style="padding-left:-20px;">- s. m.</span>
               </h1>
            </div>
            <canvas id="noise" class="noise"></canvas>
            <div class="vignette"></div>
         </main>
      </div>

      <div class="left_menu">
         <div class="menu_grad">
         </div>
         <div class="top_auth_con ">
           
            <div class="auth_text ">
               <p>SMPOETRY<br/><br/><br/><br/><br/><span>KNOW YOUR AUTHOR</span></p>
            </div>
         </div>
         <div class="nav_con">
            <div class="menu_tile hovere" id="she" >
               <p>SHE<br/><span style="    font-weight: 200; font-size: 0.7vw;">Skin and soul</span></p>
            </div>
            <div class="menu_tile hovere" id="du">
               <p>DEAR YOU<br/><span style="    font-weight: 200; font-size: 0.7vw;">COMING SOON</span></p>
            </div>
            <div class="menu_tile" id="rf">
               <p>writer's forum _<br/><span style="    font-weight: 200; font-size: 0.7vw;">Penned by You</span></p>
            </div>
            <div class="menu_tile hovere" id="hr">
               <p>Happy Readers <br/><span style="    font-weight: 200; font-size: 0.7vw;">Liked by You</span></p>
            </div>
         </div>
         <div class="bot_social_con ">
           
            <div class="icon_con ">
               <!-- <div class="s_icon fb"></div>
               <div class="s_icon insta"></div>
               <div class="s_icon twitter"></div> -->
               <p style="margin:auto;"><a href="mailto:contact@smpoetry.com" class="connect">connect</a></p>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $(".hovere").hover(
         
            function(){
          
               $(this).css({
         
                  "transform":" scale(1.1,1.1)",
                  "transition":"0.3s ",
         
               })
            },
             function(){
         
               $(this).css({
         
                  "transform":" scale(1,1)",
                  "transition":"1.8s cubic-bezier(0.215, 0.61, 0.355, 1)",
            })
          
         });
         
         
         $(".auth_img").css({
         
            'transform':'scale(1,1)',
         
         });
         
         //redirects
         
         
         function exit_animation(){
         
            $("#she").css({'transform':'translate(-100px,25px)','transition':'1.5s cubic-bezier(0.215, 0.61, 0.355, 1)'});
            $("#du").css({'transform':'translate(-100px,25px)','transition':'1.5s cubic-bezier(0.215, 0.61, 0.355, 1)','transition-delay': '0.2s'});
            $("#pq").css({'transform':'translate(-100px,25px)','transition':'1.5s cubic-bezier(0.215, 0.61, 0.355, 1)','transition-delay': '0.4s'});
            $("#rf").css({'transform':'translate(-100px,25px)','transition':'1.5s cubic-bezier(0.215, 0.61, 0.355, 1)','transition-delay': '0.6s'});
            $("#hr").css({'transform':'translate(-100px,25px)','transition':'1.5s cubic-bezier(0.215, 0.61, 0.355, 1)','transition-delay': '0.8s'});  
            $(".menu_grad").css({'width':'0% ','transition':'1.8s cubic-bezier(0.075, 0.82, 0.165, 1)','transition-delay': '0.6s'});
            $(".auth_text").css({'height':'0px','background-color':'rgba(0,0,0,1)','transform':'','transition':'0.65s cubic-bezier(0.075, 0.82, 0.165, 1)','transition-delay': '0.4s'});
             $(".auth_text p").fadeOut('normal');
            $(".bot_social_con").css({'width':'0vw','background-color':'rgba(65,65,65,1)','transition':'1.8s cubic-bezier(0.075, 0.82, 0.165, 1)','transition-delay': '0.0s'});
         $(".connect").fadeOut('slow');
               
         
         }
         
         
         
         
         $("#du").click(function(){
            exit_animation();
            $('.preloader').delay(500).fadeIn('slow');


            setTimeout(function() {
               
                  window.location.href = "../du/";
               }, 2000);
         });
         
         $("#pq").click(function(){
            exit_animation();
            $('.preloader').delay(500).fadeIn('slow');
            setTimeout(function() {
               window.location.href = "index.php";
            }, 2000);
         });
         
         $("#she").click(function(){
            exit_animation();
            $('.preloader').delay(500).fadeIn('slow');
            setTimeout(function() {
               window.location.href = "../";
            }, 2000);
         });
         
         $("#hr").click(function(){
            exit_animation();
            $('.preloader').delay(500).fadeIn('slow');
            setTimeout(function() {
               window.location.href = "../hr/";
            }, 2000);
         });
         
         
         $(".auth_text").hover(function(){
            
               
               $(this).css({
                  "background":"rgba(0,0,0,1)",
                  "transition":"3s",
               })
         
               },
             
            function(){
         
               
            
               
         
         });
         
         
         
         
      </script>




      <main>
         <div class="bm_con" style="width: 100%;height: 100%;position:absolute;z-index:99;background-color: transparent;">
            <div class="bm_overlay" style="width: 100%;height: 100%;position:absolute;z-index:99;background-color: transparent;"></div>
               <div class="bookmark" style="border-radius:10px; ">
                  <form id="readerForm" enctype="multipart/form-data">
                     <div class="form_container" style="display:none;width:100%;" >
                        <div class="flex-container" style="width:100%;padding-top:5vh;opacity:0.2;letter-spacing:0.1vw;padding-bottom:4vh;" >
                           <p style="margin:auto;text-align: right;color:white;text-transform: uppercase;font-weight:bold;" >Pen down a few lines</p>
                        </div>
                        <div class="flex-container" style="width:100%;padding-top: 1vh;padding-bottom: 1vh;" >
                           <p style="margin:auto;text-align: center;color:white;text-transform: uppercase;font-weight:bold;" >Name
                              <input type="text" placeholder="Let us know you" id="name" name="name" class="form-control words_input" required data-error="NEW ERROR MESSAGE"/>
                           </p>
                           <p style="margin:auto;text-align: center;color:white;text-transform: uppercase;font-weight:bold;">Email
                              <input type="email" placeholder="your email" id="email" name="email" class="form-control words_input" required>
                           </p>
                        </div>
                        <div class="flex-container" style="width:100%;padding-top: 4vh;padding-bottom: 4vh;" >
                           <p style="margin:auto;text-align: center;color:white;text-transform: uppercase;font-weight:bold;" >City & Country<br/><br/>
                              <input type="text" placeholder="City,Country" id="city" name="city" class="form-control words_input" required data-error="NEW ERROR MESSAGE"/>
                           </p>
                        </div>
                        <div class="flex-container" style="width:100%;padding-top: 1vh;padding-bottom: 1vh;" >
                           <p style="width: 77%;margin:auto;text-align: center;color:white;text-transform: uppercase;font-weight:bold;"> your words<br/><br/>
                              <textarea style="width: 100%;height: auto;min-height: 1vh;background:rgba(255,255,255,0.1);text-align: center;outline:0px;border:0px;padding-top: 3%;
                                 color:white;" placeholder="Your words .... our canvas" class="form-control" id="words" rows="5" name="words" required></textarea>
                           </p>
                        </div>
                        <div class="flex-container" style="width:100%;padding-top: 1%;padding-bottom: 1%;" >
                           <p style="width: 77%;margin:auto;text-align: center;color:white;text-transform: uppercase;font-weight:bold;"> 
                              <input type="submit" style="background-color:rgba(255,255,255,0.1);border:0px solid black;
                                 color:white;width:100%;font-size:0.7vw;padding-top:5%;   transition: 200ms;padding-bottom:5%;letter-spacing: 0.5vw" id="send" name="submit" 
                                 class="btn btn-lg btnstyle submit_words" value="CONTRIBUTE"/>
                           </p>
                        </div>
                     </div>
                     <div class="label_bookmark">
                        <div class="flex-container label_book_" style="width:100%;margin-top:260%;padding-top: 1%;padding-bottom: 8%;" >
                           <p style="width: 77%;margin:auto;text-align: center;color:black;text-transform: uppercase;font-weight:bold;"> 
                              |
                           </p>
                        </div>
                        <div class="flex-container label_book" style="width:100%;padding-top: 0%;padding-bottom: 1%;" >
                           <p style="width: 77%;margin:auto;text-align: center;color:black;text-transform: uppercase;font-weight:bold;"> 
                              Submit your thoughts
                           </p>
                        </div>
                     </div>
                  </form>
                  <div class="statmsg" style="text-align: center;"></div>
               </div>
            </div>
         </div>
         <script>
            $(document).ready(function(e){
                  // Submit form data via Ajax
                  $("#readerForm").on('submit', function(e){
                     e.preventDefault();
                     $.ajax({
                        type: 'POST',
                        url: 'reader.php',
                        data: new FormData(this),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        beforeSend: function(){
                              $('.submitBtn').attr("disabled","disabled");
                              $('#readerForm').css("opacity",".5");
                        },
                        success: function(response){ //console.log(response);
                              $('.statmsg').html('');
                              if(response.status == 1){
                                 $('#readerForm')[0].reset();
                                 $('.statmsg').html('<p style="color: #fff; font-family: Helvetica, sans-serif; font-size: 14px; margin-top: -10px;">'+response.message+'</p>');
                              }else{
                                 $('.statmsg').html('<p style="color: #fff; font-family: Helvetica, sans-serif; font-size: 14px; margin-top: -10px;">'+response.message+'</p>');
                              }
                              $('#readerForm').css("opacity","");
                              $(".submitBtn").removeAttr("disabled");
                        }
                     });
                  });
            });
         </script>


         <div class="slideshow">


            <div class="slide slide--layout-1 slide--current">
               
               <figure class="slide__figure">
                  <div class="slide__figure-inner ">
                     <div class="slide__figure-img" style="text-align: justify; line-height:3vh;text-transform:lowercase; ">
                       Have we ever thought that a mere combination of minuscule alphabets can create the music that can make our soul feel solaced? Without musical instruments, without rhyming, without even matching syllables, away from rustling winds, or gurgling rivers, in the deepest of silence, there can be music. The kind of music to be heard only by our soul.

If we orchestrate an exquisite display of words, manicure the silence in between, let them flow free, with the tempo of our thoughts, close our eyes, and allow our lips to feel every word forming deep inside us, we can see the divine, and call it “music of soul”.
Call it poetry.

I invite you here to play with words and create music, yes write a poem and I will feature it on my website. 


                       <br/> <br/> <span style="font-family: 'VTPortableRemington';text-transform: lowercase;font-size:1.1vw !important;">- s.m.</span> 
                     </div>
                     <div class="slide__figure-reveal"></div>
                  </div>
                  <figcaption>
                     <h3 class="slide__figure-title"></h3>
                     <p class="slide__figure-description"></p>
                  </figcaption>
               </figure>

                <figure class="slide__figure">
                  <div class="slide__figure-inner ">
                     <div class="slide__figure-img" style="text-align: justify; line-height:3vh;text-transform:lowercase; ">
                         
                         <button class="read" style=" ">SUBMIT</button>

                      
                     </div>
                     <div class="slide__figure-reveal"></div>
                  </div>
                  <figcaption>
                     <h3 class="slide__figure-title"></h3>
                     <p class="slide__figure-description"></p>
                  </figcaption>
               </figure>
             
               <span class="slide__number slide__number--left nun">1</span>
               <span class="slide__number slide__number--right nun">2</span>
            </div>


            <script>
               
               $(".read").click(function(){



                  $(".bookmark").trigger('click');


               })


            </script>








            <?php
               include_once('dbcon.php');
               $slide = 2;
               $sql = "select * from reader order by id desc";
               $result = mysqli_query($connection,$sql);
               while($row = mysqli_fetch_array($result))
               {
                  $post_id = $row['reader_id'];
            ?>
            <div class="nun slide slide--layout-<?php echo $slide; ?>">




                <figure class="slide__figure">
                  <div class="slide__figure-inner ">
                     <div class="slide__figure-img" style="text-align: justify; line-height:3vh;text-transform:lowercase; ">
                         
                       
               
                     <p><?php echo $row['message']; ?></p>
                     <h5><strong><?php echo $row['name']; ?></strong></h5>
                     <h5><i><?php echo $row['city']; ?></i></h5>
                
                  
               

                      
                     </div>
                     <div class="slide__figure-reveal"></div>
                  </div>
                  <figcaption>
                     <h3 class="slide__figure-title"></h3>
                     <p class="slide__figure-description"></p>
                  </figcaption>
               </figure>



            </div>
            <?php
                  $slide = $slide + 1;
               }
            ?>

            <!-- revealer -->
            <div class="revealer">
               <div class="revealer__item revealer__item--left"></div>
               <div class="revealer__item revealer__item--right"></div>
            </div>
            <nav class="arrow-nav nun">
               <button class="arrow-nav__item arrow-nav__item--prev">
                  TURN BACK
                  <svg class="icon icon--nav">
                     <use xlink:href="#icon-nav"></use>
                  </svg>
               </button>
               <button class="arrow-nav__item arrow-nav__item--next">
                  TURN OVER
                  <svg class="icon icon--nav">
                     <use xlink:href="#icon-nav"></use>
                  </svg>
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
         $(".label_bookmark").hover(
            function() {
            
                $(".bookmark").css({'box-shadow':'15px 16px 10px rgba(0,0,0,0.2)','transition':' 0.5s '}),
               $(".label_book_").css({'transform':'scale(1,3.5)','transition':'transform 0.5s cubic-bezier(1, 0, 0, 1)'}),
               $(".label_book").css({'transform':'translateY(10px)','transition':'transform 0.5s cubic-bezier(1, 0, 0, 1)'})
         
            
            }, function() 
            {
              $(".bookmark").css({'box-shadow':'10px 10px 10px rgba(0,0,0,0.2)','transition':' 0.5s '}),
              $(".label_book_").css({'transform':'scale(1,1)','transition':'transform 0.5s cubic-bezier(1, 0, 0, 1)'}),
               $(".label_book").css({'transform':'skewX(00deg)','transition':'transform 0.5s cubic-bezier(1, 0, 0, 1)'})
               
               
         
            
            }
         );
          
         
         
         
         
         
         
         
         
         
         
         
                  $(".hp").click(function(){
                  
                  
                  $("#hr").trigger('click');
                  
                  });
                  
                  
                   	
                   $(".buy ,.bookmark,.label_bookmark").click(function(){
                  
                   	
                   	//alert("adsad");
                  
                   if(!$(".bookmark").hasClass("open"))	
                   {
                   	$(".bm_con").css({
                  
                   		'transform':'skew(0deg,0deg)',
                  
                  
                   		'transition':'1.3s cubic-bezier(0.075, 0.82, 0.165, 1)',
                   		'transition-delay':'600ms'
                  
                  
                  
                  
                  
                  
                   	}),
                  
                   	$(".bookmark").addClass("open"),
                  
                  
                   	$(".bookmark").css({
                        
                        'width':'60%',
                        'left':'20%',
                   		
                   			
                  
                  		'transition':'1.1s',
                        'transition-delay':'800ms'
                  
                  
                  
                   	}),
         
                     $(".form_container").delay(1200).fadeIn(1200),
                  
         
                     $(".label_bookmark").fadeOut(100),
                  
                   	$(".slideshow").css({
                  
                   		'cursor':'default'
                  
                  
                  
                   	}),
                  
                   	$(".slideshow").css({
                  
                   		
                   		'opacity':'0.1',
                  
                   		
                   		'transition':'1.5s '
                  
                  
                  
                  
                  
                   	});
                  
                  }
                  
                  
                  
                   });
                  
                   $(".bm_overlay").click(function(){
                  
                   if($(".bookmark").hasClass("open"))	
                   {
         
         
                      $(".form_container").fadeOut(200),
                     $(".bookmark").css({
         
                        'width':'16%',
                        'left':'42%',
                        
                        'cursor':'pointer',
                        'border-radius':'10px'
                        
                  
                  
                     }),
                  
                  
                   	$(".bm_con").css({
                  
                   		'transform':'translate(40vw,-85vh)',
                        
                   		'transition':'0.6s cubic-bezier(0.215, 0.61, 0.355, 1)'
                  
                  
                  
                  
                  
                  
                   	}),
                  
                   	$(".slideshow").css({
                  
                   		
                   		'opacity':'1',
                   		
                   		'transition':'0.8s ',
                   		'transition-delay':'200ms'
                  
                  
                  
                  
                  
                   	}),
                  
         
                  
                     $(".label_bookmark").delay(500).fadeIn(500),
                  
                  
                  
                   	$(".bookmark").removeClass("open");
                  
                  
                   }
                  
                  
                  
                  
                   });
                  
                  
               
      </script>
   </body>
</html>