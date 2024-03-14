
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class even{
        public $x;

        

        public function show(){
            if($this->x%2==0)
            {
                print $this->x." is an even number.";
            }
            else
            {
                print $this->x." is an odd number.";
            }
        }
        
        public function __construct($a)
        {
            $this->x=$a;
        }
    }
    $e=new even(101);
    $e->show();

    ?>
</body>
</html>
