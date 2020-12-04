<?php 
session_start();
session_unset();
session_destroy();
setcookie('email', '', 0, '/');
setcookie('name', '', 0, '/');
header('location:page-login.php');
?>