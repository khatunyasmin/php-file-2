<?php

class user{

    public $a;
    public $b;
    
    public function display()
    {

      print "Hello!"." ".$this->a."".$this->b;

    }

}
$obj=new user;

$obj->a="Yasmin";
$obj->b="Khatun";
echo $obj->display();


?>