<?php  
include 'connection.php';
 if (isset($_POST['submit'])) {

if(empty($_POST['name']) || empty($_POST['pass']) || empty($_POST['confpass']) || empty($_POST['email']) || empty($_POST['pnum']) || empty($_POST['gender']) || empty($_POST['dateofbirth'])){
            echo"Plaese fill out all the field";
        }

else{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $pass=mysqli_real_escape_string($con,$_POST['pass']);
  $confpass=mysqli_real_escape_string($con,$_POST['confpass']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $pnum=mysqli_real_escape_string($con,$_POST['pnum']);
  $gender=mysqli_real_escape_string($con,$_POST['gender']);
  $dateofbirth=mysqli_real_escape_string($con,$_POST['dateofbirth']);
   $emailquery= "SELECT * FROM user WHERE email='$email'";
   $query=mysqli_query($con,$emailquery);

   $emailcount=mysqli_num_rows($query);

   if ($emailcount>0) {
     echo "email already exist! ";
   }else{
    if ($pass === $confpass) {
      $insertquery="INSERT INTO user( name, pass, confpass, email, pnum, gender, dateofbirth) VALUES('$name','$pass','$confpass','$email','$pnum','$gender','$dateofbirth')";
      $iquery=mysqli_query($con,$insertquery);
      
      header('location:login.php');

    }else{
      echo "password not matched";
     
   }  
   }
    }
    }
 ?> 