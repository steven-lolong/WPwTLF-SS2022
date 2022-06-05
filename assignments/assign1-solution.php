<?php
// 2.2
$c = 0;
do{
  $a = 0;
  $b = 0;
  do{
    if($a != 0)
    print " ";
    $a++;
  }while($a <= $c);

  do{
    echo "*";
    $b++;
  }while($b < 5-$c);
  print "\n";
  $c++;
  }while($c < 5);


// 3.1
function fun($p1 , $p2){
  $get_result= array();
  if(count($p1) == count($p2)){
    for($i=0; $i < count($p1); $i++){
      $get_result[$i] = $p1[$i]." " .$p2[$i];
}
    }else{
      echo "Error";
    }
    
  return $get_result;
}

// 3.2
function  funExtractor($result){
  for($i=0; $i < count($result); $i++){
    echo "Content_".$i. "="." ". $result[$i]. "\n";

  }
} 

funExtractor(fun(['ab','ac'], [123,455]));

// 4.2
function triangle(){
  $nRow = readline("enter number of row (max: 10): ");
  $activeRow = $nRow;
  if($nRow > 0 && $nRow <= 10){
    if($nRow > 1){
      for($i = 0; $i <= $nRow; $i++){
        for($j=0; $j<=$i; $j++){
          if($j != 0){
            echo " ";
          }
        }
        for($k=0; $k < (2 * $activeRow- 1); $k++){
          echo "*";
        }
      echo "\n";
      $activeRow--;
      }
    }else{
      echo "*";
    }
  }else{
    echo "exceed max row";
  }
  echo "\n";
}
triangle();

// 5.1
class Member {
  public $acc_number;
  private $acc_name = "unknown";
  private $lst_bal = 0;
  public function deposit(){
    $this->lst_bal = (int) readline("Deposit (€): ");
  }
  public function withdraw(){
    $this->lst_bal -= (int) readline("Withdraw (€): "); 
  }
  public function print_balance(){
    echo $this->lst_bal . "\n";
  }
  public function print_name(){
    echo $this->acc_name . "\n";
  }
  public function updateName(){
    $this->acc_name = readline("Name: ");
  }
}

// 5.2
$ab = array();
for($i = 0; $i < 3; $i++){
  $ab[$i] = new Member();
  $ab[$i]->deposit();
  $ab[$i]->updateName();
  $ab[$i]->print_balance();
  $ab[$i]->withdraw();
  $ab[$i]->print_balance();
}

// 5.3
class Atm extends Member{
  private $lstTransDate;
  private $password="abcd";
  public function changePassword(){
    if(checkPassword()){
      $this->password = readline("Enter new password: ");
    }else{
      echo "wrong password \n";
    }
  }
  public function printBalance(){
    if(checkPassword()){
      $this->print_balance();
    }else{
      echo "wrong password \n";
    }

  }
  public function dopositMoney(){
    if(checkPassword()){
      $this->deposit();
      $this->print_balance();
    }else{
      echo "wrong password \n";
    } 
  }
  public function withdrawMoney(){
    if(checkPassword()){
      $this->withdraw();
      $this->print_balance();
    }else{
      echo "wrong password \n";
    } 
  }
  private function checkPassword(){
    $status = false;
    if($this->password == readline("Enter password: ")){
      $status = true;
    }else{
      $status = false;
    }
    return $status;
  }
}


// Bonus 2
interface Log{
  public function logIt($msg, $level);
}

abstract class LogData implements Log{
  public $msg, $lvl;
  public abstract function logIt($msg, $level);
}

class Logger extends LogData{
  public function logIt($msg, $level){
    $this->msg = $msg;
    $this->lvl = $level;
    echo "Successfull write " . $this->msg . " with level " . $this->lvl;
  }
}

$logger = new Logger();
$logger->logIt("hello world!", 2);


// Bonus 3
trait Log1{
  public function logIt1($msg, $level){
    echo $msg . " => " . $level;
  }
}

trait LogData1{
  public function logIt2($msg, $level){
    echo "Successfull write " . $msg . " with level " . $level;
  }
}

class Logger1{
  use Log1;
  use LogData1;
}

$logger1 = new Logger1();
$logger1->logIt1("no error!", 1);
$logger1->logIt2("Hello world!", 2);
?>