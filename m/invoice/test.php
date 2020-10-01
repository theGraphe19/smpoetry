<!--//     $apikey = '3e23db05-67cb-47b5-886b-e551c0447cfa';-->
<!--//     $value = 'https://smpoetry.com/invoice/test2.php'; // can aso be a url, starting with http..-->
     
<!--//     // Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5-->
<!--//     $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));-->
     
<!--//     // Save to root folder in website-->
<!--//     file_put_contents('mypdf-1.pdf', $result);-->

<?php
    $apikey = '3e23db05-67cb-47b5-886b-e551c0447cfa';
$value = 'https://smpoetry.com/invoice/test2.php'; // can aso be an HTML string
  
// Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string in $value use POST rather than get.  See example #5
$result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value) . "&OutputFormat=jpg");
 
// Save to website folder - you can then stream to the user as a thumb or full size image
file_put_contents('my_image.jpg', $result);
?>
