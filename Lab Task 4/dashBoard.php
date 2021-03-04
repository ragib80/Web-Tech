<!DOCTYPE html>
<html>
<head>
  <style >
    .main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

  </style>
</head>
<body>
 
   <?php include 'design.php';?>
  <header>
  <h2>X company</h2>
  <h1 ></h1>  
  
  <div class="topnav">
    
     <?php
      session_start();

echo "Logged in as ". $_SESSION['name'];
echo " | <a href='logout.php'> Logout </a>" ;
?>
 
</div>
</header>
  <?php include 'sidebar.php';?>

  
</div>
 <div class="main">
    <h1>Welcome <?php 
   
     echo " ". $_SESSION['name'];

    ?></h1>
  </div>
<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>