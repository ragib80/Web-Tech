 
<!DOCTYPE html>  
 <html>  
      <head>  
            <title>Registration</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


          <script >
     function validateform(){  
      var name=document.registration.name.value; 
      var username=document.registration.username.value; 
      var email=document.registration.email.value;  
      var password=document.registration.password.value;  
       var curr_password=document.registration.curr_password.value; 
      
       if (name==null || name=="") {
        alert(" name can't be blank.");  
        return false;  
      }  
       else if (username.length<3) {
        alert("user name must be at least 3 characters long.");  
        return false;  
      } 
      else if (email==null || email==""){  
        alert("email can't be blank");  
        return false;  
      }else if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
      } 
      
    }
      function checkName(){
          if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else if(document.getElementById("name").value.length<3){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "name must be at least 3 characters long.";
      }
      else{
        document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "black";
      }
        }

        function checkuserName(){
          if (document.getElementById("username").value == "") {
          document.getElementById("userNameErr").innerHTML = "User Name can't be blank";
          document.getElementById("userNameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else if(document.getElementById("username").value.length<3){
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("userNameErr").style.color = "red";
        document.getElementById("userNameErr").innerHTML = "User name must be at least 3 characters long.";
      }
      else{
        document.getElementById("userNameErr").innerHTML = "";
          document.getElementById("userNameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "black";
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

        function passwordVerify() {
  if (document.getElementById("curr_password").value == "") {
    document.getElementById("con_passErr").innerHTML = "Confrim Password can't be blank";
          document.getElementById("con_passErr").style.color = "red";
          document.getElementById("curr_password").style.borderColor = "red";
  }
 else if (document.getElementById("password").value === document.getElementById("curr_password").value) {
     document.getElementById("con_passErr").innerHTML = "";
        document.getElementById("curr_password").style.borderColor = "green";
        document.getElementById("con_passErr").innerHTML = "password matched";
          document.getElementById("con_passErr").style.color = "green";
          return true;

   
  }
  else{
      document.getElementById("con_passErr").innerHTML = "password don't match ";
           document.getElementById("con_passErr").style.color = "red";
           document.getElementById("curr_password").style.borderColor = "red";
            return false;
  }
}
       
   </script>
      </head>  
      <body>  
<?php include 'design.php';?>

         <header>
  <h2>GG Clothing</h2>
  <h1 ></h1>  
  
  <div class="topnav btn-group" role="group" aria-label="Basic example">
  <a class="btn btn-info" href="Home.html" > Home </a> <br>
  <a class="btn btn-secondary" href="managerLogin.php">Login </a><br>
  <a class="btn btn-light" href="managerRegistration.php">Registration </a>
 
</div>
</header>
           <br />  
           <div >  
                              
                <form method="post" action="adminRegistrationValidate.php" name="registration" onsubmit="validateform()" >  
                      
                     <br />  
                      <fieldset>
    <legend> <b> <font size="5px">Customer Registration  </font> </b> </legend>
    <fieldset>

    <table>
    
      <tr >

        <td>Name</td>

        <td  ><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"/></td>
        <td id="nameErr"> </td>
       
         
      </tr>

        <tr>
        <td > User Name   </td>
       

        <td><input type="text" name="username" id="username" onkeyup="checkuserName()" onblur="checkuserName()"/></td>
         <td id="userNameErr"> 
           
           </td>
           <span id="availability"></span>
      </tr>   

      <tr>
        <td>Email</td>

        <td><input type="text" name="email" id="email"  onkeyup="ValidateEmail()" onblur="ValidateEmail()"></td>
        <td id="emailErr"></td>
         
      </tr>
      

      <tr>
        <td>Password </td>
        
        <td><input type="password" name="password" id="password"  onkeyup="checkPass()()" onblur="checkPass()"/></td> 
        <td id="passErr"> </td>
       
      </tr>

      <tr>
        <td>Confrim Password </td>
       
        <td><input type="password" name="curr_password" id="curr_password" onkeyup="passwordVerify()" onblur="passwordVerify()"/></td> 
        <td id="con_passErr"> </td>
       
      </tr>



    </table>
    </fieldset>
        
    <hr>
    
    <br>
    <table>
      <tr>
        <td>
          <input class="btn btn-outline-secondary" type="submit" name="submit" value="Submit" id="submit"> 
     <input class="btn btn-outline-dark" type="reset" value="Reset">
        </td>
      </tr>

    </table>
    
  </fieldset>                   
                      
                  
                </form>  
           </div>  
           <br /> 
            <footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer> 
      </body>  
 </html>  
 <script type="text/javascript">
 	$(document).ready(function(){
 	$('#username').blur(function(){
 		var username= $(this).val();
 		$.ajax({
 			url: 'adminCheckUsername.php',
 			method: "POST",
 			data:{username:username},
 			success:function(data){
 				if (data != 0  ) {
 					$('#availability').html('<span class="text-danger">username already exits try another </span>');
 					$('#submit').attr("disabled",true);

 				}
 				
 				else{
 					$('#availability').html('<span class="text-success"> </span>');
 					$('#submit').attr("disabled",false);
 				}
 			}
 		})
 	});	
 	});
 </script>