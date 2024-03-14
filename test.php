<?php 
class rectangle {

    public $length;
    public $width;
    public function getperimeter(){
         
         $result = 2 * ($this->length + $this->width );
         print "The perimeter is $result";
     }
 }

 //define a new class for inheritance

 class shape extends rectangle {

    public function display(){
        print "Inside Display function body.";
    }
 }

// Create object of the child class

$x1 = new shape;

$x1->length = 84;
$x1->width = 48;

// Call the methods
$x1->getperimeter();
print "<br>";
$x1->display();




//     class tempreture {
//         public $c;
//         public $f;
//         public $t;

//         function fn1(){
//             if($this->t == 'Celcius'){
//                 $this->f = ($this->c*9/5)+32;
//                 print "In fahrenheit : $this->f";
//             }elseif($this->t == 'Fahrenheit'){
//                 $this->c = ($this->f-32)*5/9;
//                 print "In celcius : $this->c";
//             }
//             else{
//                 print "Plese select Celcius or Fahrenheit";
//             }
//         }
//     }

//     $obj = new tempreture;

//     $obj->c = mysqli_real_escape_string($link,$_REQUEST['cel']);
//     $obj->f = mysqli_real_escape_string($link,$_REQUEST['fah']);
//     $obj->t = mysqli_real_escape_string($link,$_REQUEST['temptype']);

//   print  $obj->fn1();
?>