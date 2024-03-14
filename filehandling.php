<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling</title>
    <style>
        body{
            background-color: bisque;
        }

      h2{
        color:Deeppink;
        text-decoration: underline;
        text-decoration-style: wavy;
      }
      h3{
        color:green;
        text-decoration: underline;
        text-decoration-style: dotted;
      }
      h4{
        color:blue;
        text-decoration: underline;
        text-decoration-style:solid;
      }
      </style>
</head>
<body>
    <?php
    echo "<h2>PHP File Handling</h2>";

    echo "<h3>1.Opening the file</h3>";
        echo "<h4>fopen()</h4>";
            $handle = fopen("odisha.txt","r");

    echo "<h3>2.File Opening modes</h3>";
        echo "<p>r,r+,w,w+,a,a+,x,x+</p>";
                $file = "speech.txt";
                if(file_exists($file))
                {
                $handle = fopen("$file","r");//attempt to open the file
                }
                else
                {
                echo "ERROR: The file doesn't exist.";
                }

    /*echo "<h3>3.Closing the file</h3>";
        echo "<h4>fclose()</h4>";
                $file = "speech.txt";
                if(file_exists($file))
                {
                $handle = fopen("$file","r") or die ("Error: cannot open the file.");//attempt to open the file
                fclose($handle); //some code
                }
                else
                {
                echo "ERROR: The file doesn't exist.";
                }*/

        
    echo "<h3>4.Reading the file</h3>";
        echo "<h4>fread()</h4>";
                $file = "speech.txt";
                if(file_exists($file))
                {
                $handle = fopen("$file","r") or die ("Error: cannot open the file.");//attempt to open the file
                //Read fixed number of bytes from the file
               // $content = fread($handle,"200"); //the first 249 bytes of the entire file
            $content = fread($handle,filesize($file));

                //fclose($handle); //closing the file
                echo $content;
                }
                else
                {
                echo "ERROR: The file doesn't exist.";
                }
       echo "<h4>readfile()</h4>";
        $file = "speech.txt";
            if(file_exists($file))
            {
            readfile($file) or die ("Error: cannot open the file.");//attempt to open the file
            }
            else
            {
            echo "ERROR: The file doesn't exist.";
            }
        echo "<h4>file_get_contents()</h4>";
         $file = "speech.txt";
            if(file_exists($file))
            {
            
            $x1 = file_get_contents($file) or die ("Error: cannot open the file.");//attempt to open the file
            echo $x1;
            }
            else
            {
            echo "ERROR: The file doesn't exist.";
            }
        echo "<h4>file()</h4>";
            $file = "speech.txt";
            if(file_exists($file))
            {
            
            $arr = file($file) or die ("Error: cannot open the file.");//attempt to open the file
            //Display the content
            foreach($arr as $q)
            {
                echo $q;
            }
            }
            else
            {
            echo "ERROR: The file doesn't exist.";
            }


    echo "<h3>5.Writing the file</h3>";
         echo "<h4>fwrite()</h4>";
            $file = "speech.txt";
            $data = "Takshasila University, in an area what is now modern-day Pakistan, was well-known across the world for its medical school and was the chief learning centre in 6th century BC.";
            $handle = fopen($file,"w") or die ("Error: cannot open the file."); //Open the file for writing
            fwrite($handle,$data) or die("Error: cannot open the file.");//write data to the file
            fclose($handle);
            echo "Data written to the file successfully";
            
                  echo "<h4>file_put_contents()</h4>";
            $file = "speech.txt";
    
            $data = "Architecture-Temples are found deliberately at a place where the positive energy is available abundantly from the magnetic and electric wave conveyances of north/south post push.";
            // Write data to the file
            file_put_contents($file,$data) or die("ERROR: Cannot write to the file.");
            echo "Data written to the file successfully.";
        
            echo "<h3>6.Renaming the file</h3>";
                echo "<h4>rename()</h4>";
                    $file = "speech.txt";
                    if(file_exists($file))
                    {if(rename($file,"Indian Architechture.txt"))
                    {
                        echo "File renamed successfully";
                    }
                    else{
                        echo "Error: cannot rename the file.";
                    }
                }
                else{
                    echo "Error: File doesn't exist.";
                }
    echo "<h3>6.Removing the file</h3>";
        echo "<h4>unlink()</h4>";
       
            $file = "Indian Architechture.txt";
            if(file_exists($file))
            {if(unlink($file))
            {
                echo "File removed successfully";
            }
            else{
                echo "Error: cannot remove the file.";
            }
        }
        else{
            echo "Error: File doesn't exist.";
        }

    ?>
</body>
</html>