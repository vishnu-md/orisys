<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:home.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orisys-LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div id="bg">
<header>
	<h1>OrisysIndia</h1>
</header>

  <div><a href="logout.php">Logout</a> </div> 

<div id="user">
	<p>welcome <?php echo $_SESSION['username']; ?>,</p>
	</div>
	<div id="wel_msg">
	<p>Your email id : "<?php echo $_SESSION['useremail']; ?>".</p>
</div>
</div>
</body>
</html>

