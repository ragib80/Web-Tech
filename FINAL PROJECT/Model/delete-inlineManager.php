<?php
 $id=$_GET['id'];

 $conn=mysqli_connect("localhost","root","","manager") or die("failed");
    $sql="DELETE FROM `users` WHERE `id`={$id} ";
    $result=mysqli_query($conn, $sql) or die("query failed");
    header('Location: managerIndex.php');
    mysqli_close($conn);
?>