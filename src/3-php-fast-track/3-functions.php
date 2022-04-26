<?php 
// function abstraction 
function sayHello(){
  echo "Hello <br/>";
}
// function application (call)
sayHello();

function funEmpty(){
  echo "Hello <br/>";
}

function funRet(){
  return "Hello <br/>";
}

function funParam($param1, $param2){
  echo "param1 = $param1, param2 = $param2 <br/>";
}

function funAdd($a, $b){
  return ($a + $b);
}

// function application
echo funAdd(3,4) . "<br/>";
?>