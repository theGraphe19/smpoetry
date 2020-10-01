<head>
     <style>
       .flex-row {
        display: flex;
        flex-wrap: wrap;
    }
    .flex-row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    .flex-row.row:after, 
    .flex-row.row:before {
        display: flex;
    }</style>
   <style>
      @media only screen and (orientation: portrait) {
      .close_cart{
      z-index:100;
      position:absolute; 
      left:3vw; top: 3vw; 
      width: 3vw; 
      opacity: 1vw; 
      height: 3vw; 
      background-size: 100% 100%; 
      background-image: url('assets/images/close.png');
      }
      }
      @media only screen and (orientation:landscape) {
      .close_cart{
      z-index:100;
      position:absolute; 
      left:1vw; top: 1vw; 
      width: 1.2vw; 
      opacity: 1vw; 
      height: 1.2vw; 
      background-size: 100% 100%; 
      background-image: url('https://smpoetry.com/m/assets/images/close.png');
      }
      }
   </style>
</head>
<script type="text/javascript">
   $(".close_cart,.overlays").click(function(){
   
       
   $("#load,#load_mob").fadeOut(10),
         
         $("#lpane,#lpane_mob").css({
               
               "width": "0vw",
               
                
   
         })  ,
   
   
         $(".overlays").css({
   
               "opacity":"0",
               "display":"none"
   
   
         })
   
   
   
   
   
   
   
   });
</script>
<?php
   session_start();
   require_once("dbcontroller.php");
   $db_handle = new DBController();
   
   if(!empty($_POST["action"])) {
   switch($_POST["action"]) {
       case "add":
        if(!empty($_POST["quantity"])) {
               $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_POST["code"] . "'");
               $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$_POST["price"], 'image'=>'assets/images/PNG.jpg'));
               
               if(!empty($_SESSION["cart_item"])) {
                   if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                       foreach($_SESSION["cart_item"] as $k => $v) {
                               if($productByCode[0]["code"] == $k) {
                                   if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                       $_SESSION["cart_item"][$k]["quantity"] = 0;
                                   }
                                    
                                    $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                                    
                               }
                       }
                   } else {
                       $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                   }
               } else {
                   $_SESSION["cart_item"] = $itemArray;
               }

                $o = date('s') + rand('111', '99999') + rand('11111', '22222');
                $order_id = $o;
                $_SESSION['order_id'] = $order_id;

                $c = rand('11111', '22222').date('s') + rand('111', '99999');
                $customer_id = $c;
                $_SESSION['customer_id'] = $customer_id;

           }
       break;
       case "remove":
           if(!empty($_SESSION["cart_item"])) {
               foreach($_SESSION["cart_item"] as $k => $v) {
                       if($_GET["code"] == $k)
                           unset($_SESSION["cart_item"][$k]);              
                       if(empty($_SESSION["cart_item"]))
                           unset($_SESSION["cart_item"]);
               }
           }
       break;
       case "empty":
           unset($_SESSION["cart_item"]);
       break;  
   }
   }
    
   ?>
<div class="close_cart" style=""></div>
<div class="cart_con container" style="height:100vh;width: 100%;top:0%;">
<?php
   if(isset($_SESSION["cart_item"])){
       $total_quantity = 0;
       $total_price = 0;
   ?>
<?php       
   foreach ($_SESSION["cart_item"] as $item)
   {
   
   
       $item_price = $item["quantity"]*$item["price"];
       //echo "<script>alert('".$item_price."');</script>";
       ?>
<div class="container" style="padding-left:5vw;padding-right:5vw;width: 100%;top:0%;">
   <div class="row cart_prod" style="margin-top: 15vh;">
      <div class="col-md-6 cart_prod_icon">
         <img style="width:30vh;" src= "<?php echo $item["image"];?>" alt="">
      </div>
      <div class="col-md-4 cart_prod_det">
         <p><b>Quantity : </b><?php echo $item["quantity"]; ?></p>
         <p><b>Price : </b>₹ <?php echo $item['price']; ?> <span style="font-size: 1rem">X</span> <?php echo $item["quantity"]; ?></p>
         <p><b>Delivery :</b> Free</p>
         <p><b>ETD :</b> 3 - 5 days</p>
      </div>
      <div class="col-md-2 text-center">
         <a id="clear" class="align-middle" href="order_book.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
         <img src="https://smpoetry.com/m/assets/images/icon-delete.png" alt="Remove Item" />
         </a>
      </div>
   </div>
   <div class="cart_footer text-center" style="
      border-top:0.1rem solid rgba(0,0,0,0.2);bottom: 0px;width: 100%;padding-top:3vh;margin-top:10vh;padding-bottom:3vh;">
      
      <div class="col-md-7" style="padding-top:3%;padding-bottom:3%;height:100%;" >
          
         <p class="" style="vertical-align:middle;margin:0px;"><b>Total : </b><?php echo "₹  ". number_format($item_price,2); ?></p>
      </div>
      
        <div class="col-md-5"><form action="checkout.php" method="post">
        <input type="text" name="quant" value="<?php echo $item["quantity"]; ?>" hidden>
        <input type="text" name="total_price" value="<?php echo $item_price; ?>" hidden>
         <button type="submit" id="checkout" name="chkout" class="btn btn-lg btnstyle">CHECKOUT</button>
         </form></div>
     
   </div>
   <?php
      $total_quantity += $item["quantity"];
      $total_price += ($item["price"]*$item["quantity"]);

      $_SESSION['t_quantity'] = $total_quantity;

      $_SESSION['t_price'] = $total_price;
      
      }
      ?>
   <?php
      }
      else
      {
      ?>
   <div class="row extra text-center align-middle" style="">
      <p class="no-records" style="margin-top:45vh;opacity:0.4;font-size: 1.3vw;">Your Cart is Empty</p>
   </div>
   <?php 
      }
      ?>
</div>