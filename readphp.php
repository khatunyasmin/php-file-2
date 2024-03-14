
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
        table,td,tr{
         border:5px groove purple;
         background-color: pink;
         padding: 2px;
         
        }
td{text_align:center

}
</style>
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
               

    $query1 = "SELECT * FROM SalmanKhan_Movie";
    if($res = mysqli_query($link,$query1))
    {
        if(mysqli_num_rows($res)>0)
        {
            echo "<table style='border:2px solid purple';>";
            echo "<tr>";
            
            echo "<th>Movie_Name</th>";
            echo "<th>Movie_Year</th>";
            echo "<th>Verdict</th>";
            echo "<th>Box_office</th>";
            echo "</tr>";

            while($row = mysqli_fetch_array($res))
            {
                echo "<tr>";
                
                echo "<td>".$row['Movie_Name']."</td>";
                echo "<td>".$row['Movie_Year']."</td>";
                echo "<td>".$row['Verdict']."</td>";
                echo "<td>".$row['Box_office']."</td>";
               
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