<?php
//session_start();

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

if(isset($_GET['regid'])){
    $regid=$_GET['regid'];
}else{
    $regid=6789;
}

	
		//echo "regid = ".$regid;
 		
 		//$regid = validate_data( $_POST['form-username'] );
 		//$password = validate_data( $_POST['form-password'] );

 		$host = 'localhost';
 		$user = 'root';
 		$pass = '';
 		
 		$con=mysqli_connect($host, $user, $pass,'WTAproject');
 		if(mysqli_connect_errno())
 		{
			echo "Error while connecting ".mysqli_connect_error()."<br/>";
		}

 		$sql="SELECT S_ID,Rating FROM Rating WHERE C_ID=".$regid;
 		$ratings=array();
 		
		if ($result=mysqli_query($con,$sql))
  		{
  			// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    		{
    			//echo $row[0]." ".$row[1];
    			array_push($ratings,"$regid,$row[0],$row[1]");
    		}
  			// Free result set
  			mysqli_free_result($result);
		}
		
		$filename="outputFinal.csv";
		//chmod($filename, 0777);
		
		$file = fopen($filename,"a");

foreach ($ratings as $line)
  {
  fputcsv($file,explode(',',$line));
  }
  
fclose($file);
//print_r($ratings);
 		mysqli_close($con);
 		
$mystring = system('python collaborative_filtering.py '.$regid);

//$result = shell_exec('python collaborative_filtering.py '.$one);

echo "
    </body>
</html>";

?>
