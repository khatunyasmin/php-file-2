<?php


print "<h2 style='text-decoration:underline;'>Floyd Triangle</h2>";
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

echo"<br>";
print "<h2 style='text-decoration:underline;'>Factorial</h2>";
$n=6;
$p=1;
        
 for($i=0;$i<=($n-1);$i++)
     {
        $p*=($i+1);
        echo "<br>";
            
     }
    
       echo "The factorial of $n is:".$p."<br>";

?>