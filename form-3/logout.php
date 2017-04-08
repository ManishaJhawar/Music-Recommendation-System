<?php 
unset($_SESSION['user']); 
session_destroy();
header('location: /Music-Recommendation-System/index.html');
?>
