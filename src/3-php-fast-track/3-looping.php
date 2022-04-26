<?php 
$a = 1;
// while 
while($a < 5){
  echo "a = $a <br/>";
  $a++;
}

// do-while 
do{
  echo "a = $a <br/>";
  $a++;
}while($a < 5);

// prove of post-test
$b = 2;
do{
  echo "b = $b<br/>";
}while($b < 2);

// for 
for($i = 1; $i < 10; $i++){
  echo "i = $i <br/>";
}

// nested looping 
for($i = 1; $i < 5; $i++){
  for($j = $i; $j < 5; $j++){
    echo "*";
  }
  echo "<br/>";
}

// iteration 
$colors = array("Red", "Green", "Blue");
foreach($colors as $value){
  echo "$value <br/>";
}

// extracting index of array 
$colorsHex = array("red" => "#ff0000", "green" => "#00ff00", "blue" => "#0000ff");
foreach($colorsHex as $indx => $val){
  echo "Index = $indx, Value = $val <br/>";
}
?>