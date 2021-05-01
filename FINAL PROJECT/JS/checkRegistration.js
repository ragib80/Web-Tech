//reg
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');

function validateForm(){
      var vname = username.value.trim(); 
      var vemail = email.value.trim();
      var vpass = password.value.trim();
      var vconpass = confirmpassword.value.trim();

      if (vname === '' ){
        alert("Please enter username!");  
        return false;  
      }
      else if (vemail === '') {
        alert("Please enter email!");  
        return false;  
      }
      else if (!isEmail(vemail)) {
        alert("Email is not valid!");
        return false;
      }
      else if (vpass === '' ) {
         alert("Please enter password!");  
        return false;  
      }
      else if (vpass.length<4) {
        alert("Password must be above 3 characters!");  
        return false; 
      }
      else if (vconpass === '') {
        alert("Please confirm your password!");  
        return false;
      }
      else if (vpass !== vconpass) {
        alert("Password not matched!");  
        return false;
      }
      else{
        alert("Account Created!");   
        window.location.href = "login.php";  
      }
}

form.addEventListener('submit', (e)=>{
  e.preventDefault();
  
  checkInputs();
});

function checkInputs(){
    // get the values from the inputs
    const usernameValue = username.value.trim(); //trim removes whitespace
    const emailValue= email.value.trim(); 
    const passwordValue=  password.value.trim(); 
    const confirmpasswordValue= confirmpassword.value.trim(); 

  
    
    

    if(usernameValue === ''){
      // show error
      // add error class
      setErrorFor(username, 'Please enter your username!');
    }//else if (true) {}
     else{
      // add success class
      setSuccessFor(username);
    }
  
    if(emailValue === ''){
      setErrorFor(email, 'Please enter your email!');
    } else if(!isEmail(emailValue)){
      setErrorFor(email, 'Email is not valid!');
    } else{
      setSuccessFor(email);
    }
  
    if(passwordValue === ''){
      setErrorFor(password, 'Please enter your password!');
    } else if (passwordValue.length<4) {
        setErrorFor(password, 'Must be above 3 characters!');
    }else{
      setSuccessFor(password);
    }
    
    if(confirmpasswordValue === ''){
      setErrorFor(confirmpassword, 'Please enter your password again!');
    }else if(passwordValue !== confirmpasswordValue){
      setErrorFor(confirmpassword, 'Password does not match!');
    }else{
      setSuccessFor(confirmpassword);
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

function isEmail(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


