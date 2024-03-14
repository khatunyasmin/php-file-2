<?php
//class definition


class staticdemo //class name
{

   //Declare a static property


   public static $greeting ="Hello yasu";   //member of class greeting
   //Declar static method

   public static function display()

   {

    echo self::$greeting;
   }



   


}

//Attempt to acsess the static property and method  
       
   echo staticdemo::$greeting;

      echo"<br>";
      staticdemo::display();
?>