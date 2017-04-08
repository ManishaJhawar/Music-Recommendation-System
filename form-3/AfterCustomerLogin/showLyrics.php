<?php
//session_start();
        // $song_id=$_POST(['songIDtextbox']);
	if(isset( $_POST['showLyrics']))
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

 		//$regid = validate_data( $_POST['playlistregid'] );
 		
 		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
	<head>
    	<link rel='stylesheet' type='text/css' href='viewCatalogue.css'>
    	 <link rel='stylesheet' type='text/css' href='google.css'>
      	<meta charset='UTF-8'>
      	<title>database connections</title>
      	
    </head>
    
    <body>
    

<form> <input  value='TranslateLyrics  >>' class='tfbutton7' name='translateLyrics'/><br />   </form>
    
    <div id='google_translate_element'></div>

<script type='text/javascript'>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>


    
    
    
    
    ";          $songID = validate_data( $_POST['songIDtextbox'] );
 		//$regid = validate_data( $_POST['songregid'] );

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'Music_System');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

		//Check if the song id is valid
		$query="SELECT lyrics FROM Lyrics where Song_id='".$songID."'";
		
echo "
<form >
  <div class = 'form-group'>
      
      
      <strong><p id='error_para1' class='tip'></p></strong>
   </div>
   </form>
		<div style='overflow-x:auto;'>
      <table>
      <h1 class='tip'></h1>
        <tr>
          <th>Song Lyrics</th></form>
          
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




