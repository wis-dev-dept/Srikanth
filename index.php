<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	//header('location:./Login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location:index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="hheader">
	<h2><a href="index.php">Home Page</a> &nbsp &nbsp&nbsp	 Price  &nbsp&nbsp&nbsp	<a href="./Login/login.php">Login</a></h2>
<form class="content">
<!--<div class="content"> -->
  	
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	
<!--</div>-->
</form>
		</div>
<div>

</div>
</body>
</html>