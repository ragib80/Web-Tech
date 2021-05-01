<?php
session_start();
?>

<?php
include 'managerDbcon.php';
if (isset($_POST['submit']))  {
  $email=$_POST['email'];
  $password=$_POST['password'];


  $email_sch="SELECT * FROM users WHERE email='$email' AND password='$password' ";


  $query=mysqli_query($con,$email_sch);
  $email_count=mysqli_num_rows($query);

  if ($email_count) {
   $email_pass=mysqli_fetch_assoc($query);
   $db_pass=$email_pass['password']; 
   $_SESSION['email']=$email_pass['email'];
    $_SESSION['name']=$email_pass['name'];

   echo "login sucessful";
   header('location:managerDashBoard.php');
  }else {
    echo "login failed! Check email and password ";
  }

}
?>