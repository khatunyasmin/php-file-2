<?php
 $connect = mysqli_connect("localhost","root","");

  class natural{

           public $n;
           public $i;
           public function num(){

        

                  print $this->i."<br>";
                  $this->i++;




         }



           }




  


 $obj=new natural;
 $obj->i=mysqli_real_escape_string($connect,$_REQUEST['a2']);
 $obj->num();









?>