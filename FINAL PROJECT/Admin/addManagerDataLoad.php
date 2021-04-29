<?php
$conn=mysqli_connect("localhost","root","","manager")or die("connection failed");
$sql="SELECT * FROM users";
$result=mysqli_query($conn, $sql) or die("query failed");
$output="";
if (mysqli_num_rows($result)> 0) {
	$output='<table border="1" width="100%" cellspacing="0" cellpadding="10px" class="table table-striped">
     <tr>
     <thead>
       <th>Id</th>
        <th>Name</th>
        <th>User name</th>
      <th>Email</th>
     </thead>
     </tr>';
     while ($row=mysqli_fetch_assoc($result)) {
     	$output.="<tr><td>{$row["id"]} </td>
     	<td>{$row["name"]} </td> <td>{$row["username"]} </td> <td>{$row["email"]} </td></tr>";
     	# code...
     }
     $output.="</table>";
     mysqli_close($conn);
echo $output;
}else{

}
?>