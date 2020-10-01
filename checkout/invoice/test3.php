<?php
    session_start();
    
    $o = $_SESSION['order_id'];
    
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<form method="post" action="test2.php">
    <input name="id" type="text" value="<?php echo $o; ?>">
    <input id="clickButton" type="submit" name="submit" value="set">
</form>
<script type="text/javascript"> 
    $(document).ready(function(){ 
	$('#clickButton').trigger('click'); 
   });
</script> 
