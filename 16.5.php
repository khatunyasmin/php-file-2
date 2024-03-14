<?php
 
class shape
{
    public $length = 0;
    public $width = 0;
    
    public function displayarea()
    {
        $r = $this->length * $this->width;
            
            echo "The area is ".$r;
            echo "<br>";
    }
    
    public function __construct($x,$y)
    {
        $this->length = $x; // length = 50
        $this->width = $y; // width = 60
    }
}
 
$obj1 = new shape(50,60);
$obj2 = new shape(20,35);
 
$obj1->displayarea();
$obj2->displayarea();
 
?>