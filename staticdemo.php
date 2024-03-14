<?php
 
//class definition
 
class staticdemo
{
    //Declare a static property
    
    public static $greeting = "Hello World!";
    
    //Declare a static function
    
    public static function display()
    {
        echo self::$greeting;
    }
}
 
//Attempt to access the static property and method directly
 
echo staticdemo::$greeting;
 
echo "<br>";
 
staticdemo::display();
 
 
?>