<?php

class yasu{
    

            public $a;
            public function show()
            {

               if($this->a%2==0)
                   {
                      print "The answer is even";
                   }
               else
                   {

                       print "The answer is odd";

                   }


            }


}
    $obj =new yasu;


    $obj->a=20;


    $obj->show();

?>