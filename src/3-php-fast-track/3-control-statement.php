<?php 
$weather = "rain";
$temperatur = 10;
// if statement 
if($weather == "rain"){
  echo "use umbrella <br/>";
}

// if-else statement 
if($weather == "rain"){
  echo "bring umbrella <br/>";
}else{
  echo "leave umbrella at home <br/>";
}

// if-elseif statement 
if($temperatur < 2){
  echo "wear 4 layers <br/>";
}elseif(($temperatur >= 2) && ($temperatur < 10)){
  echo "wear 3 layers <br/>"; 
}elseif(($temperatur >= 10) && ($temperatur < 18)){
  echo "wear 2 layers <br/>";
}elseif(($temperatur >= 18) && ($temperatur < 25)){
  echo "wear 1 layers <br/>";
}else{
  echo "wear t-shirt <br/>"; 
}

// switch-case 
switch($temperatur){
  case ($temperatur >= 2) && ($temperatur < 10):
    echo "wear 3 layers <br/>"; 
    break;
  case ($temperatur >= 10) && ($temperatur < 18):
      echo "wear 2 layers <br/>"; 
    break; 
  case ($temperatur >= 18) && ($temperatur < 25):
      echo "wear 1 layers <br/>"; 
    break; 
  default:
    echo "wear t-shirt <br/>";
}
?>