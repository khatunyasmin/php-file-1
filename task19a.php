<?php
class reverse{
public $fine;

public function myclick(){
while($this->fine >= 1){
    echo $this->fine ." ";
    $this->fine--;
}



}


}
 $r1 = new reverse;
 $r1->fine = 25;
 $r1->myclick();





?>
