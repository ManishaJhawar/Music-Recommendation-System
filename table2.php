<?php

echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

	<head>
    	<link rel='stylesheet' type='text/css' href='table2.css'>
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
		
 		$sql="SELECT Song_id,Song_Name,Duration FROM Song;";
 		
      echo "
      
      <div id='tfheader'>
		<form id='tfnewsearch' method='POST' action='searchTable2.php'>
		        <input type='text' id='tfq' class='tftextinput2' name='searchQuery' size='21' maxlength='120' placeholder='Search songs here by name'>
		        <input type='submit' value='>' class='tfbutton2' name='submit_searchTable2'/>
		</form>
		<div class='tfclear'></div>
	</div>
      
      <div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>Song_ID</th>
          <th>SongName</th>
          <th>Duration (s)</th>
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
?>
