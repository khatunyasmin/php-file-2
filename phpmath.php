<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>PHP w3</title>
    <style>
        body{
            border:20px groove purple;
            padding: 15px;
            margin:0%;
            display: grid;
            place-items: left;
            background-image: url("leaf.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position-x: left;
            background-blend-mode:normal;  
        }
        div{

            border: 2px purple solid;
            padding: 10px;
            background-color: #669900;
            background-image: url("flower.png");
            background-repeat: no-repeat;
            background-size: cover;
            
            background-blend-mode:normal; 
            }
</style>
</head>
<body>
    <div class="container text-primary">
        <?php
             echo "<h3 style='text-decoration:underline;color:purple;'>PHP Math <span>&#128035</span></h3>";
                echo "<h3 style='color:red;'>Q1.WAP in PHP to find the maximum numbers.</h3>";

                    $a=max(15,20,35,5,85); 
                
                   echo "$a=max(15,20,35,5,85)";
                   
                  

                echo "<h3 style='color:blue;'>Q2.WAP in PHP to find the minimum  numbers.</h3>";

                    $b=min(15,20,35,5,85);
                echo "$b=min(15,20,35,5,85)";  
        
                echo "<h3 style='color:green;'>Q2.WAP in PHP to find returns the absolute (positive) value of a number.</h3>";

                $c=abs(-5.9);
               echo "$c=abs(-5.9)";  

 
                  echo "<h3 style='color:red;'>Q2.WAP in PHP to find the square root of a number.</h3>";

                    $d=sqrt(81);
                echo "$d=sqrt(81)";

                echo "<h3 style='color:blue;'>Q2.WAP in PHP to find the  rounds a floating-point number to its nearest integer</h3>";

                $e=round(5.3);
                 echo "$e=round(5.3);";  
                 

                 echo "<h3 style='color:green;'>Q2.WAP in PHP to find the  rounds a floating-point number to its nearest integer.</h3>";

                $f=round(5.8);
                 echo "$f=round(5.8);";  
                 
                 echo "<br>";
                 echo "<h3 style='text-decoration:underline;color:purple;'>PHP intro <span>&#128035</span></h3>";

                 $a = "yasmin";
                 echo "I love $a!";

?>
</div>
        </body>
        </html>
  

