<?php  
	session_start();//session starts here  
	include("db_connection.php");  
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from form 
		
		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass']; 
		
		$sql = "SELECT * FROM admin WHERE admin_name = '$admin_name' and admin_pass = '$admin_pass'";
		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		// If result matched $myusername and $mypassword, table row must be 1 row
			
		if($count == 1)
		{
			$_SESSION['login_admin'] = $admin_name;
			header("location: index.php");
		}
		else
		{
			echo"<script>alert('Your Admin Name or Password is invalid')</script>";  
			echo "<script>location.href='https://smpoetry.com/admin/login.php'</script>";
		}
	}  
?>

<!DOCTYPE html>
<head>
<title>S.M. | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<body>
	<center><a href="https://smpoetry.com/"><img src="images/sm3.png" style="margin-top:15vh"></a></center>
	<div class="log-w3">

		<div class="admin-main">
			<h2>Sign In</h2>
			<form method="post" enctype="multipart/form-data">
				<input type="text" class="ggg" name="admin_name" placeholder="Admin Name" required="">
				<input type="password" class="ggg" name="admin_pass" placeholder="Password" required="">
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="admin_login">
				<div class="clearfix"></div>
				<center><h4><a href="https://smpoetry.com/">Go to Website Homepage</a></h4></center>
			</form>
		</div>

	</div>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
</body>
</html>