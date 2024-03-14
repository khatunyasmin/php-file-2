<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance Conversion</title>
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost","root","");
class cm{
    public $cm;
    
        public function length(){
         $m=($this->cm/100);
         echo $m;
            
        }
    }
    $y=new cm;
    $y->cm=mysqli_real_escape_string($connect,$_REQUEST['cm1']);
    echo $y->length();
    ?>
</body>
</html>