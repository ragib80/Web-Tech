
<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    	<?php include 'header.php' ?>

<div class="topnav">
    <?php
if (!isset($_SESSION['email']) ) {


header("Location: login.php");
exit();

}
?>
     <?php
      


echo "Logged in as ". $_SESSION['email'];

?>
 
</div>
<?php include 'sidebar.php';?>

  
</div>
 <div class="main">
    <h1>Welcome <?php 
   
     echo " ". $_SESSION['name'];

    ?></h1>
    <br><br><br>
    
  </div>
 


    


            <?php include 'footer.php' ?>
            
          </body>
</html>
