<?php
class convert{

public $days;
public $year1;
public $month;
public $weeks;
public $days1;

public function myfn6(){
$year1 =floor( $this->days/365);

$month = floor(($this->days % 365)/30);

$weeks =floor($this->month/7);

$days1 =($this->weeks)%7;

echo "The converted value in year is ".$year1;
echo "<br>";
echo "The converted value in month is ".$month;
echo "<br>";
echo "The converted value in weeks is ".$weeks;
echo "<br>";
echo "The remaining value in days is ".$days1;

}

}

$e1 = new convert;
$e1->days = 816;
$e1->myfn6();

?>