<?php

header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us. We will reply you back soon. Have a look at the FAQs section too for your answer'
	);
	$status2 = array(
		'type'=>'failure',
		'message'=>'There was some problem in submitting your query. Please resubmit it.'
	);
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
    
    <body>"

 		$regid = validate_data( $_POST['regid'] );
 		$query = validate_data( $_POST['message'] );
 		$queryid=rand(1,100000);
 		
 		//echo "admin id =".$adminid;

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'WTAproject');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

 		$que="INSERT INTO Query (Query_ID,Question,C_ID) VALUES ('$queryid','$query','$regid')";
 
 		if(mysqli_query($con,$que))
 		{
			//echo "Your query has been submitted.<br /><br /> Thankyou.<br/><br />Your query id : ".$queryid."  (Please keep a note of it)<br /><br />You will be replied back soon. <br /><br />You could go back and submit another query or explore MusiGLOBE.";
			echo json_encode($status);
		}	

		else
		{
			//echo "Error while populating into database<br/>".mysqli_error($con)."<br/>";
			echo json_encode($status2);
		}

 		mysqli_close($con);
 		echo "
    </body>
</html>";
	}
?>
