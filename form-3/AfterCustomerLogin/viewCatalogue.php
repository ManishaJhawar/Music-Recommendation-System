<?php

if(isset($_GET['regid'])){
    $regid=$_GET['regid'];
}else{
    $regid=6789;
}

echo "<!DOCTYPE html>

<html lang='en'>
	<head>
    	<link rel='stylesheet' type='text/css' href='viewCatalogue.css'>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
      	
      	<script type='text/javascript' src='validateRatingForm.js'></script>
      	<script type='text/javascript' src='validatePlaylist.js'></script>
      	<script type='text/javascript' src='validateViewPlaylist.js'></script>
      	
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
		<form id='tfnewsearch' method='POST' action='searchCatalogue.php'>
		        <input type='text' id='tfq' class='tftextinput2' name='searchQuery' size='21' maxlength='120' placeholder='Search songs here by name'>
		        <input type='submit' value='>' class='tfbutton2' name='submit_searchCatalogue'/>
		</form>
		<div class='tfclear'></div>
	</div><br />
	
	<!--<form>
  <label for='fname'>First Name</label>
  <input type='text' id='fname' name='fname'>
  <label for='lname'>Last Name</label>
  <input type='text' id='lname' name='lname'>
</form>-->
      
   <form role = 'form' action='getRating.php' method='post' class='login-form' onsubmit='return validate();' id='form1'>
   <div class = 'form-group'>
      <input type = 'text' class = 'form-control' id = 'name' placeholder = 'Enter the song ID here' name='songIDtextbox' />
      <input type='number' class='form-control' placeholder='Enter your registration ID here' value='".$regid."' name='regid' id='regid'/>
      <input id='ratingValue' type='number' min='1' max='5' step='1' placeholder='Rate this song (1 - 5)' name='ratingValue'/>
      <input type='submit' value='Rate this song now  >>' class='tfbutton7' name='submitRatingButton'/><br />
      <label class='tip'><strong>Tip : Please verify your registration ID before proceeding</strong></label>
      <strong><p id='error_para' class='tip'></p></strong>
   </div>
   </form>
   
   <form role = 'form' action='addToPlaylist.php' method='post' class='login-form' onsubmit='return validate1();' id='form2'>
   <div class = 'form-group'>
      <input type = 'text' class = 'form-control' id = 'songname' placeholder = 'Enter the song ID here' name='songIDtextbox' />
      <input type='number' class='form-control' placeholder='Enter your registration ID here' value='".$regid."' name='songregid' id='songregid'/>
      <input type='submit' value='Add to playlist  >>' class='tfbutton7' name='addToPlaylistButton'/><br />
      <label class='tip'><strong>Tip : Please verify your registration ID before proceeding</strong></label>
      <strong><p id='error_para1' class='tip'></p></strong>
   </div>
   </form>
   
    <form role = 'form' action='viewPlaylist.php' method='post' class='login-form' onsubmit='return validate2();' id='form3'>
   <div class = 'form-group'>
      <input type='number' class='form-control' placeholder='Enter your registration ID here' value='".$regid."' name='playlistregid' id='playlistregid'/>
      <input type='submit' value='View my playlist  >>' class='tfbutton7' name='viewPlaylistButton'/><br />
      <label class='tip'><strong>Tip : Please verify your registration ID before proceeding</strong></label>
      <strong><p id='error_para2' class='tip'></p></strong>
   </div>
   </form>
   
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
