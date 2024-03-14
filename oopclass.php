
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Add Record Form </title>

    <style>
        body{
            border:20px groove purple;
            padding: 15px;
            margin:0%;
            display: grid;
            place-items: center;
            background-image: url("spring.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position-x: left;
            background-blend-mode:normal; 
        } 
        </style>
</head>
<body>
<h2><u>Arithmetic operation in oops </u></h2>
<?php
class yasu //class name
{
   


   
         public function sum()      
         {
            $result = ($this->a + $this->b);    //methods
     

             echo "The sum".$result;

         }


         public function sub()
         {
            $result = ($this->a - $this->b);
     

             echo "The sub".$result;

         }

         public function mul()
         {
            $result = ($this->a *$this->b);
     

             echo "The miltiple is".$result;

         }
         public function divide()
         {
            $result = ($this->a /$this->b);
     

             echo "The division is ".$result;

         }
         public function remainder()
         {
            $result = ($this->a % $this->b);
     

             echo "The remainder is ".$result;

         }


}


   $obj = new yasu;

    
    
    $obj->a =500;

    $obj->b= 18;
    
    
    echo $obj->sum();

     echo"<br>";
    
    echo $obj->sub();

    echo"<br>";
    
    echo $obj->mul();

    echo"<br>";
    
    echo $obj->divide();
    echo"<br>";
    
    echo $obj->remainder();


?>
</body>
</html>
