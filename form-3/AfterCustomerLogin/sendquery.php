<?php
	if(isset( $_POST['submitQueryButton']))
	{
 		function validate_data($data)
 		{
 	 		$data = trim($data);
  			$data = stripslashes($data);
  			$data = strip_tags($data);
  			$data = htmlspecialchars($data);
  			/*$data = mysqli_real_escape_string($data);*/
  			return $data;    
 		}
 		
 		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
	<head>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
      	<style>
      	html { 
  background: url(headphones.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      	</style>
    </head>
    
    <body>";

 		$regid = validate_data( $_POST['regid'] );
 		$query = validate_data($_POST['message'] );
 		$queryid=rand(1,100000);
 		
 		//echo "admin id =".$adminid;

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'Music_System');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

 		$que="INSERT INTO Query (Query_ID,Question,C_ID) VALUES ('$queryid','$query','$regid')";
 
 		if(mysqli_query($con,$que))
 		{
			echo "Your query has been submitted.<br /><br /> Thankyou.<br/><br />Your query id : ".$queryid."  (Please keep a note of it)<br /><br />We will get back to you soon. <br /><br />You could go back and submit another query or explore MusiGLOBE.";
		}	

		else
		{
			echo "Error while populating into database<br/>".mysqli_error($con)."<br/>";
		}

 		mysqli_close($con);
 		echo "
    </body>
</html>";
	}
?>
