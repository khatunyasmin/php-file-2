
<?php
class nigam
{
   public$a=0;
   public$b=0;

         public function sum()
         {
            $result = ($this->a + $this->b);
     

             echo "The sum".$result;

         }



}


$obj = new nigam;
    
    
    $obj->a = 500;
    $obj->b= 10;
    
    
    echo $obj->sum();


?>
