<?php 
session_start();
session_destroy();
$loginPage = "./3-session-login.php";
header('Location: ' . $loginPage);
?>