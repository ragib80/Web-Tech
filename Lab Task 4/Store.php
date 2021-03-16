<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
     if(empty($_POST["fullname"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Name</label>";  
      } 
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter E-mail</label>";  
      }   
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter User Name</label>";  
      }  
      else if (empty($_POST["password"]))  {
        $error = "<label class='text-danger'>Enter Password</label>";  
      }
      else if (empty($_POST["newPassword"]))  {
        $error = "<label class='text-danger'>Enter Confrim Password</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  

      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Date of birth </label>";  
      } 
      else if (empty($_POST["profilePic"])) {

      $error = "<label class='text-danger'>please select a profile picture to upload </label>";
      }
      else if (!empty($_POST["profilePic"])) {

       $target_file = basename($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
      }  
      else  
      {    
        move_uploaded_file($_FILES['profilePic']['tmp_name'], 'upload/'.$_FILES['profilePic']['name']);
                $profilePic='upload/'.$_FILES['profilePic']['name'];

           if(file_exists('info.json'))  
           {  
                $current_data = file_get_contents('info.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                      'fullname' =>     $_POST['fullname'],
                      'email' =>     $_POST['email'],
                      'username'   =>     $_POST['username'],  
                      'password' =>     $_POST['password'],
                      'newPassword' =>     $_POST['newPassword'],
                      'gender'    =>     $_POST["gender"],  
                       'dob'     =>     $_POST["dob"],
                       'profilePic'=> $_POST['profilePic'],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('info.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html>  
 <html>  
      <head>  
            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


           <style >
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
           <br />  
           <div >  
                              
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                      <fieldset>
    <legend> <b> <font size="5px">Registration  </font> </b> </legend>
    <fieldset>

    <table>
    
      <tr >

        <td>Name</td>

        <td  ><input type="text" name="fullname"/></td>
       
         
      </tr>
           

      <tr>
        <td>Email</td>

        <td><input type="text" name="email"></td>
        
      </tr>
      <tr>
        <td > User Name   </td>
       

        <td><input type="text" name="username"/></td>
          
      </tr>

      <tr>
        <td>Password </td>
        
        <td><input type="password" name="password"/></td> <br>
        
      </tr>

      <tr>
        <td>Confrim Password </td>
       
        <td><input type="password" name="newPassword"/></td> <br>
      </tr>



    </table>
    </fieldset>
        <fieldset>
               <legend><b> Gender </b> </legend>
               <input type="radio" name="gender" value="Female">Female
               <input type="radio" name="gender" value="Male">Male
               <input type="radio" name="gender" value="Other">Other
               
            </fieldset>
    <hr>
    <fieldset>
        <legend> <b> Date Of Birth </b> </legend> <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31"> 
      
        </fieldset>
        <td colspan="2">
                                    <fieldset>
                                        <legend>Picture Upload</legend>
                                     <input type="file" name="profilePic" id="">
                                    </fieldset>
                                </td>
        
    <br>
    <table>
      <tr>
        <td>
          <input type="submit" name="submit" value="Submit"> 
     <input type="reset" value="Reset">
        </td>
      </tr>

    </table>
    
  </fieldset>                   
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                  
                </form>  
           </div>  
           <br /> 
            <footer>
  <p>Copyright <span>&#169;</span> Ragib Shahriar</p>
</footer> 
      </body>  
 </html>  