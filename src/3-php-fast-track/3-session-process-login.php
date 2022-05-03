<?php 
session_start();
// act as persistence 
$uName = "gerald";
// this is hash of "007" using md5;
$uPass = "9e94b15ed312fa42232fd87a55db0d39"; 

$privatePage = "./3-session-private-page.php";
$loginPage = "./3-session-login.php";

// create notification variable
if(!isset($_SESSION['notifyLogin'])) {
  $_SESSION['notifyLogin'] = "";
}

if(isset($_POST["uName"]) && isset($_POST["uPassw"])){
  if(($_POST["uName"] == $uName) && (md5($_POST["uPassw"]) == $uPass)){
    $_SESSION['login'] = true;
    header("Location: " . $privatePage);
  }else{
    $_SESSION['notifyLogin'] = "incorrect username or password";
    header("Location: " . $loginPage);
  }
}else{
  header("Location: " . $loginPage);
}
?>