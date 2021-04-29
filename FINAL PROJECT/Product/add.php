
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<?php include 'header.php'; ?>
<div id="main-content" class="main">
    <br><h2>Add New Product</h2> <hr>
    <div class="form-group">
    
   <form class="post-form" action="" method="post" name="addIteam" onsubmit="validateform()">
        
            
        <div class="form-group" class="form-group col-md-6" >
            <label class="col-sm-2 col-form-label" >Name    </label>
            <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"/>
            <span id="nameErr"></span><br>
        </div>
        <div class="form-group"  >
            <label class="col-sm-2 col-form-label">Buying Price</label>
            <input type="text" name="buyingPrice" id="buyingPrice" onkeyup="checkBuyingPrice()" onblur="checkBuyingPrice()" />
            <span id="buyingPriceErr"></span><br>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Selling Price</label>
            <input type="text" name="sellingPrice" id="sellingPrice" onkeyup="checkSellingPrice()" onblur="checkSellingPrice()" />
            <span id="sellingPriceErr"></span><br>
        </div>
        
        <input class="btn btn-outline-success" type="submit" value="Save" id="save-button" />
        <br>
        <hr>
        
    </form>
    <br>
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
<script type="text/javascript">
        function validateform(){
            var name=document.addIteam.name.value; 
        var buyingPrice=document.addIteam.buyingPrice.value; 
        var sellingPrice=document.addIteam.sellingPrice.value;
      
       if (name==null || name=="") {
        document.getElementById('save-button').disabled = true; 
        alert(" name can't be blank."); 
        
        return false;  
      }  
       else if (buyingPrice==null || buyingPrice=="") {
        alert("buying Price can't be empty "); 
        document.getElementById('save-button').disabled = true;  
        return false;  
      } 
      else if (sellingPrice==null || sellingPrice==""){  
        alert("sellingPrice can't be blank");
         document.getElementById('save-button').disabled = true; 
        return false;  
      } 
      
    }
        


     function checkName(){
       
     
       if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
          document.getElementById('save-button').disabled = true;
           return false;
      } 

      else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById('save-button').disabled = false;
           return true;
      }
    }

function checkBuyingPrice(){
       
     
       if (document.getElementById("buyingPrice").value == "") {
          document.getElementById("buyingPriceErr").innerHTML = "Buying Price can't be blank";
          document.getElementById("buyingPriceErr").style.color = "red";
          document.getElementById("buyingPrice").style.borderColor = "red";
          document.getElementById('save-button').disabled = true;
           return false;
      }  else{
        document.getElementById("buyingPriceErr").innerHTML = "";
        document.getElementById('save-button').disabled = false;

           return true;
      }
    }
    function checkSellingPrice(){
        
     
       if (document.getElementById("sellingPrice").value == "") {
          document.getElementById("sellingPriceErr").innerHTML = "Selling Price can't be blank";
          document.getElementById("sellingPriceErr").style.color = "red";
          document.getElementById("sellingPrice").style.borderColor = "red";
          document.getElementById('save-button').disabled = true;
           return false;
      }  else{
        document.getElementById("sellingPriceErr").innerHTML = "";
        document.getElementById('save-button').disabled = false;
           return true;
      }
    }

</script>

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
        var name=$("#name").val();
        var buyingPrice=$("#buyingPrice").val();
        var sellingPrice=$("#sellingPrice").val();
        $.ajax({
           url:"ajax-insert.php",
            type: "POST",
            data: {name: name, buyingPrice: buyingPrice, sellingPrice: sellingPrice},
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
