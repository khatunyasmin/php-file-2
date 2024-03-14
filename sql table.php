<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion Form</title>
    <style>
        table,th,td{
            border:2px solid purple;
            text-align: center;

        }
    </style>
</head>
<body>
    <?php
    $link = mysqli_connect("localhost","root","","demodb");

    if ($link===false)
    {
        die("Error".mysqli_connect_error());
    }

    $getname = mysqli_real_escape_string($link,$_REQUEST['as']);
    $getage = mysqli_real_escape_string($link,$_REQUEST['ag']);
    $getemail = mysqli_real_escape_string($link,$_REQUEST['ae']);
    $getpswrd = mysqli_real_escape_string($link,$_REQUEST['ad']);

    $sql = "INSERT INTO form (Name,Age,Email,Password) values ('$getname','$getage','$getemail','$getpswrd')";
    if(mysqli_query($link,$sql))
    {
        echo "Data is inserted successfully.";

    }
    else{
        echo "Error";
    }
   
    $delete = "DELETE from form where Password='sdfgsf'";
    if(mysqli_query($link,$delete))
    {
        echo "Data is deleted successfully.";

    }
    else{
        echo "Error";
    }

    $update = "UPDATE form SET Name='Uzma',Email='uzma@gmail.com' where Age=554";
    if(mysqli_query($link,$update))
    {
        echo "Data is updated successfully.";

    }
    else{
        echo "Error";
    }
//read
    $display = "SELECT * FROM form";
    if($result = mysqli_query($link,$display))
    {
        if(mysqli_num_rows($result)>0)
        {
            echo "<table>";
            echo "<tr>";
            
            echo "<th>Name</th>";
            echo "<th>Age</th>";
            echo "<th>Email</th>";
            echo "<th>Password</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)) //$row=associative array
        {
            echo "<tr>";
            echo "<td>".$row['Name']."</td>"; //Name,Age,Email,Password come from INSERT INTO
            echo "<td>".$row['Age']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "</tr>";
        }
    
mysqli_free_result($result);
    }
    else
    {
        echo "No records matching your query";
    }
    {
        echo "Error";
    }
    }
     if(mysqli_query($link,$display))
     {
        echo "<br>"."Data is inserted successfully.";
     }
     else
     {
        echo "ERROR: Could not execute the SQL query.".mysqli_error($link);
     }
    echo "<br>";

    //echo "3.Close the connection"; //it closes automatically but you can manually close it by this code
    mysqli_close($link);
    ?>
</body>