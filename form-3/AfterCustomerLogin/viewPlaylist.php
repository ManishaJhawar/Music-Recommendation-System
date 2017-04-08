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
		$query="SELECT SongName,genre FROM Playlist WHERE C_ID =".$regid;
		$rock = 0;
		$pop = 0;
		$jazz = 0;
		$funk = 0;
		$hiphop = 0;
		
		
		echo "
		<div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>Song Name</th>
          <th>Genre</th>
        </tr>";
        
        if ($result=mysqli_query($con,$query))
  		{
  			// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    		{
    		
    			echo
            			"<tr>
              			<td>".$row[0]."</td>
              			<td>".$row[1]."</td>
            			</tr>\n";
            	if ($row[1]=="Rock")
            	{
            		$rock = $rock + 1;
            	}
            	elseif ($row[1]=="Pop")
            	{
            		$pop = $pop + 1;
            	}
            	elseif ($row[1]=="Jazz")
            	{
            		$jazz = $jazz + 1;
            	}
            	elseif ($row[1]=="Funk")
            	{
            		$funk = $funk + 1;
            	}
            	else
            	{
            		$hiphop = $hiphop + 1;
            	}
    		}
  			// Free result set
  			mysqli_free_result($result);
		}
 		mysqli_close($con);
 		
 		/*echo "rock = ".$rock;
 		echo "pop = ".$pop;
 		echo "jazz = ".$jazz;
 		echo "funk = ".$funk;
 		echo "hiphop = ".$hiphop;*/
 		
 		$data=array();
		array_push($data, $rock);
		array_push($data, $pop);
		array_push($data, $jazz);
		array_push($data, $funk);
		array_push($data, $hiphop);
		

	$visualize=json_encode($data);
 		
 		echo "</table>
    </div>
    ";
	}
?>

<br/><br/><br/>
<b>Performance Graph</b>
<br/><br/>
<div id='chart'></div>

	<script>
	var data = '<?= $visualize; ?>';
	var fdata = JSON.parse(data);
	
	window.alert(fdata);

	var dt=[];

		dt.push(fdata[0]);
		dt.push(fdata[1]);
		dt.push(fdata[2]);
		dt.push(fdata[3]);
		dt.push(fdata[4]);

  window.alert(dt);

	 </script>	
	<script type='text/javascript' src='playlistGraph.js'> </script>
<?php 
echo "Hello";
print ($visualize);?>
</body>
</html>




