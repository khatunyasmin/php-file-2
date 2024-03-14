
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
    <?php
    class temp{
        public $t;
        //public $cel;

        public function __construct($c)
        {
            $this->t=$c;
        }

        public function celsius(){
            $cel=(9*$this->t/5)+32;
            print "Celsius to Fahrenheit: ".$cel."<br>";
        }
        public function fahrenheit(){
            $fah=($this->t-32)*5/9;
            print "Fahrenheit to Celsius: ".$fah;
        }

    }

    $obj=new temp(30);
    $obj->celsius();
    $obj->fahrenheit();
    ?>
</body>
</html>



