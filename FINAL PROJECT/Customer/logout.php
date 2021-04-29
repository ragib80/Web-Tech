<!DOCTYPE html>
<html>
<head>
	 
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<header>
 <?php include 'header.php';?>
 <div class="topnav">
	<?php
session_start();
session_destroy();
echo "Logout Sucessful.<br> click here to <a  href='login.php'> Login again </a> ";
?>
 </div>
</header>
 <br>

</body>
</html>
