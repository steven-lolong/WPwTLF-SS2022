<?php 
trait Car{
  public function start(){
    echo "Start <br/>";
  }
  public function stop(){
    echo "Stop <br/>";
  }
}

class Mercedes{
  use Car;
}

$newM = new Mercedes();
$newM->start();
$newM->stop();

?>