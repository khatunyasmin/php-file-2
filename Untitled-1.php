<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body style="background-color:blanchedalmond";>
    <?php
    echo "<h3 style='color:black;'>Q8.Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator</h3>";
    $y = 9;
    echo ($y>10) ? 'Greater than 10': 'Not greater than 10';
    echo "<br>";
    echo ($y>20) ? 'Greater than 20': 'Not greater than 20';
    echo "<br>";
    echo ($y>30) ? 'Greater than 30': 'Not greater than 30';
    
    echo "<h3 style='color:black;'>Q9.Write a script which will display the string.</h3>";
    echo "<p>Hello everyone</p>"; 
    print "<p>Hello everybody</p>";    
    
    echo "<h3 style='color:black;'>Q10.Write a PHP script which will display the array.</h3>";
    $snacks = array('Lays','Kurkure','Bingo','Mad Angles','Max Lays');
    foreach($snacks as $s)
    {
    echo "<li>$s</li>";
    }
    echo "<ul>";

    echo "<h3 style='color:black;'>Q11.Write a PHP to sorting.</h3>";

    $num = array(4,6,2,22,11,-1);
    sort($num); //ascending order
    print_r($num);
    echo "<br>";
    rsort($num); //descending order
    print_r($num);
    echo "<br>";
    
    $cp = array("Lexus"=>50,"MayBach"=>60,"Porsche"=>35,"BMW"=>48);
    asort($cp);
    print_r($cp);
    echo "<br>";
    arsort($cp);
    print_r($cp);
    echo "<br>";
    ksort($cp);
    print_r($cp);
    echo "<br>";
    krsort($cp);
    print_r($cp);
    echo "<br>";
    
    echo "<h3 style='color:black;'>Q12.Write a PHP script to calculate and display average temperature, five lowest and highest temperatures
    in given data.</h3>";

    $temp = array(78,60,55,23,58,74,25,69,32,45,69,12,36,37,45,-42);
    $sum = array_sum($temp);
    $cou = count($temp);
    $avg = $sum/$cou;
    echo "Average: $avg"."<br>";

    //lowest temperature
     sort($temp); //ascending order
    // print_r($temp);
     echo "<br>";
     for($v=0;$v<5;$v++)
     {
        echo "$temp[$v],";
     }
     echo "<br>";
     //highest temperature 
     rsort($temp); //descending order
    // print_r($temp);
     echo "<br>";
     for($v=0;$v<5;$v++)
     {
        echo "$temp[$v],";
     }
     echo "<br>";



    echo "<h2>Q13.Write a program to calculate and print the factorial of a number using a for loop.</h2>";
        /*$n=6;
        $p=1;
        
        for($i=0;$i<=($n-1);$i++)
        {
            $p*=($i+1);
            echo "<br>";
            
        }
        echo "</ul>";
       echo "The factorial of $n is:".$p."<br>";*/

            $x =5; //factorial
            $a=$x-1;
            for ($a=($x-1);$a!=0;$a--)
            {
                $x=$x*$a;
            }
            print $x;
            echo "<br>";


            $z=1; //chessboard
            for( $y=1;$y<=64;$y++)
            {   
                $z=$z*2;
            }
            print "Chessboard(*2): ".$z;

            echo "<h3 style='color:black;'>Q14.Write a PHP script using nested for loop.</h3>"; 
           /* $o=4;
            for($p=1;$p<=$o;$o++)
            {
                for($s=1;$s<=$p;$p++)
                {
                    echo "*";
                }
                echo nl2br("\n");
            }
        
            for($p=$o;$p>=$o;$o++)
            {
                for($s=1;$s<=$p;$p++)
                {
                    echo "*";
                }
                echo nl2br("\n");
            }*/



            echo "<h3 style='color:black;'>Q15.Write a PHP program to generate and display the first n lines of a Floyd.</h3>";
                $n=1;
                for ($l=0;$l<10;$l++)
                {
                    for($m=0;$m<=$l;$m++)
                    {
                        print $n;
                        $n++;    
                    }
                    print "<br>";
                }
            echo "<h3 style='color:black;'>Q16.Write a function to calculate the factorial of a number.</h3>";
            
                $ab = 5;
                $fact =1;
                for($i=1;$i<=$a;$i++){
                    $fact *= $i;
                    
                }
                print "The factorial of $ab is :- $fact";

            echo "<h3 style='color:black;'>Q17.Write a function to check a number is prime or not.</h3>";
            $a = 7;
            $n=0;

            for($i=2; $i < $a/2; $i++){
                if($a % $i == 0){
                    print "Not prime";
                    $n=1;
                    break;
                }
                else{
                    print "Prime";
                    $n=1;
                }
                if($n!=0){
                    break;
                }
            }
    ?>
</body>
</html>