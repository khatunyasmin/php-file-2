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

    $link=mysqli_connect("localhost","root","","project");
    // check connection
    if($link===false)
    {
    
        
            die("ERROR: Could not connect.");
       
       echo "Connection established successfully. Host info: ". mysqli_get_host_info($link);
          
    }
    
    //Escape user inputs for security
     
              //$getMovieid= mysqli_real_escape_string($link,$_REQUEST['s1']);
    
              $fname= mysqli_real_escape_string($link,$_REQUEST['s1']);     
    
              $email= mysqli_real_escape_string($link,$_REQUEST['s2']);
              
              $password= mysqli_real_escape_string($link,$_REQUEST['s3']);     
    
              $confirmpassword= mysqli_real_escape_string($link,$_REQUEST['s4']);

    //Attempt insert query
    
     $sql = "INSERT INTO ibm(Firstname,Email,pswrd,confirmpassword) VALUES ('$fname','$email','$password','$confirmpassword')";
    
    // Check the 
    if(mysqli_query($link,$sql))
    {
        echo "<br>"."Thank you.";
        
    }
    else
    {
        echo "ERROR.";
    }
// close the connection
mysqli_close($link); 

?>

</body>
</html>