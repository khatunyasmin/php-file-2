<?php
$connect = mysqli_connect("localhost","root","");
      class mars{
             public $w;

             public $m;


  public function sum(){

       $m=$this->w*(38/100);

       echo $m;
      }
        
  }
    
        $obj= new mars;
        $obj->w=mysqli_real_escape_string($connect,$_REQUEST['e1']);
        //$obj->m=mysqli_real_escape_string($connect,$_REQUEST['m1']);
        $obj->sum();


?>