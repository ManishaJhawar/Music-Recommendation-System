<?php

echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

	<head>
    	<link rel='stylesheet' type='text/css' href='table2.css'>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
      	
      	<!-- CSS Styles -->
		<style>
			.speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  			.speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  			.speech img {float: right; width: 40px }
		</style>
		
		<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = 'en-US';
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
      	
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
		<form id='tfnewsearch' method='get' action='searchTable2.php'>
		        <!--<input type='text' id='tfq' class='tftextinput2' name='searchQuery' size='21' maxlength='120' placeholder='Search songs here by name'>
		        <input type='submit' value='>' class='tfbutton2' name='submit_searchTable2'/>-->
		<div class='speech'>
		        
		        <input type='text' name='searchQuery' id='transcript' placeholder='Search / Speak' />
		        <img onclick='startDictation()' src='voiceSearch.png' />
		        <input type='submit' value='>' class='tfbutton2' name='submit_searchTable2'/>
		        
    			
 		 </div>
 		 </form>
		<div class='tfclear'></div>
	</div>
      
      <div style='overflow-x:auto;'>
      <table>
        <tr>
          <th>SongName</th>
          <th>Duration (min)</th>
        </tr>";
        
        	if ($result=mysqli_query($con,$sql))
          	{
          		while($row=mysqli_fetch_row($result))
            	{        
            		echo
            			"<tr>
              			<td>".$row[1]."</td>
              			<td>".(round($row[2]/60))."</td>
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
