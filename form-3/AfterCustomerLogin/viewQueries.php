<?php

echo "<!DOCTYPE html>

<html lang='en'>
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
		
 		$sql="SELECT Question,C_ID FROM Query;";
 		
      echo "
      <div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>Question</th>
          <th>Customer ID</th>
        </tr>";
        
        	if ($result=mysqli_query($con,$sql))
          	{
          		while($row=mysqli_fetch_row($result))
            	{        
            		echo
            			"<tr>
              			<td>".$row[0]."</td>
              			<td>".$row[1]."</td>
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
