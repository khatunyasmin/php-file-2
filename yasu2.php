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
echo "<h3 style='text-decoration:underline;color:red;'>Q1.A number is negative, positive or zero  <span>&#128024</span></h3>";
         $a = -10;
           
         if($a>0)
         {
        echo"positive";
         }
         elseif ($a<0)
          {
            echo"negative";
           }

        else{
             echo"Zero";
             }

            echo"<br>";
                 
            
         $a = 10;
           
         if($a>0)
         {
        echo"positive";
         }
         elseif ($a<0)
          {
            echo"negative";
           }

        else{
             echo"Zero";
             }

             echo"<br>";
             
         $a = 0;
           
         if($a>0)
         {
        echo"positive";
         }
         elseif ($a<0)
          {
            echo"negative";
           }

        else{
             echo"Zero";
             }
             echo"<br>";


             echo "<h3 style='text-decoration:underline;color:red;'>Q2.prime or not  <span>&#128024</span></h3>";

                   $b=9;
                   $n=0;
                   for ($p=2;$p<$b;$p++)
                   {
                    if($b%$p==0)
                    {
                   
                    echo"it is a prime number";
                    $n=1;
                    break;
                    }
                   else
                   {
                     echo"it is not a prime number"."<br>";
                   }
                  }
                  /* echo "<h3 style='text-decoration:underline;color:red;'>Q3.co-prime or not  <span>&#128024</span></h3>";

                   $b=10
                   if();
                   {
                    echo"it is a co-prime number";
                   }
                   else
                   {
                     echo"it is not a co-prime number";
                   }
*/
                   echo "<h3 style='text-decoration:underline;color:red;'>Q4.
                   COMMITTE is a vowel or consonant 
                    <span>&#128029</span></h3>";
                        
                      
                   $d="COMMITTE";
                   $a=$d[0];
                   if($a=='A' ||$a =='E' || $a =='I' || $a =='O' || $a =='U')
                   {
                    echo"it is a vowel";
                   }
                   else
                   {
                     echo"it is a consonat";
                   }

                   echo"<br>";
 
                   echo "<h3 style='text-decoration:underline;color:red;'>Q4.COMMITTE is a vowel or consonant 

                   <span>&#128010</span></h3>";
                       
                     
                  $d="COMMITTE";
                  $a=$d[4];
                
                  if($a=='A' ||$a =='E' || $a =='I' || $a =='O' || $a =='U')
                  {
                   echo"it is a vowel";
                  }
                  else
                  {
                    echo"it is a consonat";
                  }

               




?>
</body>
</html>
