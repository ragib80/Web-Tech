
const form = document.getElementById('form');
const usernameLogin = document.getElementById('usernameLogin');
const passwordLogin = document.getElementById('passwordLogin');

function validateForm(){
      var vname = usernameLogin.value.trim();     
      var vpass = passwordLogin.value.trim();
      
      if (vname == 'admin' && vpass =='admin' ){
        alert('Success!');  
        window.location.href = "dashboard.php";
      } else{
        alert('Error!');

      }
}


form.addEventListener('submit', (e)=>{
  e.preventDefault();
  
  checkInputs();
});

function checkInputs(){
    // get the values from the inputs
   

    const usernameLoginValue = usernameLogin.value.trim(); //trim removes whitespace
    const passwordLoginValue = passwordLogin.value.trim(); 
  
  
    

   if(usernameLoginValue === ''){
       // show error
       // add error class
       setErrorFor(usernameLogin, 'Please enter your username!');
     }else{
       // add success class
      setSuccessFor(usernameLogin);
     }

     if(passwordLoginValue === ''){
      setErrorFor(passwordLogin, 'Please enter your password!');
     }else{
       setSuccessFor(passwordLogin);
     }
    
  
  
}

function setErrorFor(input, message){
  const formControl = input.parentElement; // .form-control
  const small = formControl.querySelector('small');
  
  //add error message inside small
  small.innerText = message;
  
  //add error class
  formControl.className = 'form-control error';
}

function setSuccessFor(input){
  const formControl = input.parentElement; // .form-control
  formControl.className = 'form-control success';
}



