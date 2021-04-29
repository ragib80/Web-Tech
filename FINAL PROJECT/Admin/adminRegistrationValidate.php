
<?php  
include 'dbcon.php';
 if (isset($_POST['submit'])) {

if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['curr_password'])){
            echo"Plaese fill out all the field";
        }

else{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
   $curr_password=mysqli_real_escape_string($con,$_POST['curr_password']);
   $emailquery= "SELECT * FROM users WHERE email='$email'";
   $query=mysqli_query($con,$emailquery);

   $emailcount=mysqli_num_rows($query);

   if ($emailcount>0) {
    
      echo "email already exist! ";  
    
      
    } else{
    if ($password === $curr_password) {
      $insertquery="INSERT INTO users( name, username, email,password, curr_password) VALUES('$name','$username','$email','$password','$curr_password')";
      $iquery=mysqli_query($con,$insertquery);
      
      header('location:adminLogin.php');

    }else{
      echo "password not matched";
     
   }  
   }
    }
    }
 ?> 

