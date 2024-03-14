<?php
 
/*
1. the if statement
2. the if...else statement
3. the if...elseif...else statement
*/
 
$x = 50;
 
if($x > 20)
{
    print "Inside if";
    echo"<br>";
}
 
?>
 <?php
 
/*
1. the if statement
2. the if...else statement
3. the if...elseif...else statement
*/
 
$x = 50;
 
if($x > 100)
{
    print "Inside if.";
}
else
{
    echo "Inside Else.";
    echo"<br>";
}
 
?>
<?php
 
/*
1. the if statement
2. the if...else statement
3. the if...elseif...else statement
*/
 
$x = 50; // variable declaration and initialization
 
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
    echo"<br>";
}
    
    $y="sunday";
  switch($y) 
 {
      case"sunday":echo"This is sunday.enjoy";break;
      case "Monday": echo "This is Monday.Start working.";break;
    
      case "Tuesday": echo "This is Tuesday.Continue working.";break;
      case "Wednesday": echo "This is Wednesday.Work effectively.";break;
      default: echo "Inside default.";

 }
?>