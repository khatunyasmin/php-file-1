<?php
$link = mysqli_connect("localhost","root","");
class find{

public $birthyear;
public $year;
public $days;
public function myvalue(){

$days = ($this->year - $this->birthyear) * 365;
echo "<ins><h1 style=color:violet;>The Equivalent number of days is " .$days ."</h1>"."</ins>";
}


}

$d1 = new find;

$d1->year = mysqli_real_escape_string($link,$_REQUEST["b4"]);
$d1->birthyear = mysqli_real_escape_string($link,$_REQUEST["b1"]);
$d1->myvalue();






?>