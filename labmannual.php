<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<h2 style='text-decoration:underline;'>Floyd Triangle</h2>";
    $n=1;
    for ($l=0;$l<20;$l++)
    {
        for($m=0;$m<=$l;$m++)
        {
            print $n;
            $n++;    
        }
        print "<br>";
    }
    
    echo"<br>";
   
    print "<h2 style='text-decoration:underline;'>Factorial</h2>";
          $x =5;
          $a =$x-1;
          for ($a=($x-1);$a!=0;$a--)
          {

            $x= $x * $a;

          }

           echo"$x";
           echo"<br>";

           $x =10; 
           $a=$x-1;
           for ($a=($x-1);$a!=0;$a--)
           {
               $x=$x*$a;
           }
           print $x;
           echo"<br>";
           print "<h2 style='text-decoration:underline;'>13.chessborad</h2>";   
           $a=1;
          for($y=1;$y<=64;$y++)
          {
            $a= $a*2;
            
          }
          echo "$a";
            
?>
</body>
</html>

