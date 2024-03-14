<?php 
class rectangle {

    public $length;
    public $width;
    public function getperimeter(){
         
         $result = 2 * ($this->length + $this->width );
         print "The perimeter is $result";
     }
 }

 //define a new class for inheritance

 class shape extends rectangle {


    
    public function display(){
        print "Inside Display function body.";
    }
 }

// Create object of the child class

$x1 = new shape;

$x1->length = 84;
$x1->width = 48;

// Call the methods
$x1->getperimeter();
print "<br>";
$x1->display();


?>