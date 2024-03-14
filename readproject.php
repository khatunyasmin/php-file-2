<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{background-color:#cccc00;
    border:20px groove #808000;

    padding: 10px;
    margin:0%;
    display: grid;
    place-items: left;
    background-image: url("flim.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: right;
    background-blend-mode:lighten;    
        }
        
td{text_align:center

}
</style>
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
               

    $qu1 = "SELECT * FROM ibm";
    if($res = mysqli_query($link,$qu1))
    {
        if(mysqli_num_rows($res)>0)
        {
            echo "<table style='border:2px solid purple';>";
            echo "<tr>";
            
            echo "<th>Email</th>";
            echo "<th>pswrd</th>";
           
            echo "</tr>";

            while($row = mysqli_fetch_array($res))
            {
                echo "<tr>";
                
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['pswrd']."</td>";
               
               
                echo "</tr>";
            }
               
            echo "</table>";

            mysqli_free_result($res);
            }
            else
            {
               echo "No records matching your query";
            }
           
         }

             



?>
</body>
</html>