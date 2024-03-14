<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>PHP Statements</title>
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
echo "<h3 style='text-decoration:underline;color:purple;'>PHP Conditional Statements<span>&#128035</span></h3>";
echo "<h3 style='text-decoration:underline;color:purple;'>if Statement</h3>";
            /*
        1. the if statement
        2. the if...else statement
        3. the if...elseif...else statement
        */
        
        $x = 50; // variable declaration and initialization
        
        if($x > 20)
        {
            print "Inside if statement";
        }
        echo "<h3 style='text-decoration:underline;color:purple;'>if else Statement</h3>";
        $x = 50; // variable declaration and initialization
        
        if($x > 100)
        {
            print "Inside if statement";
        }
        else
        {
            echo "Inside else statement.";
        }
        echo "<h3 style='text-decoration:underline;color:red;'>if else if Statement</h3>";  
            if($x > 100)
            {
                print "Inside if.";
            }
            elseif($x <30)
            {
                echo "Inside elseif.";
            }
            else
            {
                print "Inside Else.";
            }

        echo "<h3 style='text-decoration:underline;color:green;'>Ternary Operator</h3>"; 
            $y = 50;
            echo ($y >20) ? 'Inside if statement': 'Inside Else statement';

        echo "<h3 style='text-decoration:underline;color:blue;'>Switch Case Statement</h3>";
            $z = "Bhubaneswar";
            switch($z)
            {
                case "Patna": echo "Patna-This is the capital city of Ancient India.Explore it.";
                break;
                case "Kolkata": echo "Kolkata-This city is known for the Howrah bridge.Explore it.";
                break;
                case "Allahabad": echo "Allahabad-This city is known for 'Sangam of three rivers'.Explore it.";
                break;
                case "Jaipur": echo "Jaipur-This is the city of pink painted houses.Explore it.";
                break;
                case "Bhubaneswar": echo "Bhubaneswar-This is the city of temples.Explore it.";
                break;
                default: echo "Out of India";
            }

            echo "<h3 style='color:purple;'>Q1.WAP in PHP to find the maximum of 3 numbers.</h3>";
                    $aa = 45;
                    $bb = 85;
                    $cc = 66;
                    $la = $aa>$bb && $aa>$cc;
                    $lb = $bb>$aa && $bb>$cc;
                    $lc = $cc>$aa && $cc>$bb;
                    if($la)
                    {
                        echo "The 1st variable is greatest.";
                    }
                    else if($lb)
                    {
                        echo "The 2nd variable is greatest.";
                    }
                    else
                    {
                        echo "The 3rd variable is greatest";
                    }

            echo "<h3 style='color:yellow;'>Q1.WAP in PHP to find the maximum of 3 numbers.</h3>";

                     $a=max(15,20,35,5,85);
                        echo $a ;      

             echo "<h3 style='color:blue;'>Q2.WAP in PHP to find the minimumof 3 numbers.</h3>";           
                        $b=min(15,20,35,5,85);
                        echo $b;      
             
            echo "<h3 style='color:green;'>Q2.Check whether an input number is divisible by 7.</h3>";
                    $divSev = 60;
                    if($divSev % 7 == 0)
                    {
                        echo "Divisible by 7";
                    }
                    else
                    {
                        echo "Not divisible by 7";
                    }
            echo "<h3 style='color:red;'>Q3.Display the colors Red,Blue,Green,Yellow,Pink and orange using switch-case.</h3>";
                    $color = "Pink";
                    switch($color){
                        case "Red":
                            echo "<p style='color:red;'>Red color is matched.</p>";
                        break;
                        case "Blue":
                            echo "<p style='color:Blue;'>Blue color is matched.</p>";
                        break;
                        case "Green":
                            echo "<p style='color:Green;'>Green color is matched.</p>";
                        break;
                        case "Yellow":
                            echo "<p style='color:Yellow;'>Yellow color is matched.</p>";
                        break;
                        case "Pink":
                            echo "<p style='color:Deeppink;'>Pink color is matched.</p>";
                        break;
                        case "Orange":
                            echo "<p style='color:Orange;'>Orange color is matched.</p>";
                        break;
                        default: echo "<p style='color:Grey;'>No color matched</p>";
                        break;
                    }

            echo "<h3 style='color:blue;'>Q4.Print the number of days in a month using switch-case.</h3>";
                
                    $month = "Mar";

                    switch ($month) {
                        case "Jan":
                        echo "The month has 31 days.";
                            break;
                        case "Feb":
                        echo "The month has 28 or 29 days.";
                            break;
                        case "Mar":
                        echo  "The month has 31 days.";
                            break;
                        case "Apr":
                        echo  "The month has 30 days.";
                            break;
                        case "May":
                        echo "The month has 31 days.";
                            break;
                        case "Jun":
                        echo "The month has 30 days.";
                            break;
                        case "Jul":
                        echo "The month has 31 days.";
                            break;
                        case "Aug":
                        echo "The month has 31 days.";
                            break;
                        case "Sep":
                        echo "The month has 30 days.";
                            break;
                        case "Oct":
                        echo "The month has 31 days.";
                            break;
                        case "Nov":
                        echo "The month has 30 days.";
                            break;
                        case "Dec":
                        echo "The month has 31 days.";
                            break;
                        default:
                        echo "Invalid month.";
                            break;
                    }


    ?>

    </div>
</body>
</html>