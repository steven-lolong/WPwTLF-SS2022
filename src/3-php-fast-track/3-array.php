<?php 
$bike1 = "Hercules";
$bike2 = "Cube";
$bike3 = "Rose";
// Or 
$bikes = array("Hercules", "Cuba", "Rose");
echo count($bikes) . "<br/>";

// Indexed arrays 
$bikers = array();
$bikers[0] = "Biker_A";
$bikers[1] = "Biker_B";
$bikers[2] = "Biker_C";

// Associative arrays 
$bikersAndBikes = array("Biker_A" => "Hercules", "Biker_B" => "Cube", "Biker_C" => "Rose");

foreach($bikersAndBikes as $biker => $bikee){
  echo "Biker = $biker , bike = $bikee <br/>";
}

// Multidimensional Arrays 
$cars = array(
  array("Mercedes", 22, 18),
  array("BMW", 15, 13),
  array("Audi", 4, 12),
);
?>