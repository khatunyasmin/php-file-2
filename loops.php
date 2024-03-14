<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php loops</title>
    
</head>
<body>
  <?php
  print "<h2 style='text-decoration:underline;'>PHP Loops</h2>";
  /*while - loops through a block of code as long as the specified condition is true
    do while
    for
    for each
    */
    print "<h2 style='text-decoration:underline;'>While Loop</h2>";
    $x=5;
    while ($x < 12)
    {
        echo "Inside while:$x"."<br>";
        $x++;
    }

    print "<h2 style='text-decoration:underline;'>Do while Loop</h2>";

    $s = 5;
    do
    {
        echo "Inside while:$s"."<br>";
        $s++;
    }
    while ($s < 12);

    print "<h2 style='text-decoration:underline;'>For Loop</h2>";

    for ($t=5;$t<12;$t++)
    {
        echo "Inside for loop:$t"."<br>";
    }
     
    print "<h2 style='text-decoration:underline;'>For each Loop</h2>";
    
    $colors = array("<b><span style ='color:blue;'>Blue</span>","<span style ='color:deeppink;'>Pink</span>","<span style ='color:green;'>Green</span>","<span style ='color:red;'>Red</span>","<span style ='color:purple;'>Purple</span>","<span style ='color:brown;'>Brown</span>","<span style ='color:orange;'>Orange</span>","<span style ='color:magenta;'>Magenta</span></b>");
    foreach($colors as $c)
    {
        echo $c."<br>";
    }

    print "<h2 style='text-decoration:underline;'>For each Loop-Associative array</h2>";

    $colors = array("<b><span style ='color:cyan;'>Cyan</span>"=>"Sky","<span style ='color:deeppink;'>Pink</span>"=>"Cottoncandy","<span style ='color:green;'>Green</span>"=>"Grass","<span style ='color:red;'>Red</span>"=>"Blood","<span style ='color:purple;'>Purple</span>"=>"Brinjal","<span style ='color:brown;'>Brown</span>"=>"Soil","<span style ='color:orange;'>Orange</span>"=>"Orange","<span style ='color:magenta;'>Magenta</span>"=>"Dahlia"."</b>");
    foreach($colors as $c=>$o)
    {
        echo $c.":".$o."<br>";
    }

    print "<h2 style='text-decoration:underline;'>PHP Functions</h2>";

    //Defining the function
    function fn1()
    {
        echo "Inside Function."."<br>";
    }
    fn1();

    function fn2($uu,$vv=23)
        {
            echo "Inside function."."<br>";
            $sa = $uu + $vv;
            print $sa."<br>";
        } 
        // Calling the function 
        fn2(25,70);

        $s = fn2(25,17); // $s = 42;
 
        echo "Outside function".$s;

        print "<h2 style='text-decoration:underline;'>Matrix</h2>";
        
        $x=1;
        for ($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $x;
                 $x=$x+1; //increment type(updating its own value)
            }
            echo "<br>";
        }

       /* $x=1;
        for ($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $j;
                
            }
            echo "<br>";
        }*/

        print "<h2 style='text-decoration:underline;'>Floyd Triangle</h2>";
        
        $n=1;
        for ($l=0;$l<4;$l++)
        {
            for($m=0;$m<=$l;$m++)
            {
                print $n;
                $n++;    
            }
            print "<br>";
        }



        
  ?>  
  </body>
    </html>