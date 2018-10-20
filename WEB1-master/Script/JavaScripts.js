

// AJAX code
function validateNames(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) {
xmlhttp = new XMLHttpRequest();
} else {
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "http://i379335.hera.fhict.nl/Script/validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}
	
//data validation on signup form
	 
	 function validate(){ 
		
		 
	var fname = document.homeform.fname;
	var lname = document.homeform.lname;
	var email = document.homeform.email;
	var pwd = document.homeform.pwd;
	var cpwd = document.homeform.cpwd;
     var letters = /^[A-Za-z]+$/; 
         

     var emailvalidate=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;		 
		

		  if(fname.value==""||lname.value==""||email.value==""||pwd.value==""||cpwd.value=="")
           
		   {
                alert("Please fill in all required fields!");
               
			    fname.focus();
			    lname.focus();
			   email.focus();
			   pwd.focus();
			   cpwd.focus();
                return false;
            } 
		 
		 
		 if((pwd.value) !=(cpwd.value)) {
				
				  alert("Error: Passwords do not match.")
				return false;
			}
		
			if((homeform.pwd.value).length<6) {
				 alert("Error: Password is weak. Password must have atleat 6 characters.");
				pwd_error.style.visibility="visible";
			 pwd.focus();
			 return false;	
				
			}
		
		 
         if(!letters.test(fname.value||lname.value))  
     {  
        alert("Error: First/Last Name contains invalid characters");
	    homeform.fname.focus();
	    return false;
       }
		 
		 	 if (!emailvalidate.test(email.value))  
  { 
    alert("Email is not valid");
	 
	  return false;
  }
		        alert("Congratulations! You are successfully signed up. Kindly login using your email id and password.");

    return true;
	
		}	
			
//data validation on login form

		function lvalidate(){
			var lemail = document.loginform.lemail;
	        var lpwd = document.loginform.lpwd; 
		   var letters = /^[A-Za-z]+$/;  
	     var lemailvalidate=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	
	
			if(lemail.value==="" || lpwd.value==="")
           
		   {   alert("Please fill in all required fields.");
			return false;
			   
            } 	
		   else	if(!lemailvalidate.test(lemail.value))  
     {  
        alert("Error: Email address is not valid.")
	    
	    return false;
       }
            else if((lpwd.value).length<6) {
				 alert("Error: Password is incorrect.");
				pwd_error.style.visibility="visible";
			 pwd.focus();
			 return false;	
				
			}
		
		       else 
{
return true;
}
		}