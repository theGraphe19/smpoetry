<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <link href="assets/css/style2.css" rel="stylesheet" />
      <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet" />
      <link id="color-scheme" href="assets/css/mobile.css" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<?php
    include("dbcon.php");
?>
<!--Testimonials-->
<style>
			.testimonial{
			text-align: center;
			}

			.testimonial .pic{
				width: 300px;
				height: 300px;
				border-radius: 50%;
				margin: 0 auto;
			}

			.testimonial .pic img{
				width: 300px;
				height: 300px;
			}

			.testimonial .testimonial-title{
				display: inline-block;
				font-size: 15px;
				font-weight: 600;
				color: #000;
				margin: 0 0 20px 0;
			}

			.testimonial .testimonial-title small{
				font-size: 15px;
				font-weight: 600;
				color: #787878;
			}

			.testimonial .description{
				font-size: 15px;
                font-family: 'Helvetica';
				color: #787878;
				line-height: 27px;
				position: relative;
				margin: 0 0 10px 0;
			}
			.demo
			{
				padding: 0 0 50px 0;
			}
			.heading-title
			{
				margin-bottom: 100px;
			}
			/* .testimonial .description:before{*/
			/*	content: "\f10d";*/
			/*	font-family: 'Font Awesome 5 Free';*/
			/*	width: 35px;*/
			/*	height: 35px;*/
			/*	font-size: 20px;*/
			/*	color: #000;*/
			/*	line-height:33px;*/
			/*} */

			.owl-theme .owl-controls .owl-page span{
				background: #fff;
				border: 2px solid #000;
				opacity: 1;
			}

			.owl-theme .owl-controls .owl-page.active span,
			.owl-theme .owl-controls .owl-page:hover span{
				border: 2px solid gray;
			}
			/* CSS Document */
		</style>
		<script> 
         $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
               items:1,
               itemsDesktop:[1000,1],
               itemsDesktopSmall:[979,1],
               itemsTablet:[768,1],
               pagination:true,
               navigation:false,
               navigationText:["",""],
               slideSpeed:5000,
               singleItem:true,
               transitionStyle:"fade",
               autoPlay:true
            });
         });
		</script>

      
      <section>
         <div class="demo">
            <div class="container">
               <div class="row text-center">
                  <h3 style="color: black; font-family:'Marvel', sans-serif;"><b>testimonials</b></h3>
               </div>
               <br><br>
               <div class="row">
                  <div class="col-md-offset-3 col-md-6">
                     <div id="testimonial-slider" class="owl-carousel">
                        <?php
                           include_once('dbcon.php');
                           $sql = "select * from feedback where status = 1 order by id desc";
                           $result = mysqli_query($connection,$sql);
                           while($row = mysqli_fetch_array($result))
                           {
                        ?>
                        <div class="testimonial">
                           <p class="description">“ <?php echo $row['msg']; ?> ”</p>
                           <h3 class="testimonial-title"><?php echo $row['name']; ?></h3>
                           <?php
                                if(!empty($row['image'])):
                           ?>
                           <div class="pic">
                              <img src="<?php echo $row['image']; ?>" alt=""/>
                           </div>
                           <?php
                                else:
                                endif;
                           ?>
                        </div>
                        <?php
                           }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>