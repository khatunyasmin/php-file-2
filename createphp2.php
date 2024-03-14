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
    
    //Escape user inputs for security
     
              //$getMovieid= mysqli_real_escape_string($link,$_REQUEST['s1']);
    
              $getname= mysqli_real_escape_string($link,$_REQUEST['s2']);     
    
              $getyear= mysqli_real_escape_string($link,$_REQUEST['s3']);
              
              $getverdict= mysqli_real_escape_string($link,$_REQUEST['s4']);     
    
              $getboxoffice= mysqli_real_escape_string($link,$_REQUEST['s5']);

    //Attempt insert query
    
     $sql = "INSERT INTO salmanKhan_movie(Movie_Name,Movie_Year,Verdict,Box_office) VALUES ('$getname','$getyear','$getverdict','$getboxoffice')";
    
    // Check the 
    if(mysqli_query($link,$sql))
    {
        echo "<br>"."Data inserted successfully.";
    }
    else
    {
        echo "ERROR: Could not execute .";
    }
// close the connection
mysqli_close($link); 

?>

</body>
</html>
