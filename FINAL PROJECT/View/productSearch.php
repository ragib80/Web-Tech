<?php
 $search_value=$_POST["search"];
 $conn=mysqli_connect("localhost","root","","product") or die("failed");
    $sql="SELECT * FROM products WHERE Name LIKE '%{search_value}%' OR ID LIKE '%{search_value}%'";
    $result=mysqli_query($conn, $sql) or die("query failed");
    $output= "";
    if (mysqli_num_rows($result)>0) {
   


    ?>
    
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Profit</th>
      
       
        </thead>
        <tbody>
        	<?php
        	while($row=mysqli_fetch_assoc($result)){
       	    ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Selling Price'] - $row['Buying Price'] ; ?></td>
                
                
                <td>
                    <a class="btn btn-info" href='edit-inline.php?id=<?php echo $row['ID']; ?>'>Edit</a>
                    <a class="btn btn-danger" href='delete-inline.php?id=<?php echo $row['ID']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    
      <?php 
   $output.="</table>";
   mysqli_close($conn);
   echo $output;
  }else{
            	echo "<h2>No Product Found </h2>";

               
            ?>
?>