<?php
if(empty($_POST['name']) || empty($_POST['buyingPrice']) || empty($_POST['sellingPrice']) ){
            echo"Plaese fill out all the field";
        }

else{
$name=$_POST['name'];
$buyingPrice=$_POST['buyingPrice'];
$sellingPrice=$_POST['sellingPrice'];

 $conn=mysqli_connect("localhost","root","","product") or die("failed");
$sql="INSERT INTO `products`(`Name`,`Buying Price`,`Selling Price`) VALUES('$name','$buyingPrice','$sellingPrice')";
 //$result=mysqli_query($conn, $sql) or die("query failed");
 if (mysqli_query($conn, $sql)) {
 	echo 1;
 	}
 	else {
 		echo 0;
 	}
 	}
?>
