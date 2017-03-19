<?php
	if(isset( $_POST['submit_adminform']))
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

 		$adminid = validate_data( $_POST['form-username'] );
 		$password = validate_data( $_POST['form-password'] );
 		
 		//echo "admin id =".$adminid;

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'WTAproject');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

 		$sql="SELECT AdminPassword,AdminName FROM Admin WHERE Admin_ID = '".$adminid."'";

		if ($result=mysqli_query($con,$sql))
  		{
  			// Fetch one and one row
  			$row=mysqli_fetch_row($result);
  			//echo "row [0] = ".$row[0]."<br />";
    		if ($row[0]==$password)
    		{
    			//echo "Enetered if";
    			header("Location: http://localhost/OurProject/evento-free-music-event-template/form-3/AfterCustomerLogin/AdminPage.php?adminname=".urlencode($row[1])."& adminid=".urlencode($adminid));
    			//header ("Location : http://localhost/OurProject/evento-free-music-event-template/form-3/AfterCustomerLogin/AdminPage.php?adminname=".urlencode($row[1])."& adminid=".urlencode($adminid));
    		}
    		else
    		{
    			echo "Invalid admind ID or password<br /><br />Please re-enter valid details";
    			header("Refresh:2; url=http://localhost/OurProject/evento-free-music-event-template/form-3/adminlogin.html#",true,303);
    		}
  			// Free result set
  			mysqli_free_result($result);
		}
		else
		{
			echo "Invalid admin ID<br /><br />Please re-enter valid details";
			header("Refresh:2; url=http://localhost/OurProject/evento-free-music-event-template/form-3/adminlogin.html#",true,303);
		}

 		mysqli_close($con);
	}
?>
