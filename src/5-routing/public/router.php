<?php 
include "../config/global_env.php";
include "../controller/controller.php";


if(isset($_GET["routing"])){
switch($_GET["routing"]){
  case "home":
    showHome();
  break;
  case "contact":
    showContact();
  break;
  default:
    show404();
}
}else{
  showHome();
}

?>