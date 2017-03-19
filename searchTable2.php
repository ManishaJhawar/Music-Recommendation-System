<?php
	if(isset( $_POST['submit_searchTable2']))
	{
		echo "<!DOCTYPE html>

<html lang='en'>
	<head>
    	<link rel='stylesheet' type='text/css' href='table2.css'>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
    </head>
    
    <body>";
 		function validate_data($data)
 		{
 	 		$data = trim($data);
  			$data = stripslashes($data);
  			$data = strip_tags($data);
  			$data = htmlspecialchars($data);
  			/*$data = mysqli_real_escape_string($data);*/
  			return $data;    
 		}

 		$searchQuery = validate_data( $_POST['searchQuery'] );
 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'WTAproject');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

 		$sql="SELECT Song_id,Song_Name,Duration FROM Song WHERE Song_Name='".$searchQuery."';";
 		
 		echo "
 		<div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>Song_ID</th>
          <th>SongName</th>
          <th>Duration</th>
        </tr>";
        
 		
		if ($result=mysqli_query($con,$sql))
          	{
          		while($row=mysqli_fetch_row($result))
            	{        
            		echo
            			"<tr>
              			<td>".$row[0]."</td>
              			<td>".$row[1]."</td>
              			<td>".$row[2]."</td>
            			</tr>\n";
            	}
            	mysqli_free_result($result);
          	}
    mysqli_close($con);
    echo "</table>
    </div>
    </body>
</html>";
	}
	
	
?>
