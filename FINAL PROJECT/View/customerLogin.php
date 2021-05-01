<?php
session_start();
?>  
 <!DOCTYPE html>  
 
 <html>  
      <head>  

           <title>Login</title>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script >
     function validateform(){  
      var email=document.login.email.value;  
      var pass=document.login.pass.value;  
      
        
      if (email==null || email==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(pass.length<6){  
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
          if (document.getElementById("pass").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("pass").style.borderColor = "red";
      }else if(document.getElementById("pass").value.length<6){
          document.getElementById("pass").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("pass").style.borderColor = "black";
      }
        }
       
   </script> 
    </head>
    <body>
               <?php include 'header.php' ?>  
      </head>  
      <body>  
        <fieldset>
    <legend align="center" style="font-size: 2.0em">Login</legend>
           <div class="container">  
                 
                <form method="post" align="center" action="loginvalidate.php" onsubmit="validateform()">  
                  <table><tr>
                    <td>Email</td>
                    <td> <input type="text" name="email" id="email" placeholder="Enter email" class="form-control" required="email " onkeyup="ValidateEmail()" onblur="ValidateEmail()"/> <br /></td>
                    <td id="emailErr"></td>
                     
                  </tr>
                     <tr>
                      <td>Password</td>
                     <td><input type="password" name="pass" id="pass" placeholder="Enter Pass" class="form-control" required="pass " onkeyup="checkPass()" onblur="checkPass()"/><br /> </td>
                      <td id="passErr"></td>
                      </tr>
                     <td><input class="btn btn-outline-secondary" type="submit" name="submit" id="submit" value="Submit" /> </td> 
           <br><br>
         </table>
           
      <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw"> <a href="registration.php"> <span style="color: #ff0000">Do Not Have Account ?</span></a></span>
   </div>
                </form>  
                <br /><br />  
           </div>  
           <?php include 'footer.php' ?>
            </fieldset>
          </form>
      </body>  
 </html>  