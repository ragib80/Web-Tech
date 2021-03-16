<!DOCTYPE html>
<html>
<head>
   

</head>
<body>
   <?php include 'design.php';?>  
  <header>
  <h2>X company</h2>
  <h1 ></h1>  
  
  <div class="topnav">
    <div class="main">
 <?php
session_start();
echo"Welcome ". $_SESSION['username'];
echo " | <a href='logout.php'> Logout </a>" ;
?>
 </div>
</div>
</header>

  <?php include 'sidebar.php';?>
      

  <?php

     $currPassword = $newPassword= $retypeNewPassword= " ";
     $currPasswordErr = $newPasswordErr =  $retypeNewPasswordErr = "" ;

     
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST["currPassword"]) ) {
   
    $currPasswordErr="current password can not empty";
}
    elseif ( (!empty($_POST["currPassword"]  != $_POST["newPassword"])) && ($_POST["newPassword"]==$_POST["retypeNewPassword"]) ){
    
      $currPassword=test_input($_POST["currPassword"]);
      $newPassword=test_input($_POST["newPassword"]);
      $retypeNewPassword = test_input($_POST["retypeNewPassword"]);

       
    }

     elseif ($_POST["newPassword"] != $_POST["retypeNewPassword"]) {
        $retypeNewPasswordErr=" Current and Retype Password not matches";
      

 
    }
    else{
      $retypeNewPasswordErr="Current and new password can not be same ";
    }
    
  }

   

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    ?>

<div class="main">

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"?>
  <fieldset>
    <legend> <b> <font size="5px">Change Password  </font> </b> </legend>
    <table>
      <tr>
        <td > Current Password   </td>
        <span class="error"><?php echo $currPasswordErr;?></span>

        <td><input type="password" name="currPassword"/></td>
      </tr>

      <tr>
        <td>New Password </td>
        <br><span class="error"><?php echo $newPasswordErr;?></span>
        <td><input type="password" name="newPassword"/></td> <br>
      </tr>

        <tr>
        <td>Retype New Password </td>
        <br><span class="error"><?php echo $retypeNewPasswordErr;?></span>
        <td><input type="password" name="retypeNewPassword"/></td> <br>
        
      </tr>

    </table>
    <hr>
    
    <br><br>
    <input type="submit" name="submit" value="Submit" > 
  </fieldset>
</form>

 </div><br>
 <footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>
