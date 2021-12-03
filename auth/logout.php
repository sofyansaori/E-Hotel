<?php 
 
session_start();
session_destroy();
 
header("location:http://localhost/e-hotel/auth/login.php");
 
?>