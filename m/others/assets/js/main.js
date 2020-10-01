$(document).ready(function(){
    

        $("#add").click(function(){
          

                       var q=document.getElementById("newquant").value;
                       var w=document.getElementById("country_name").value;
                       var p=document.getElementById("country_price").innerHTML;
                  

   $.post("cart_details.php", {

                           
                              action:"add",
                              code:"45",
                              quantity:q,
                              price:"90",
                              name:"she",
                              country_name : w,
                              country_price : p

                 




                         }, function(data){
                              
                        
                              });





 $(".book_icon").trigger('click');




              });







//       $("#lpane").hover(function(){
//       $(".menu-shadow").css({"transform": "skewX(0deg)","background-color":"#ffed08","width":"5vw"}),
//       $("#menu-sym").css({"transform": "translateX(-5.2vw)","color":"black"}),
//       $(".menu-hr").css({"width": "0vw","": ""}),
//       $("#lpane").css({"width": "6.5%","": ""});
  

//       }, 



//       function(){

      
//       $(".menu-shadow").css({"transform": "skewX(40deg)","background-color":"white","width":"1vw"}),
//       $(".menu-hr").css({"width": "5vw","": ""}),
//       $("#menu-sym").css({"transform": "translateX(0px)","": ""}),
//       $(".section").css({
                  
//                   "transform": "translateX(0vw)",
                  

//             }),
//       $(".glogo").css({
                  
//                   "transform": "scale(1,1)",
                  

//             }),
//       $("#scroll-sym").css({
                  
//                   "transform": "scale(1,1)",
                  

//             }),

//       $("#menucon").fadeOut(0),

//       $("#lpane").css({"width": "2.5%","": ""});
// });











		$(".book_icon").click(function(){
			
			




$("#load,#load_mob").load("cart_details.php"),




			$("#lpane").css({
                  
                  "width": "45vw",

                  

            }),
      $("#lpane_mob").css({
                  
                  "width": "85vw",

                  

            }),
			

		
			$(".overlays").css({
                  
                  "display":"block",
                  "opacity":"0.9"

                  

            }),


$("#load_mob").fadeIn(500),

$("#load").fadeIn(500);



            });



























});