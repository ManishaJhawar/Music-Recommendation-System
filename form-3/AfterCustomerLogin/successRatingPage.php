<?php
if(isset($_GET['regid'])){
    $regid=$_GET['regid'];
}else{
    $regid=12345;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
      	<meta charset='UTF-8'>
      	<title>Get recommendations</title>
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

<body>
	<!--<form role = "form" action="getRecommendation.php" method="post" class="login-form">
   <br />
   <input type="submit" value="Get song recommendation" class="tfbutton2" name="submitRatingButton"/>
	</form>-->
	<strong><h4>You have rated this song.<br /> Thankyou.<br /> You could go back and rate more songs or click on the below link to get song recommendations.<br/><br /></strong>
	<a href="getRecommendation.php?regid=<?php echo $regid;?>" class="btn btn-primary">Get recommendation<i class="fa fa-angle-right"></i></a>
</body>
</html>
