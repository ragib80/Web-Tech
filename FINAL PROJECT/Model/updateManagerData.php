<?php 

 $id=$_POST['id'];
 $name= $_POST['name'];
 $username= $_POST['username'];
 $email= $_POST['email'];

 
   $conn=mysqli_connect("localhost","root","","manager") or die("failed");
    $sql="UPDATE `users` SET `name`='$name',`username`='$username',`email`='$email' WHERE `id` ={$id}";     

  /* $result=mysqli_query($conn, $sql) or die("query failed");
   header('Location: index.php');
  mysqli_close($conn);*/
   if (mysqli_query($conn, $sql)) {
 	echo 1;
 	}
 	else {
 		echo 0;
 	}

?>