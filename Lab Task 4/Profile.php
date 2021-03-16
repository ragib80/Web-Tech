<?php
	session_start();
	
    $name=$_SESSION['username'];

    $inp = file_get_contents('info.json');
	$temp = json_decode($inp, true);

    foreach ($temp as $key1 => $value1) {
        if ($temp[$key1]["username"]==$name) {
            $username=$temp[$key1]["username"];
            $fname=$temp[$key1]["fullname"];
            
            $email=$temp[$key1]["email"];
            $gender=$temp[$key1]["gender"];
           
            $dob=$temp[$key1]["dob"];
           
       

        }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>
      Welcome <?php echo $username ?>
    </title>
</head>
<body>
  <?php include 'design.php';?>  

 
    
 <header>
  <h2>X company</h2>
  <h1 ></h1>  
  
  <div class="topnav">
    
     <?php
 
echo "Logged in as ". $_SESSION['username'];
echo " | <a href='logout.php'> Logout </a>" ;
?>
  

</header>
<?php require 'sidebar.php';?> 
<div class="main">

<td colspan="2" align="center">
     <h3><b>Welcome <?php echo $fname ?></b></h3> 
                <table border="0" width="80%">
                    <tr>
                        
                          
                    </tr>
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $fname ?></td>
                       <td rowspan=8 align="center">
                            <img src="imageav.png" height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                   

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                   
                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $gender ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>: <?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                    
                </table>
            </td>
        </tr>
        
    </table>
    </div><br><br><br><br>
    <footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>
