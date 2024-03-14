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
 
$link = mysqli_connect("localhost","root","");
 
// check connectivity
if($link===false)
{
     die("ERROR: Could not connect.");
}
echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
 
//Attempt select query execution
 
    $query1 = "SELECT * FROM employee";
    
    if($result = mysqli_query($link,$query1))
    {
        if(mysqli_num_rows($result)>0)
        {
            echo "<table>";
                echo "<tr>";
                    echo "<th> EMP ID </th>";
                    echo "<th> FIRST NAME </th>";
                    echo "<th> LAST NAME </th>";
                    echo "<th> DESIGNATION </th>";
                echo "</tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>".$row['1']."</td>";
                        echo "<td>".$row['yasmin']."</td>";
                        echo "<td>".$row['khatun']."</td>";
                        echo "<td>".$row['Ceo']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                // Free result set
 
                    mysqli_free_result($result);
        }
        else
        {
            echo "No records matching your query.";
        }
        
    }
    
    else
    {
        echo "ERROR: Could not execute the SQL query".mysqli_error($link);
    }
    
 
//close the connection
mysqli_close($link);
 
?>