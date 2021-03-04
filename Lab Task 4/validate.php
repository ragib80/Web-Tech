<?php
  $name="ragib80";
   $password="123456";
if (isset($_POST['submit'])) {

	$getname=$_POST['name'];
	$getpassword=$_POST['password'];
	if ($getname==$name and $getpassword==$password) {
		if (isset($_POST['rm'])) {
			setcookie('name',$getname,time()+60*60*7 );

		}
			session_start();
			$_SESSION['name']=$getname;
			header("location: dashBoard.php");

		
	}else{
		echo "Username or Password is Invalid.<br> click here to
		<a href='login.php'> try again </a> ";

	}
}else{
	header("location: login.php");
}

  ?>