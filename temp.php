<?php 

$link = mysqli_connect("localhost","root","");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }




class Converter {
    public $c;
    public $f;
    public $t;
    public function convert() {
        if($this->t == 'cel'){
            $this->f = ($this->c*9/5)+32;
            echo "In Fahrenheit: ".$this->f."°F";
            
        }elseif($this->t == 'fah'){
            $this->c = ($this->f-32)*5/9;
            echo "In Celsius: ".$this->c."°C";
        }
        else{
            echo "Please select Celsius or Fahrenheit";
        }
    }
}
$obj = new Converter;
$temp = mysqli_real_escape_string($link,$_REQUEST['temp']);
$obj->t = mysqli_real_escape_string($link,$_REQUEST['temptype']);

        if($obj->t == 'cel'){
            $obj->c = $temp;
        } else {
            $obj->f = $temp;
        }

$obj->convert();


?>