<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Logout</title>
</head>
<body>
	<header>
 <?php include 'managerDesign.php';?>
 <div class="topnav">
	<?php
session_start();

echo "Logout Sucessful.<br> click here to <a class='btn btn-outline-success' href='managerLogin.php'> Login again </a> ";
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['email']);
session_destroy();
?>
 </div>
</header>
 <br>

</body>
</html>
