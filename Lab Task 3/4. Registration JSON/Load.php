<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
        <style>
          thead.c {
          table-layout: auto;
           width: 100%;  
          }

           header {
  background-color: #99d9ff;
  padding: 30px;
  text-align: center;
  font-size: 20px;
  color: white;

} 
  footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
        </style>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  

          <header>
  <h2>X company</h2>
  <h1 ></h1>  
  
  <div class="topnav">
  <a  href="Home.html" > Home </a> 
  <a href="Login.php">Login </a>
  <a href="Store.php">Registration </a>
 
</div>
</header>
        <div >              
                <div > 
                     <table class="table table-bordered">  
                     
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>
                               <th>User Name</th> 
                               <th>Password</th> 
                               <th>Confrim Password</th>
                               <th>Gender</th>
                               <th>Date Of Birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("info.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["fullname"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["password"].'</td>
                               <td>'.$row["newPassword"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>

                               </tr>';  
                          } 
                         
                          ?> 
                           
                     </table>  
                   </div>
                 </div>

                 <footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer>
      </body>  
 </html>  