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
// Connecting to MySQL
 
//$link = mysqli_connect("hostname","username","password","database");
 
$link = mysqli_connect("localhost","root","","project");
 
// check connectivity
if($link===false)
{
     die("ERROR: Could not connect.");
}
echo "Connection established successfully.";

  /* $query1 = "CREATE DATABASE project";
    
(mysqli_query($link,$query1))*/

     //Attempt creation of a table


     $qu1 = "CREATE TABLE ibm(Firstname VARCHAR(30) NOT NULL PRIMARY KEY ,Email VARCHAR(30) NOT NULL, pswrd INT NOT NULL, confirmpassword INT NOT NULL)";
    
 if(mysqli_query($link,$qu1))
  {
    echo "<br>"."Table created successfully.";
}
else
 {
    echo "ERROR: Could not execute the SQL query".mysqli_error($link);
 }


 ?> 
 </body>
 </html>