<?php
//session_start();

	if(isset( $_POST['addToPlaylistButton']))
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

 		$songid = validate_data( $_POST['songIDtextbox'] );
 		$regid = validate_data( $_POST['songregid'] );
 		$playlistid="P".$regid;
 		//echo "playlist id = ".$playlistid;

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'WTAproject');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

		//Check if the song id is valid
		$query="SELECT Song_Name FROM Song WHERE Song_id = '".$songid."'";
		if($result=mysqli_query($con,$query))
 		{
 			$row=mysqli_fetch_row($result);
 			//echo "row[0] = ".$row[0];
 			if($row[0]=="")
 			{
 				echo "You have entered a wrong song id.<br /><br />Please go back and enter a correct one.";
 			}
 			else
 			{

 		$que="INSERT INTO Playlist VALUES ('$regid','$playlistid','$row[0]')";
 
 		if(mysqli_query($con,$que))
 		{
			echo "<strong>Added to playlist.<br /><br />You could go back and add other songs too to the playlist.</strong>";
		}	

		else
		{
			echo "<strong>You have already added this song to the playlist.<br/>Go back and add some other song.</strong>";
		}
		}
		}
		else
		{
			echo "<strong>You have entered a wrong song id.<br /><br />Please go back and enter a correct one.</strong>";
		}
 		mysqli_close($con);
 		echo "
    </body>
</html>";
	}
	
?>




