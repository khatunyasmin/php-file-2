<?php

class yasu{

            public $a;
            public function show()
            {

               if($this->a%7==0)
                   {
                      print "divisible by 7";
                   }
               else
                   {

                       print "not divisible by 7";

                   }


            }


}
    $obj =new yasu;


    $obj->a=49;


    $obj->show();

?>