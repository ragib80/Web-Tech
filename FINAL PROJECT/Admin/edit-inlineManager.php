<!DOCTYPE html>
<html>
<head>
    <title>Edit Manager details</title>
   
</head>
<body>
<?php include 'header.php'; ?>

<div id="main-content" class="main">
    <br><h2>Edit Manager details</h2> <hr>
    <?php 
  $conn=mysqli_connect("localhost","root","","manager") or die("failed");
  $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id={$id}";
    $result=mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result)>0) {
      while ($row=mysqli_fetch_assoc($result)) {
    
    ?>
    <div class="main">
    <form class="post-form" action="" method="post">
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Name</label>
          <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>"/>
          <input type="text" name="name" id="name"  value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-form-label">User Name</label>
          <input type="text" name="username" id="username" value="<?php echo $row['username'];?>"/>
      </div>
      
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Email</label>
          <input type="text" name="email" id="email" value="<?php echo $row['email']?>"/>
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
                       <th>Id</th>
                   <th>Name</th>
                    <th>User name</th>
                    <th>Email</th>
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
          url: "addManagerDataLoad.php",
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
        var buyingPrice=$("#username").val();
        var sellingPrice=$("#email").val();
        $.ajax({
           url:"updateManagerData.php",
            type: "POST",
            data: {id:id, name:name , username:username, email:emai},
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