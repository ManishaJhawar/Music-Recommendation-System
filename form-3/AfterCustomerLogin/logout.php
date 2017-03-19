<?php 
unset($_SESSION['user']); 
session_destroy();
header('location: http://localhost/OurProject/evento-free-music-event-template/index.html');
?>
