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
    $link=mysqli_connect("localhost","root","","flim");
    // check connection
    if($link===false)
    {
    
        
            die("ERROR: Could not connect.");
       
       echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
          
    }


    $getname= mysqli_real_escape_string($link,$_REQUEST['s2']);   
     
//delete the TABLE ROWS

$delete ="DELETE FROM salmanKhan_movie where MOvie_name='$getname'";
if(mysqli_query($link,$delete))
{
  echo "Data is deleted successfully";
}
else
{
    echo "Error";
}


// close the connection
mysqli_close($link);

?>
</body>
</html>