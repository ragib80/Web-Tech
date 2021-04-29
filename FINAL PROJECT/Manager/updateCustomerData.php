<?php 

 $id=$_POST['id'];
 $name= $_POST['name'];
 $pnum= $_POST['pnum'];
 $email= $_POST['email'];
 $gender=$_POST['gender'];
 $dateofbirth=$_POST['dateofbirth'];

 
   $conn=mysqli_connect("localhost","root","","customer") or die("failed");
    $sql="UPDATE `user` SET `name`='$name',`pnum`='$pnum',`email`='$email' ,`gender`='$gender' `dateofbirth`='$dateofbirth' WHERE `id` ={$id}";     


   if (mysqli_query($conn, $sql)) {
 	echo 1;
 	}
 	else {
 		echo 0;
 	}

?>