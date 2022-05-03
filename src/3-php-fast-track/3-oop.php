<?php
// parent class
class Car{
  const constant_1 = "hello PHP";
  private $wheel = 4;
  protected $topSpeed = 200;
  public function __construct(){
      echo "Constructor of Car<br/>";
  }
  public function __destruct(){
      echo "Destructor of Car<br/>";
  }
  public function setTopSpeed($newTopSpeed){
      $topSpeed = $newTopSpeed;
  }
  public function showTopSpeed(){
      echo $this->topSpeed . "<br/>";
  }
  public function printCons(){
      echo self::constant_1 . "<br/>";
  }
}

$cars = new Car();
$cars->printCons();
$cars->showTopSpeed();
// error, protected property
// echo $cars->topSpeed;

class Mercedes extends Car{
  public function __construct(){
      $this->topSpeed = 300;
      echo "Mercedes's constructor <br/>";
  }
  public function __destruct(){
      echo "Destructor of Mercedes <br/>";
  }
}

$typeCMercy = new Mercedes();
// Set topSpeed in Mercedes and call method of Car
$typeCMercy->showTopSpeed();

?>