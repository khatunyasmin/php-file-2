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
 
$link = mysqli_connect("localhost","root","","flim");
 
// check connectivity
if($link===false)
{
     die("ERROR: Could not connect.");
}
echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);

 /*   $query1 = "CREATE DATABASE flim";
    
if(mysqli_query($link,$query1))
{
    echo "<br>"."Database created successfully.";
}
else
{
    echo "ERROR: Could not execute the SQL query".mysqli_error($link);
}*/

     //Attempt creation of a table
 
$query1 = "CREATE TABLE SalmanKhan_movie(Movie_Name VARCHAR(30) NOT NULL, Movie_Year VARCHAR(30) NOT NULL, Verdict VARCHAR(30) NOT NULL,Box_office VARCHAR(30) NOT NULL)";
    
if(mysqli_query($link,$query1))
{
    echo "<br>"."Table created successfully.";
}
else
{
    echo "ERROR: Could not execute the SQL query";

}

 ?> 
 </body>
 </html>