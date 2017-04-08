<?php
//session_start();

	if(isset( $_POST['viewPlaylistButton']))
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

 		$regid = validate_data( $_POST['playlistregid'] );
 		
 		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
	<head>
    	<link rel='stylesheet' type='text/css' href='viewCatalogue.css'>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
      	
    </head>
    
    <body>";

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'Music_System');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

		//Check if the song id is valid
		$query="SELECT SongName FROM Playlist WHERE C_ID =".$regid;
		
		echo "
		<div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>Song Name</th>
        </tr>";
        
        if ($result=mysqli_query($con,$query))
  		{
  			// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    		{
    			echo
            			"<tr>
              			<td>".$row[0]."</td>
            			</tr>\n";
    		}
  			// Free result set
  			mysqli_free_result($result);
		}
 		mysqli_close($con);
 		echo "</table>
    </div>
    </body>
</html>";
	}
?>




