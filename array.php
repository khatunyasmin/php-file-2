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
           echo "<h2 style='text-decoration:underline;color:purple;'>PHP Arrays <span>&#128024</span></h2>";
           echo "<h3 style='text-decoration:underline;color:red;'>Indexed array<span>&#128052</span></h3>";

             $car=array("BMW","Maruti","Suzuki");
             echo $car[0]."<br>".$car[1]."<br>".$car[2];    //.operator
             echo "<br>";
             echo count($car);


             echo "<h3 style='text-decoration:underline;color:red;'>Associative array<span>&#128044</span></h3>";


             $carprice=array("BMW"=>50000,"Audi"=>80000,"Maruti"=>90000);

             echo $carprice["Audi"] ;
                
             echo "<br>";
             echo $carprice["BMW"];

             echo "<br>";
             echo $carprice ["Maruti"];

             echo "<br>";

             echo "<h3 style='text-decoration:underline;color:red;'>Multidimansional array<span>&#128045</span></h3>";
 
                

                       $detail = array(array("name"=>"John","city"=>"Dallas"),
                                       array("name"=>"Barbie","city"=>"Texas"),
                                      array("name"=>"Andrew","city"=>"Boston")
                                                         );
               
                            echo $detail[0]["city"];
                       
                            echo "<br>";

                             print_r($detail);
                              echo "<br>";
                                 var_dump($detail);

                                 echo "<h3 style='text-decoration:underline;color:red;'>Multidimansional array<span>&#128040</span></h3>";
                                      $details = array(array("yasmin","uzma","suman"),
                                                 array("sajad","jitesh","sayan"),
                                                   array("subhu","antar","santosh")
                    
                                                       );
                                 
                                       echo $details[0][0];
                                       echo "<br>";
                                       echo $details[1][0];
                                       echo "<br>";
                                       echo $details[2][2];
                                       echo "<br>";

                                       $detail = array(array("name"=>"John","city"=>"Dallas"),
                                       array("name"=>"Barbie","city"=>["Texas","bbsr","ctc"]),
                                      array("name"=>"Andrew","city"=>"Boston")
                                                         );
               
                                       echo $detail[1]["city"][2];
                       

                             echo "<h3 style='text-decoration:underline;color:red;'><span>&#128040</span></h3>";

                             
                             $x=7;
                             echo ++$x;
                             echo"<br>";


                             $x="hello";
                             $x.="everyone";
                             echo$x;

                             echo"<br>";
                             $x=10;
                             $y=8;
                             echo$x<=>$y;

                             echo"<br>";
                             $x=10;
                             $y=10;
                             echo$x<=>$y;
                             echo"<br>";
                             $x=5;
                             $y=8;
                             echo$x<=>$y;
                             echo"<br>";
                             echo "<h3 style='text-decoration:underline;color:red;'>Array assingment<span>&#128040</span></h3>";
                             echo "<h3 style='text-decoration:underline;color:green;'>Q1.last 5 days temperature an aarray calculate the average temperature<span>&#128048</span></h3>";

                               $temp=array(42,43,41,39,46);
                           
                                   echo $a=array_sum($temp);
                                   echo"<br>";
                                   echo $a/5;
                                   echo"<br>";
                            
                                  echo "<h3 style='text-decoration:underline;color:blue;'>Q2.calculate the total no of goals scored by all countries<span>&#128049</span></h3>";
                               $goals = array("Germany" => 232,"Italy" => 128,"Brazil" => 229,"Argentina" => 137,"France" => 102,"Cameroon" => 18,"Ghana" => 10 );
      
                                echo $totalgoals=array_sum($goals);    
                                 
                                     ?>

        </body>
        </html>