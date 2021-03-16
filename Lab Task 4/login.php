
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
  <a  href="Home.html" > Home </a> 
  <a href="Login.php">Login </a>
  <a href="Store.php">Registration </a>
 
</div>
</header>
<div >
 
<form method="post" action="validate.php">
    <fieldset>
        <legend> <b> <font size="5px">Login  </font> </b> </legend>
        <table>
            <tr>
                <td > User Name   </td>
                

                <td><input type="text" name="username"/></td>
            </tr>

            <tr>
                <td>Password </td>
        
                <td><input type="password" name="password"/></td> <br>
                
            </tr>

        </table>
        <hr>
        <input type="checkbox" name="rm">Remember Me 
        <br><br>
        <input type="submit" name="submit" value="submit"> <a href="forgetPassword.php"> Forgot Password?</a>
    </fieldset>
    
</form>
</div>


<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>

</body>
</html>