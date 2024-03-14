

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Triangle</title>
</head>
<body>
    <?php
    class triangle{
        public $a;
        public $b;
        public $c;

        public function __construct($x,$y,$z){
            $this->a=$x;
            $this->b=$y;
            $this->c=$z;
        }

        public function area(){
            $s=($this->a+$this->b+$this->c)/2;
            $a1=sqrt($s*(($s-$this->a)*($s-$this->b)*($s-$this->c)));
            print $a1;           
        } 
    }

    $b1=new triangle(30,40,50);
    $b1->area();  
        
    ?>
</body>
</html>





