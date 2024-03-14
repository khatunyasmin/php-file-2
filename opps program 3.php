<?php

      class yasmin{

             public $a;
             public $b;
             public $c;

               function area()
              {

                 $s=($this->a+ $this->b +$this->c)/2;
                 $a1=(sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c)));
                 
                
                print $a1;

              } 

      }

       $x=new yasmin;

           $x->a=4;

           
           $x->b=5;
           $x->c=3;
           $x->area();   



?>