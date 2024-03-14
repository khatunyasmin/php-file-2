<?php


class yasu{
            
    public $a=0;
    public $b=0;
         

    public function dispalyarea()
          
     {

        $r=$this->a * $this->b;

        echo "The area is ".$r;
        echo"<br>";

     }

     public function __construct($x,$y)
    {
      $this->a=$x;
      $this->b=$y;


    }

}
$obj1=new yasu(50,60);
$obj2=new yasu(20,30);


       $obj1->dispalyarea();
       $obj2->dispalyarea();
?>