<?php

 

 $connect = mysqli_connect("localhost","root","");
 class number{
    public $a;
    public $b;
    public $c;


    public function ang()
    {

        $c=180-($this->a+$this->b);

        echo "The third trinagle is ".$c;
    }
 }

 $obj =new number;

 $obj->a=mysqli_real_escape_string($connect,$_REQUEST["a1"]);
 $obj->b=mysqli_real_escape_string($connect,$_REQUEST["a2"]);
 echo $obj->ang();
 

           
?>