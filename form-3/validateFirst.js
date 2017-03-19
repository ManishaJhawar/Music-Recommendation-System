function validate()
{
	window.alert("Hello");
	var error="";
	var name = document.getElementById("form-username");
	if(name.value == "")
	{
		error = "Enter a name hello";
		window.alert("Successfully registered");
  		document.getElementById( "error_para" ).innerHTML = error;
  		return false;
 	}

 	var email = document.getElementById( "form-email" );
 	if(email.value == "" || email.value.indexOf("@")== -1)
 	{
  		error = "Enter an email-id";
  		document.getElementById("error_para").innerHTML = error;
  		return false;
 	}

 	var password = document.getElementById("form-password");
 	if(password.value == "") 
 	{
 		error = "Enter password";
 		document.getElementById("error_para").innerHTML = error;
  		return false;
 	}
 	if(password.value.length <6 || password.value.length>12)
 	{
 		error = " Password must be of 6 - 12 characters. ";
  		document.getElementById("error_para").innerHTML = error;
  		return false;
 	}
 	
 	var cpass=document.getElementById("form-cpassword")
 	if(cpass.value!=password.value)
 	{
 		error="Confirm password doesn't match with password";
 		document.getElementById("error_para").innerHTML = error;
  		return false;
  	}
 	
	else
 	{
 		document.getElementById("error_para").innerHTML ="You have successfully registered";
 		window.alert("Successfully registered");
  		return true;
 	}
}
