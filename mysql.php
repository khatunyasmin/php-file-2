<?php
/*
    PHP Connectivity with MySQL
There are 2 ways to connect to MySQL
1. MySQLi (improved MySQL) - supports only MySQL database,
                              supports O-O way and Procedural way.
                              
2. PDO (PHP Data Object) - supports 12 different databases
                            supports only O-O way.
*/
 
// Connecting to MySQL
 
//$link = mysqli_connect("hostname","username","password","database");
 
$link = mysqli_connect("localhost","root","","demodb");
 
// check connectivity
if($link===false)
{
     die("ERROR: Could not connect.");
}
echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
 

//Attempt creation of a database
 
/*$query1 = "CREATE DATABASE demodb";
    
if(mysqli_query($link,$query1))
{
    echo "<br>"."Database created successfully.";
}
else
{
    echo "ERROR: Could not execute the SQL query".mysqli_error($link);
}


//Attempt creation of a table
 
$query1 = "CREATE TABLE employee(empid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,first_name VARCHAR(30) NOT NULL, last_name VARCHAR(30) NOT NULL, designation VARCHAR(30) NOT NULL)";
    
if(mysqli_query($link,$query1))
{
    echo "<br>"."Table created successfully.";
}
else
{
    echo "ERROR: Could not execute the SQL query".mysqli_error($link);
}

//Attempt creation of a table
 
$query1 = "INSERT INTO employee (first_name,last_name,designation) VALUES ('John','Rambo','CSO'),('yasmin','khatun','ceo')";
    
if(mysqli_query($link,$query1))
{
    echo "<br>"."Data inserted successfully.";
}
else
{
    echo "ERROR: Could not execute the SQL query".mysqli_error($link);
}

//delete the TABLE ROWS

$delete ="DELETE FROM  uzma where password=0";
if(mysqli_query($link,$delete))
{
  echo "Data is deleted successfully";
}
else
{
    echo "Error";
}*/

//update the TABLE DATA

/*$update ="UPDATE  uzma set NAME='yasmin' where password=123";
if(mysqli_query($link,$update))
{
  echo "Data is update successfully";
}
else
{
    echo "Error";
}*/


// close the connection
 mysqli_close($link);
?>