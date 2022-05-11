<?php 
include "../helper/address.php";
function showHome(){
  require_once "../view/home.html";
}

function showContact(){
  include "../view/contact.html";
}

function show404(){
  include "../view/404.html";
}

?>