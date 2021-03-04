<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'design.php';?>
  <header>
  <h2>X company</h2>
  <h1 ></h1>  
  <?php
session_start();
session_destroy();
echo "Logout Sucessful.<br> click here to <a href='login.php'> Login again </a> ";
?>
 
</div>
</header>
<div >

<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>

