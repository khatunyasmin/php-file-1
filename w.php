<?php
$x =100;
if($x>150){
    echo "the condition is false";
}else{
    echo "the condition is true";
}
echo "<br>"."<br>";
$d =20;
if($d >30){
    echo "the condition is false";
}elseif($d =20){
    echo "the condition is almost true";
}else{
    echo "there is one condition true";
}

echo "<br>"."<br>";
$s = 100;
print ($s < 250) ? 'inside if' : 'inside else';//another short hand way to implement if else statement 






//switch case statement
echo "<br>"."<br>";
$V = "one";
switch($V){
    case "six" : echo "the value is not match";
    break;
    case "three":echo "the value is again not match";
    break;
    case "five":echo "the value is again also match";
    break;
    case "one": echo "the value is completely match"."<br>";
    break;
    default: echo "the value is in the default part";
}

?>
