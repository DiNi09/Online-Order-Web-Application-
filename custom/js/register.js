function validateFirstname()
{
    var fname = document.getElementById("txtFname").value;
    if ((fname== "" || fname == null))
    {
         alert("Please enter your first name.");
         return false;
            
     }
     return true;
}
    

function validateLastname()
{
    var lname = document.getElementById("txtLname").value;
    if ((lname== "" || lname == null))
    {
         alert("Please enter your last name.");
         return false;
            
     }
     return true;
}
    
    
function validateEmail()
{
    var email = document.getElementById("txtEmail").value;
    var at = email.indexOf("@");
   var dt = email.lastIndexOf(".");
   var len = email.length;

   if((at < 2)||(dt-at < 2)||(len-dt < 2))
   {
      alert("Please enter a valid email address");
      return false;
   }
   return true;
}

    
function validateContact()
{
   var cno = document.getElementById("txtCnumber").value;
   if((isNaN(cno))||(cno.length != 10))
   {
      alert("Please enter a valid contact number");
      return false;
   }
   return true;
}
    
function validateAddress()
{
    var add = document.getElementById("txtAddress").value;
    if ((add== "" || add == null))
    {
         alert("Please enter your address");
         return false;
            
    }
    return true;
}  

            
function validatePassword()
{
   var pwd = document.getElementById("txtPassword").value;
   
   if((pwd.length < 5))
   {
      alert("Please enter a correct Password ");
      return false;
   }
    return true;
}

function Validate()
{
    if(validateFirstname() && validateLastname() && validateEmail() && validateContact() && validateAddress() && validatePassword())
    {
        alert("Registration is completed");
    }
    else
    {
        event.preventDefault();
    }
}
    