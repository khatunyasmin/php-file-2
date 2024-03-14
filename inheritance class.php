<?php

class yasu{

 public $a;
 public $b;
       public function sum(){

 $result=($this->a + $this->b);

   echo "The answer is $result";
   }
}

class uzma extends yasu{

public function sub(){

$result2=($this->a  -$this->b);

echo"The answer is $result2";

}



}


   $obj= new uzma;

   $obj->a=50;
   $obj->b=40;


   $obj->sum();

   echo"<br>";
   $obj->sub();




?>