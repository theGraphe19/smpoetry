<?php
include('dbcon.php');
?>
<html>

<head>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script> 
	<meta charset="utf-8">

	<title>Order ID</title>


	<style>
		* {
			border: 0;
			box-sizing: content-box;
			color: inherit;
			font-family: inherit;
			font-size: 12px;
			font-style: inherit;
			font-weight: inherit;
			line-height: inherit;
			list-style: none;
			margin: 0;
			padding: 0;
			text-decoration: none;
			vertical-align: middle;
		}

		/* content editable */

		*[] {
			border-radius: 0.25em;
			min-width: 1em;
			outline: 0;
		}

		*[] {
			cursor: pointer;
		}

		span[] {
			display: inline-block;
		}

		/* heading */

		h1 {
			font: bold 100% sans-serif;
			letter-spacing: 0.5em;
			text-align: center;
			text-transform: uppercase;
		}

		/* table */

		table {
			font-size: 75%;
			table-layout: fixed;
			width: 100%;
		}

		table {
			border-collapse: separate;
			border-spacing: 0px;
		}

		th,
		td {
			border-width: 0px;
			padding: 0.9em;
			position: relative;
		}

		th,
		td {
			border-radius: 0em;
			border-style: solid;
		}

		th {
			background: #EEE;
			border-color: #BBB;
		}

		td {
			border-color: #DDD;
		}

		/* page */

		html {
			font: 16px/1 'Open Sans', sans-serif;
			overflow: auto;
			padding: 0.5in;
		}

		html {
			background: #999;
			cursor: default;
		}

		body {
			box-sizing: border-box;
			height: 11in;
			margin: 0 auto;
			overflow: hidden;
			padding: 0.75in;
			width: 8.5in;
		}

		body {
			background: #FFF;
			border-radius: 1px;
			box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
		}

		/* header */

		header {
			margin: 0 0 2em;
			text-align: center;
		}

		header:after {
			clear: both;
			content: "";
			display: table;
		}

		header h1 {
			background: #000;
			border-radius: 0.25em;
			color: #FFF;
			margin: 0 0 1em;
			padding: 0.5em 0;
		}

		header address {
			float: left;
			font-size: 75%;
			font-style: normal;
			line-height: 1.25;
			margin: 0 1em 1em 0;
		}

		header address p {
			margin: 0 0 0.25em;
		}

		header span,
		header img {
			display: block;
		}

		header span {
			margin: 0 0 1em 1em;
			max-height: 25%;
			max-width: 60%;
			position: relative;
		}

		header img {
			max-height: 40%;
			max-width: 40%;
		}

		header input {
			cursor: pointer;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
			height: 100%;
			left: 0;
			opacity: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}



		/* footer */

		footer {
			position: relative;
			bottom: 0%;
			background: #e3e4e0;
			margin: 0 0 3em;
			font-size: 75%;
		}

		footer:after {
			clear: both;
			content: "";
			display: table;
		}

		footer p {
			line-height: 140%;
			border-radius: 0.25em;
			color: black;
			padding: 0.5em 0;
		}

		footer address {
			float: left;
			font-size: 75%;
			font-style: normal;
			line-height: 1.25;
			margin: 0 1em 1em 0;
		}

		footer address p {
			margin: 0 0 0.25em;
		}

		footer span,
		footer img {
			display: block;
			float: left;
		}

		footer span {
			margin: 0 0 1em 1em;
			max-height: 25%;
			max-width: 60%;
			position: relative;
		}











		/* article */

		article,
		article address,
		table.meta,
		table.inventory,
		table.sign {
			margin: 0 0 2em;
		}


		article:after {
			clear: both;
			content: "";
			display: table;
		}

		article h1 {
			clip: rect(0 0 0 0);
			position: absolute;
		}

		article address {
			margin-left: 1.6%;
			float: left;
			font-size: 95%;
			font-weight: bold;
			width: 60%;
		}

		/* table meta & balance */

		table.meta {
			float: right;
			width: 36%;
		}

		table.balance {
			margin-top: 00%;
			float: right;
			width: 100%;
		}

		table.meta:after,
		table.balance:after {
			clear: both;
			content: "";
			display: table;
		}

		/* table meta */

		table.meta th {
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
			width: 40%;
			background-color: #e3e4e0;
			margin: 0px;
		}

		table.meta td {
			width: 60%;
		}

		/* table sign */


		table.sign th {
			text-align: right;
			width: 40%;
			background-color: rgba(0, 0, 0, 0);
			margin: 0px;
		}

		table.sign td {
			width: 60%;
		}



		table.sign {
			float: right;
			width: 36%;
			padding: 0px;
		}

		table.sign:after {
			clear: both;
			content: "";
			display: table;
		}







		/* table items */

		table.inventory {
			clear: both;
			width: 100%;
		}

		table.inventory th {
			border-right: 1px solid rgba(0, 0, 0, 0.1);
			font-weight: bold;
			background-color: #e3e4e0;
		}

		table.inventory td {
			border-right: 1px solid rgba(0, 0, 0, 0.1);
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		}

		table.inventory td:nth-child(1) {
			width: 26%;
			background-color: rgba(0, 0, 0, 0);
		}

		table.inventory td:nth-child(2) {
			width: 38%;
		}

		table.inventory td:nth-child(3) {
			text-align: center;
			width: 12%;
		}

		table.inventory td:nth-child(4) {
			text-align: right;
			width: 12%;
		}


		/* table balance */

		table.balance th,
		table.balance td {}

		table.balance th {
			text-align: left;
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
			background-color: #e3e4e0;
		}

		table.balance td {
			text-align: right;
		}

		/* aside */

		aside h1 {
			border: none;
			border-width: 0 0 0px;
			margin: 0 0 0em;
		}

		aside h1 {
			border-color: #999;
			border-bottom-style: solid;
		}

		/* javascript */


		@media print {
			* {
				-webkit-print-color-adjust: exact;
			}

			html {
				background: none;
				padding: 0;
			}

			body {
				box-shadow: none;
				margin: 0;
			}

			span:empty {
				display: none;
			}

		}

		@page {
			margin: 0;
		}
	</style>
