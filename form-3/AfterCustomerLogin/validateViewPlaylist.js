function validate2()
{
 	var regid=document.getElementById("playlistregid");
 	if(regid.value == "") 
 	{
 		error = "Enter your registration ID";
 		document.getElementById("error_para2").innerHTML = error;
  		return false;
 	}
}
