<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance Week</title>
</head>
<body>
<?php
    $connect = mysqli_connect("localhost","root","");
class day{
    public $day;
    public $rdays;
    //public $month;
    
        public function week(){
         $years=floor(($this->day)/365);
        // $month=floor($this->day-365);
         $months=floor(($this->day)%12);
         //$rdays=floor(($this->day)-365);
         $week=floor(($this->rdays)/7);
         $rrdays=floor(($this->rdays)%7);

         echo $years."years,";
         echo $months."months,";
         echo $week."weeks";
         echo $rrdays."days";
            
        }
    }
    $y=new day;
    $y->day=mysqli_real_escape_string($connect,$_REQUEST['d1']);
    echo $y->week();
    ?>
</body>
</html>