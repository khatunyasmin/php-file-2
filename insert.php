<?php

$link=mysqli_connect("localhost","root","","demodb");
// check connection
if($link===false)
{

    
        die("ERROR: Could not connect.");
   
   echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
      
}

//Escape user inputs for security
 
          $getname= mysqli_real_escape_string($link,$_REQUEST['s1']);

          $getage= mysqli_real_escape_string($link,$_REQUEST['s2']);     

          $getemail= mysqli_real_escape_string($link,$_REQUEST['s3']);

//Attempt insert query

 $sql = "INSERT INTO person(name,age,email) VALUES ('$getname',$getage,'$getemail')";

// Check the 
if(mysqli_query($link,$sql))
{
    echo "<br>"."Data inserted successfully.";
}
else
{
    echo "ERROR: Could not execute ".mysqli_error($link);
}
$delete ="DELETE FROM  uzma where password=0";
if(mysqli_query($link,$delete))
{
  echo "DAta is deleted successfully"
}
else
{
    echo "Error";
}







//close the connection
mysqli_close($link);

?>