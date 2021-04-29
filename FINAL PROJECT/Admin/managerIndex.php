<!DOCTYPE html>
<html>
<head>
    <title>Manager Index</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div id="main-content" class="main">
    <br><h2>Manager Index</h2>
     
      

    <?php
    $conn=mysqli_connect("localhost","root","","manager") or die("failed");
    $sql="SELECT * FROM users";
    $result=mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px" class="table table-striped">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>User name</th>
      <th>Email</th>
       
        </thead>
        <tbody>
        	<?php
        	while($row=mysqli_fetch_assoc($result)){
       	    ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>

                
                
                <td>
                    <a class="btn btn-info" href='edit-inlineManager.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a class="btn btn-danger" href='delete-inlineManager.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
      <?php }else{
            	echo "<h2>No Product Found </h2>";
                 }
               mysqli_close($conn);
            ?>
</div>
</div>

<br>
<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>
