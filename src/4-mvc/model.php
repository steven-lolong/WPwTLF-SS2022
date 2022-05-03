<?php 
session_start();

function checkUser($uname, $upass){
  // act as persistence 
  $uName = "gerald";
  // this is hash of "007" using md5;
  $uPass = "9e94b15ed312fa42232fd87a55db0d39";

  $check = false;
  
  if(($uname == $uName) && (md5($upass) == $uPass)){
    $check = true;
  }
  return $check;
}
?>