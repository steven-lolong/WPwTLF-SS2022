<?php 
/**
 * @file: Variable and Type
 */

 $vStr = "This is string";
 $vInt = 323;
 $vBoolean = true; //false
 $vDouble = 9.9;
 $vNull = null;
 $vArray = Array(1,3,5,7);
 echo '$vStr = ' . $vStr . " : " . gettype($vStr) . "<br/>";
 echo '$vInt = ' . $vInt . " : " . gettype($vInt)  . "<br/>";
 echo '$vBoolean = ' . $vBoolean . " : " . gettype($vBoolean)  . "<br/>";
 echo '$vDouble = ' . $vDouble . " : " . gettype($vDouble)  . "<br/>";
 echo '$vNull = ' . $vNull . " : " . gettype($vNull)  . "<br/>";
 echo '$vArray = ' . "<br/>";
 print_r($vArray);
 echo "<br/> : " . gettype($vArray)  . "<br/>";

 echo 'cast $vInt to string, new type: ' . gettype((string)$vInt) . "<br/>";
 echo 'cast $vBoolean to integer, new type: ' . gettype((int)$vBoolean) . "<br/>";
 echo "cast $vStr to integer, old value: $vStr <br/>";
 settype($vStr, "integer");
 echo "New type: " . gettype($vStr) . ", value $vStr <br/>";
?>