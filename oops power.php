<?php
$connect = mysqli_connect("localhost","root","");
      class number{
          public $a;

           public $c;


  public function power(){

       $c=($this->a*$this->a);
       echo"The power is".$c;

  }

      }

        $obj= new number;
        $obj->a=mysqli_real_escape_string($connect,$_REQUEST['a2']);
        $obj->power();


?>