// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//validating in client side//

function validate(){
  var name=document.signup_form.name.value;
  var email=document.signup_form.email.value;
  var password=document.signup_form.password.value;
  var con_pass=document.signup_form.con_password.value;
  var namergx = /[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
  var emailrgx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var passrgx=/^[0-9a-zA-Z]{6,8}$/;
    if(name.match(namergx))
    {
        document.getElementById("namerror").innerHTML="";
    }
    else if(name=="")
    {
        document.getElementById("namerror").innerHTML="Enter your name..!";
        document.signup_form.name.focus();
        return false;
    }
    else{
      document.getElementById("namerror").innerHTML="Enter valid name..!";
      document.signup_form.name.focus();
      return false;
    }
    if(email.match(emailrgx))
    {
        document.getElementById("emailerror").innerHTML="";
    }
    else if(email=="")
    {
        document.getElementById("emailerror").innerHTML="Enter your email..!";
        document.signup_form.email.focus();
        return false;
    }
    else{
      document.getElementById("emailerror").innerHTML="Enter valid email..!";
      document.signup_form.email.focus();
      return false;
    }
    if(password.match(passrgx))
    {
        document.getElementById("password_error").innerHTML="";
    }
    else if(password=="")
    {
        document.getElementById("password_error").innerHTML="Enter your password..!";
        document.signup_form.password.focus();
        return false;
    }
    else{
      document.getElementById("password_error").innerHTML="Enter valid password..!";
      document.signup_form.password.focus();
      return false;
    }
    if(password==con_pass)
    {
        document.getElementById("con_password_error").innerHTML="";
    }
    else if(con_pass ==""){
        document.getElementById("con_password_error").innerHTML="Verify your password..!";
        document.signup_form.password.focus();
        return false;
    }
    else{
        document.getElementById("con_password_error").innerHTML="password not matching..!";
        document.signup_form.password.focus();
        return false;
    }
    return true;
}