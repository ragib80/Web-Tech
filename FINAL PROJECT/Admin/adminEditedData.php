<?php 
 $user_id=$_POST['id'];
 $name= $_POST['name'];
 $username= $_POST['username'];
 $email= $_POST['email'];

 
   $conn=mysqli_connect("localhost","root","","user") or die("failed");
    $sql="UPDATE `users` SET `name`='$name',`username`='$username',`email`='$email' WHERE `id` ={$user_id}";     

   $result=mysqli_query($conn, $sql) or die("query failed");
   header('Location: adminProfile.php');
  mysqli_close($conn);

?>