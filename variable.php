<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-color:#cccc00;
    border:20px groove #808000;

    padding: 10px;
    margin:0%;
    display: grid;
    place-items: left;
    background-image: url("maths2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: right;
    background-blend-mode:lighten;   
    }

</style>
</head>
<body >
    <div >
    <?php
    print "<h2 style='text-decoration:underline;'>Arithmetic Operations (&#10133 &#10134 &#10060 &#10135) in PHP &#x1F418;</h2>";
    print "<h3>1.Enter 3 numbers and find the sum & display the result.</h3>";
    $a = 2;
    $b = 3;
    $c = 5;
    $sum = $a+$b+$c;
    print "The sum of a,b and c is ".$sum."."."<br>";
    
    print "<h3>2.Enter 2 numbers and perform all arithmetic operation and display the result.</h3>";
    $add = $a+$b;
    $sub = $a-$b;
    $mul = $a*$b;
    $div = $a/$b;
    $mod = $a%$b;
    $pow = $a**$b;

    print "Addition: ".$add."<br>";
    print "Subtraction: ".$sub."<br>";
    print "Multiplication: ".$mul."<br>";
    print "Division: ".$div."<br>";
    print "Modulus: ".$mod."<br>";
    print "Power: ".$pow."<br>";

    print "<h3>3.Enter length & breadth of a rectangle ▭,find its perimeter and area.</h3>";
    $bre = 40;
    $len = 45;
    $peri = 2*($len*$bre);
    $area = $len * $bre;
    print "The perimeter of the rectangle is ".$peri."."."<br>";
    print "The area of the rectangle is ".$area."."."<br>";

    print "<h3>4.Enter radius of a circle <span> &#9898</span> & find its diameter, circumference & area.</h3>";
    $rad = 15;
    $dia = 2*$rad;
    $cir = 2*3.14*$rad;
    $are = 3.14*$rad*$rad;
    print "The diameter of the circle is ".$dia."."."<br>";
    print "The circumference of the circle is ".$cir."<br>";
    print "The area of the circle is ".$are."<br>";
    ?>
    </div>
</body>
</html>