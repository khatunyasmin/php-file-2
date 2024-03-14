<?php
class Average {
   public $n;

    public function __construct($num) {
        $this->n = $num;
    }

    public function calculateAverage() {
        $total = array_sum($this->n);
        $count = count($this->n);

        print $total / $count;
    }
}

// Example usage:
$n = [2,4,6];
$obj = new Average($n);
$obj->calculateAverage();

?>