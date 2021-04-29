 
<!DOCTYPE html>  
 <html>  
      <head>  
            
          <title>Registration</title>
          <link rel="stylesheet" type="text/css" href="style.css" />
         
   
          

           <script >
     function validateform(){  
      var name=document.registration.name.value; 
      var pass=document.registration.pass.value; 
      var confpass=document.registration.confpass.value; 
      var email=document.registration.email.value;
      var pnum=document.registration.pnum.value; 
      var gender=document.registration.gender.value;  
      var dateofbirth=document.registration.dateofbirth.value; 
      
       if (name==null || name=="") {
        alert(" name can't be blank.");  
        return false;  
      }  
       else if (password.length<6) {
        alert("Password must be at least 6 characters long");  
        return false;  
      } 
      else if (email==null || email==""){  
        alert("email can't be blank");  
        return false;  
      }else if(pnum.length>10){  
        alert("Phone number must be at least 11 characters long.");  
        return false;  
      } 
      else if(gender.length>0){  
        alert("gender  must be select");  
        return false;  
      } 
      else if(dateofbirth==null || dateofbirth==""){  
        alert("Must select a date of birth");  
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
               document.getElementById("emailErr").innerHTML = "invalid email address ";
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

        function phoneNumber()
      {
        var pnumformat =  /^\d{11}$/;
       if(document.getElementById("pnum").value.match(pnumformat))
        {
        document.getElementById("pnumErr").innerHTML = "";
        document.getElementById("pnum").style.borderColor = "green";
        document.getElementById("pnumErr").innerHTML = "valid phone number";
          document.getElementById("pnumErr").style.color = "green";
          return true;
           }
          else
             {
               document.getElementById("pnumErr").innerHTML = "invalid pnum address , must contain only Numbers";
           document.getElementById("pnumErr").style.color = "red";
           document.getElementById("pnum").style.borderColor = "red";
            return false;
                 }
        }
       
   </script>
      </head>  
      <body>  
<?php include 'header.php' ?>


   
     
 <div >  
                              
 <form method="post" action="RegistrationValidate.php" name="registration" onsubmit="validateform()">  
                      
                  
  <fieldset>
    <legend> <b> <font size="5px">Seller Registration  </font> </b> </legend>
    <fieldset>

    <table>
    
      <tr >

        <td>Name</td>

        <td  ><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"/></td>
       
          <td id="nameErr"></td><br>
      </tr>

           

      <tr>
        <td>E-mail </td>

        <td><input type="text" name="email" id="email"  onkeyup="ValidateEmail()" onblur="ValidateEmail()"></td>
         <td id="emailErr"></td>
      </tr>
      

      <tr>
        <td>Password </td>
        
        <td><input type="password" name="pass"/ id="pass"  onkeyup="checkPass()()" onblur="checkPass()"></td> <br>
         <td id="passErr"></td>
      </tr>

      <tr>
        <td>Confrim Password </td>
       
        <td><input type="password" name="confpass" id="confpass" /></td> <br>
         <td id="con_passErr"></td>
      </tr>
      <tr>
        <td > Phone Number </td>
       

        <td><input type="text" name="pnum"/ id="pnum"  onkeyup="phoneNumber()()" onblur="phoneNumber()"></td> <br>
         <td id="pnumErr"></td>
          
      </tr>
      <tr>
        <td>Gender </td>
       
        <td><input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
        </td>
        <br><br>
      </tr>
      <tr>
        <td>Date of birth </td>
       
        <td><input type="Date" name="dateofbirth" min="1953-01-01" max="2010-01-01"></td> <br>
         <td id="dateofbirthErr"></td>
      </tr>

    </table>
    </fieldset>
        
    <hr>
    
    <br>
    <table>
      <tr>
        <td>
          <input class="btn btn-outline-secondary" type="submit" name="submit" value="Submit"> 
     <input class="btn btn-outline-dark" type="reset" value="Reset">
        </td>
      </tr>

    </table>
    
  </fieldset>                   
                      
                  
                </form>  
           </div>  
           <br /> 
            <footer>
  <p>Copyright <span>&#169;</span> GG  Clothing</p>
</footer> 
      </body>  
 </html>  