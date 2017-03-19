function validate()
{
	var error="";
	var name = document.getElementById("form-username");
	if(name.value == "")
	{
		error = "Enter registration id";
  		document.getElementById( "error_para" ).innerHTML = error;
  		return false;
 	}

 	var password = document.getElementById("form-password");
 	if(password.value == "") 
 	{
 		error = "Enter password";
 		document.getElementById("error_para").innerHTML = error;
  		return false;
 	}
}
