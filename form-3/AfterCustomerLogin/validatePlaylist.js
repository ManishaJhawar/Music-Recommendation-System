function validate1()
{
	var error="";
	var name = document.getElementById("songname");
	if(name.value == "")
	{
		error = "Enter song id";
  		document.getElementById( "error_para1" ).innerHTML = error;
  		return false;
 	}

 	var regid=document.getElementById("songregid");
 	if(regid.value == "") 
 	{
 		error = "Enter your registration ID";
 		document.getElementById("error_para1").innerHTML = error;
  		return false;
 	}
}
