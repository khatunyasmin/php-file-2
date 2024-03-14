<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product of real numbers</title>
</head>
<body>
    <?php
    class Product {
        public $n;
       
        public function __construct($num) {
            $this->n = $num;
        }
    
        public function calculate() {
            $product = 1;
            
            foreach ($this->n as $number) {
                $product *= $number;
            }
            
           print $product;
        }
    }
    
    // Example usage:
    $n = [6,2,3,4];
    $calculator = new Product($n);
    $product = $calculator->calculate();
    
    //echo "Product: " . $product;

    ?>
</body>
</html>