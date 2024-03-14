<?php
$connect = mysqli_connect("localhost","root","");
class odd
{
    public $start;
    public $end;
    public function s1()
    {
        $sum = 0;
        for ($i = $this->start; $i <= $this->end; $i++){
            if ($i % 2 !== 0) {
                $sum += $i;
            }
        }
        print $sum;
    }

}
        $obj= new odd;
        $obj->start=mysqli_real_escape_string($connect,$_REQUEST['s1']);
        $obj->end=mysqli_real_escape_string($connect,$_REQUEST['s2']);
        $obj->s1();


?>
