<?php


class age{


 public $y;
 public $a;
 public $c;
 
 public function  ag(){

     
         $a=($this->c-$this->y)*365;
         
         echo "The days is."." ".$a;
         echo"<br>";
         

 }
}

$obj=new age;
$obj->c=mysqli_real_escape_string($connect,$_REQUEST['a2']);
$obj->y=mysqli_real_escape_string($connect,$_REQUEST['a1']);
$obj->ag();

?>