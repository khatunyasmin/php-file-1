<?php
$link = mysqli_connect("localhost","root","");
class number{

public $num;

public function myclick(){

$res = ($this->num *$this->num);
echo "<h2 style=background-color:orange;font-size:35px;>the number is 10 and the power is " .$res ."</h2>";
    
}


}

$d2 = new number;
$d2->num = mysqli_real_escape_string($link,$_REQUEST["c1"]);
$d2->myclick();




?>