<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>PHP aaray sorting</title>
    <style>
        body{
            border:20px groove purple;
            padding: 15px;
            margin:0%;
            display: grid;
            place-items: left;
            background-image: url("spring.jpg");
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
           echo "<h3 style='text-decoration:underline;color:red;'>Sorting Array <span>&#128024</span></h3>";
           echo "<h3 style='text-decoration:underline;color:blue;'>1.Index array sorting for ascending order <span>&#128040</span></h3>";

            //index aaray sorting for asecding//
            $cars=array("Volvo", "BMW", "Toyota","Lexus");
                  sort($cars);
                    print_r($cars);
                  echo"<br>";

             $copy=$cars;
             print_r($copy);
              echo"<br>";

              echo "<h3 style='text-decoration:underline;color:blue;'>1.Index array sorting for descending order <span>&#128040</span></h3>";
          
             $cars=array("Volvo", "BMW", "Toyota","Lexus","suzuki","Maruti");
               rsort($cars);
             print_r($cars);
              echo"<br>";
           
                 $copy=($cars);
                  var_dump($copy);

                  echo "<h3 style='text-decoration:underline;color:red;'>2.Associative array sorting  by value for ascending order<span>&#128049</span></h3>";

                           $carprice=array("BMW"=>50000,"Audi"=>80000,"Maruti"=>90000,"Lexus"=>100000);
                          
                           asort($carprice);
                           print_r($carprice);
                        

                           echo "<h3 style='text-decoration:underline;color:blue;'>2.Associative array sorting  by value for descending order<span>&#128048</span></h3>";

                           $carprice=array("BMW"=>50000,"Audi"=>80000,"Maruti"=>90000,"Lexus"=>100000);
                          
                           arsort($carprice);
                           print_r($carprice);
                        
                           echo "<h3 style='text-decoration:underline;color:green;'>2.Associative array sorting by key for  aescending order<span>&#128047</span></h3>";

                           $carprice=array("BMW"=>50000,"Audi"=>80000,"Maruti"=>90000,"Lexus"=>100000);
                          
                           ksort($carprice);
                           print_r($carprice);
                        
                           echo "<h3 style='text-decoration:underline;color:red;'>2.Associative array sorting by key for descending order<span>&#128046</span></h3>";

                           $carprice=array("BMW"=>50000,"Audi"=>80000,"Maruti"=>90000,"Lexus"=>100000);
                          
                           krsort($carprice);
                           print_r($carprice);


                           
                        
           ?>
           </body>
        </html>