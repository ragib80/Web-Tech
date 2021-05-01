<?php
$conn=mysqli_connect("localhost","root","","product")or die("connection failed");
$sql="SELECT * FROM products";
$result=mysqli_query($conn, $sql) or die("query failed");
$output="";
if (mysqli_num_rows($result)> 0) {
	$output='<table border="1" width="100%" cellspacing="0" cellpadding="10px" class="table table-striped">
     <tr>
     <thead>
      <th >ID</th>
     <th>NAME</th>
     <th>Buying Price</th>
     <th>Selling Price</th>
     </thead>
     </tr>';
     while ($row=mysqli_fetch_assoc($result)) {
     	$output.="<tr><td>{$row["ID"]} </td>
     	<td>{$row["Name"]} </td> <td>{$row["Buying Price"]} </td> <td>{$row["Selling Price"]} </td></tr>";
     	# code...
     }
     $output.="</table>";
     mysqli_close($conn);
echo $output;
}else{

}
?>