<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
   
</head>
<body>
<?php include 'header.php'; ?>

<div id="main-content" class="main">
    <br><h2>Edit Product</h2> <hr>
    <?php 
  $conn=mysqli_connect("localhost","root","","product") or die("failed");
  $product_id=$_GET['id'];
    $sql="SELECT * FROM products WHERE ID={$product_id}";
    $result=mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result)>0) {
      while ($row=mysqli_fetch_assoc($result)) {
    
    ?>
    <div class="main">
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Name</label>
          <input type="hidden" name="id" id="id" value="<?php echo $row['ID'];?>"/>
          <input type="text" name="name" id="name"  value="<?php echo $row['Name'];?>"/>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Buying Price</label>
          <input type="text" name="buyingPrice" id="buyingPrice" value="<?php echo $row['Buying Price'];?>"/>
      </div>
      
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Selling Price</label>
          <input type="text" name="sellingPrice" id="sellingPrice" value="<?php echo $row['Selling Price']?>"/>
      </div>
      <input class="btn btn-outline-primary" type="submit" value="Update" id="save-button" />
    </form>
    <?php } 
      }
    ?>
      <table>
           <td id="table-data">
               <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                   <tr>
                    <th width="100px">ID</th>
                       <th >NAME</th>
                       <th>Buying Price</th>
                       <th>Selling Price</th>
                   </tr>
                   <tr>
                       <td align="center"> </td>
                   </tr>
               </table>

           </td>
       </table>
    </div>
</div>
</div>
<br>

<br>
<footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
</body>
</html>
<script type="text/javascript">
   $(document).ready(function(){
       function loadTable(){
        $.ajax({
          url: "addDataLoad.php",
          type: "POST",  
          success: function(data){
            $("#table-data").html(data);
          }
        });
       }
       loadTable();
       $("#save-button").on("click",function(e){
        e.preventDefault();
        var id=$("#id").val();
        var name=$("#name").val();
        var buyingPrice=$("#buyingPrice").val();
        var sellingPrice=$("#sellingPrice").val();
        $.ajax({
           url:"updatedata.php",
            type: "POST",
            data: {id:id, name: name, buyingPrice: buyingPrice, sellingPrice: sellingPrice},
            success: function(data){
                if (data==1) {
                  loadTable();  
                }
                else{
                    alert("cant save record");
                }
                
            }
        });
       })
    });
</script>