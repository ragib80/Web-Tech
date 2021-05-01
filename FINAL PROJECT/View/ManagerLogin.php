<?php
session_start();

?>


<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>
    <script >
     function validateform(){  
      var email=document.login.email.value;  
      var password=document.login.password.value;  
      
        
      if (email==null || email==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
      }  
      
    }


    function ValidateEmail()
    {
     var mailformat =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       if(document.getElementById("email").value.match(mailformat))
        {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("emailErr").innerHTML = "valid email";
          document.getElementById("emailErr").style.color = "green";
          return true;
           }
          else
             {
               document.getElementById("emailErr").innerHTML = "invalid email address , must contain @ or specific email provider address";
           document.getElementById("emailErr").style.color = "red";
           document.getElementById("email").style.borderColor = "red";
            return false;
                 }
        }
    
  
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<6){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }
       
   </script> 
</head>
<body>
<?php include 'managerDesign.php';?>



  <header>
  <h2>GG Clothing</h2>
  <h1 ></h1>  
  
  <div class="topnav btn-group" role="group" aria-label="Basic example">
  <a class="btn btn-info" href="../Home.html" > Home </a> <br>
 <a class="btn btn-light" href="managerRegistration.php">Registration </a>
 
</div>
</header>
<div >
 
<form name="login" method="post" action="managerLoginValidate.php" onsubmit="validateform()" >
    <fieldset>
        <legend> <b> <font size="5px">Login  </font> </b> </legend>
        <table cellpadding="7px" >
            <tr>
                <td > Email   </td>
                

                <td><input type="text" name="email" id="email" onkeyup="ValidateEmail()" onblur="ValidateEmail()"/></td>
                <td id="emailErr"></td>
                
            </tr>
           <div>
            <tr>
                <td>Password </td>
        
                <td ><input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()"/></td> <br>
                <td id="passErr"></td>
            </tr>
       </div>
        </table>
        <hr>
        
       
        <input class="btn btn-outline-secondary" type="submit" name="submit" value="submit"> 
        <a class="btn btn-primary" href="managerRegistration.php"> Sign Up now!</a>
    
</form>
</div>

<br>
<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>

</body>
</html>