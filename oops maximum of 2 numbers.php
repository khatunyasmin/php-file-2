<?php
$connect = mysqli_connect("localhost","root","");
    
class number{

public $a;
public $b;

      public function max(){

       if($this->a>$this->b)

       {
        print $this->a ."is maximum number";
       }
        else if ($this->b>$this->a)
      {
        print $this->b."is maximum number ";
      }
      else
      {
         print "numbers is equal";
         

      }
      }
}



$obj=new number;

$obj->a=mysqli_real_escape_string($connect,$_REQUEST['d1']);
$obj->b=mysqli_real_escape_string($connect,$_REQUEST['d2']);
$obj->max();

/*class yasu{

    public $a;
    public $b;

    public function __construct($x,$y)
    {
        $this->a=$x;
        $this->b=$y;
    }


    public function max(){

        if($this->a>$this->b)
        {
            print $this->a ."is a maximum";
        }
        else
        {
          print $this->b ."is a maximum";
        }
    }

}
 $obj=new yasu(60,100);
  $obj->max();
  echo"<br>";
  class circle{

    public $r;
    public $d;
    public $c;
    public $a;


    public function area(){

           $d=$this->r*2;
           $c=2*3.14*$this->r;
           $a=3.14*$this->r*$this->r;

           echo  "The  diameter is" .$d."<br>";
           echo  "The  circumference is" .$c."<br>";
           echo  "The area is". $a."<br>";


    }


           }
      

           $obj=new circle;
           $obj->r=5;
           $obj->area();*/


?>