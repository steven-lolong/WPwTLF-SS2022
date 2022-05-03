<?php 
require_once "model.php";
if(isset($_SESSION['login']) && ($_SESSION['login'] == true)){
  if(isset($_POST['logout'])){
    session_destroy();
    header('Location: #');
  }else{
    $uNameLogin = "Gerald";
    require_once "view_logged_in.html";
  }
}else{
  if(isset($_POST["uName"]) && isset($_POST["uPassw"])){
    if(checkUser($_POST["uName"], $_POST["uPassw"])){
      $_SESSION['login'] = true;
      header("Location: #");
    }
  }
  require_once "view_login.html";
}
?>