</head>

<body class="demo">
  

	<?php   
	    
			$o = '26907'; //$_SESSION['order_id'];
			$sql = "select * from order_details where order_id = $o";
			$result = mysqli_query($connection,$sql);
			while($row = mysqli_fetch_array($result))
			{
		?>

		<form class="form">
			<header>
				<h1>SMPOETRY</h1>

			</header>
			<article>
				<h1>Recipient</h1>

				<address>
					<p style="font-size: 11px;color: rgba(0,0,0,0.6);">Billed to : <font style="color: #000; font-size: 13px;"><?php echo $row['bill_name']; ?></font>
					<p style="font-size: 11px;color: rgba(0,0,0,0.6);">Phone No : <font style="color: #000; font-size: 13px;"><?php echo $row['bill_tel']; ?></font></p>
					<p style="font-size: 11px;color: rgba(0,0,0,0.6);">Email : <font style="color: #000; font-size: 13px;"><?php echo $row['bill_email']; ?></font></p>
					<p style="font-size: 11px;color: rgba(0,0,0,0.6);">Address : 
						<font style="color: #000; font-size: 13px;">
							<?php echo $row['bill_address'].", ".$row['bill_city'].", ".$row['bill_state'].", ".$row['bill_country']; ?>
						</font>
					</p>
					<p style="font-size: 11px;color: rgba(0,0,0,0.6);">Zip Code : <font style="color: #000; font-size: 13px;"><?php echo $row['bill_zip']; ?></p>
				</address>
				<table class="meta">
					<tr>
						<th><span>Invoice No.</span></th>
						<td align="right"><span><?php echo $o; ?></span></td>
					</tr>
					<tr>
						<th><span>Date</span></th>
						<td align="right"><span><?php echo $row['order_date']; ?></span></td>
					</tr>
					<tr>

					</tr>
				</table>
				<table class="inventory" cellspacing="0px" cellpadding="0px">
					<thead>
						<tr>
							<th colspan="2" style="border-left:1px solid rgba(0,0,0,0.1);" align="left">
								<span>Description</span>
							</th>
							<th><span>Quantity</span></th>
							<th><span>Rate</span></th>
							<th align="right"><span>Amount</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="border-left:1px solid rgba(0,0,0,0.1);" colspan="2"><span><img style="width:80%;"
										alt="" src="PNG2.jpg"></span><br /><br />
								<p>Coffee Table poetry book</p><br><span>SHE: SKIN AND SOUL</span>
							</td>

							<td align="center"><span data-prefix></span><span><?php echo $row['quantity']; ?></span></td>
							<td align="center"><span>$ 90.00</span></td>
							<td align="right"><span data-prefix>$</span><span><?php echo $row['total_price']; ?></span></td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td style="border-left:1px solid rgba(0,0,0,0.1);" colspan="2"><span><img style="width:80%;"
										alt="" src="she bookmark-01.png"></span><br /><br />
								<p>Author signed</p><br><span>bookmark</span>
							</td>

							<td align="center"><span data-prefix></span><span><?php echo $row['quantity']; ?></span></td>
							<td align="center"><span>Free</span></td>
							<td align="right"><span>Free</span></td>
						</tr>
					</tbody>
				</table>


				<table class="sign">
					<tr>
						<th colspan="2"><span><img style="width:50%;" alt="" src="signature.png"></span></th>
					</tr>
					<tr>
						<th colspan="2"><span>For smpoetry</span></th>
					</tr>
					<tr>

					</tr>
				</table>




				<table class="balance">
					<tr>
						<th colspan="2"><span>Delivery Charge</span></th>
						<td colspan="3"><span data-prefix>$</span><span><?php echo $row['delivery_price']; ?></span></td>
					</tr>
					<tr>
						<th colspan="2"><span>Total</span></th>
						<td colspan="3"><span data-prefix>$</span><span><?php echo $row['total_price']; ?></span></td>
					</tr>
					<tr>
						<th colspan="2"><span>Transaction ID</span></th>
						<td colspan="3"><span><?php echo $row['tid']; ?></span></td>
					</tr>
				</table>
			</article>
			<footer style="">
				<center>
					<p>
						Flat 18A, Block 2,Silver Spring,5 JBS Halden Avenue,
						Kolkata: 700105</p>
				</center>
			</footer>
		</form>
		

    <input type="button" id="create_pdf" value="Generate PDF" onclick="myFunction()" hidden>  


<script>  
        (function () {  
            var  
             form = $('.form'),  
             cache_width = form.width(),  
             a4 = [595.28, 841.89]; // for a4 size paper width and height  
      
            $('#create_pdf').on('click', function () {  
                $('body').scrollTop(0);  
                createPDF();  
            });  
            //create pdf  
            function createPDF() {  
                getCanvas().then(function (canvas) {  
                    var  
                     img = canvas.toDataURL("image/png"),  
                     doc = new jsPDF({  
                         unit: 'px',  
                         format: 'a4'  
                     });  
                    doc.addImage(img, 'JPEG', 20, 20);  
                    doc.save('smpoetry_receipt_<?php echo $row["order_id"] ?>.pdf');  
                    form.width(cache_width);  
                });  
            }  
      
            // create canvas object  
            function getCanvas() {  
                form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
                return html2canvas(form, {  
                    imageTimeout: 2000,  
                    removeContainer: true  
                });  
            }  
      
        }());  
    </script>  
    <script>  
        /* 
     * jQuery helper plugin for examples and tests 
     */  
        (function ($) {  
            $.fn.html2canvas = function (options) {  
                var date = new Date(),  
                $message = null,  
                timeoutTimer = false,  
                timer = date.getTime();  
                html2canvas.logging = options && options.logging;  
                html2canvas.Preload(this[0], $.extend({  
                    complete: function (images) {  
                        var queue = html2canvas.Parse(this[0], images, options),  
                        $canvas = $(html2canvas.Renderer(queue, options)),  
                        finishTime = new Date();  
      
                        $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                        $canvas.siblings().toggle();  
      
                        $(window).click(function () {  
                            if (!$canvas.is(':visible')) {  
                                $canvas.toggle().siblings().toggle();  
                                throwMessage("Canvas Render visible");  
                            } else {  
                                $canvas.siblings().toggle();  
                                $canvas.toggle();  
                                throwMessage("Canvas Render hidden");  
                            }  
                        });  
                        throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                    }  
                }, options));  
      
                function throwMessage(msg, duration) {  
                    window.clearTimeout(timeoutTimer);  
                    timeoutTimer = window.setTimeout(function () {  
                        $message.fadeOut(function () {  
                            $message.remove();  
                        });  
                    }, duration || 2000);  
                    if ($message)  
                        $message.remove();  
                    $message = $('<div ></div>').html(msg).css({  
                        margin: 0,  
                        padding: 10,  
                        background: "#000",  
                        opacity: 0.7,  
                        position: "fixed",  
                        top: 10,  
                        right: 10,  
                        color: '#fff',  
                        fontSize: 12,  
                        borderRadius: 12,  
                        width: 'auto',  
                        height: 'auto',  
                        textAlign: 'center',  
                        textDecoration: 'none'  
                    }).hide().fadeIn().appendTo('body');  
                }  
            };  
        })(jQuery);  
      
    </script>

    <script type="text/javascript"> 
        $(document).ready(function(){ 
        $('#create_pdf').trigger('click'); 
        });
    </script>

	<?php
			}
			
			
		?>
		</body>
</html>