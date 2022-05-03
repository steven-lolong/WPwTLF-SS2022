<?php 
if(isset($_COOKIE["wp1"])){
  echo "Cookie1 (not secure): " . $_COOKIE["wp1"] . "<br/>";
}
if(isset($_COOKIE["wp2"])){
  echo "Cookie2 (secure): " . $_COOKIE["wp2"] . "<br/>";
}
?>