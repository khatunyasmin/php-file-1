<?php

$link = mysqli_connect("localhost","root","");

class color{


public $check;
public function mychecks1(){

switch($this->check){
    case "red": echo "<ins><b style=color:red;font-size:35px;>The color is matched and it is red" ."<br>"."</b>"."</ins>";
    break;
    case "blue":echo "<ins><b style=color:blue;font-size:35px;>The color is matched and it is blue" ."<br>"."</b>"."</ins>";
    break;
    case "green":echo "<ins><b style=color:green;font-size:35px;>The color is matched and it is green"."<br>"."</b>"."</ins>";
    break;
    case "yellow":echo "<ins><b style=color:yellow;font-size:35px;>The color is matched and it is yellow"."<br>"."</b>"."</ins>";
    break;
    case "orange":echo "<ins><b style=color:orange;font-size:35px;>The color is matched and it is orange"."<br>"."</b>"."</ins>";
    break;
    default:echo "the color is   not matched";
    
}

}

}

$f1 = new color;
$f1->check =mysqli_real_escape_string($link,$_REQUEST["a1"]);
$f1->mychecks1();



?>