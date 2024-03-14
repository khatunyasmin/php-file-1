<?php
$link = mysqli_connect("localhost","root","");
class number{
public $check;
public function myfnq(){
while($this->check <= 50){
    echo $this->check ." " ;
    $this->check++;
}

}


}

$g1 = new number;
$g1->check =  mysqli_real_escape_string($link,$_REQUEST["k4"]); ;
$g1 ->myfnq();


?>
