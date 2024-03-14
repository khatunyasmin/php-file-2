<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php cookies</title>
    <style>
body{
            border:20px groove purple;
            padding: 15px;
            margin:0%;
            display: grid;
            place-items: left;
            background-image: url("flower.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position-x: left;
            background-blend-mode:normal;  
        }

</style>
</head>
<body>
    <?php

    echo "<h3 style='text-decoration:underline;color:purple;'>PHP Cookie<span>&#128035</span></h3>";
    echo "<h3 style='text-decoration:underline;color:purple;'>setting a Cookie<span>&#128035</span></h3>";

     setcookie("id","Yasmin",time()+60);
 
      // Access cookie value - $_COOKIE
  
       echo $_COOKIE["id"];
  
          echo"<br>";
          echo "<h3 style='text-decoration:underline;color:purple;'>Accessing a  Cookie<span>&#128035</span></h3>";

       setcookie("id1","samir",time()+15*60);
 
       if(isset($_COOKIE["id1"]))
       {
           echo "The cookie value of id is: ".$_COOKIE["id1"];
       }
       else
       {
           echo "NOT Set.";
       }
       echo "<h3 style='text-decoration:underline;color:purple;'>Removing a Cookie<span>&#128035</span></h3>";
 
       //Removing a cookie
       echo"<br>";

       setcookie("id1","",time()-1500);
 
       if(isset($_COOKIE["id1"]))
       {
           echo "The cookie value of id is: ".$_COOKIE["id1"];
       }
       else
       {
           echo "NOT Set.";
       }

       echo"<br>";
       echo "<h3 style='text-decoration:underline;color:purple;'>PHP Session<span>&#128035</span></h3>";
    /*1.starting a session
      2. storing and a session 
      3. Destroying a session
      */
      
      // starting a session
 
      session_start();
 
       // Storing session data
 
        $_SESSION["firstname"] = "Yasmin";
       $_SESSION["lastname"] = "Khatun";
 
// Access session data
  
   echo $_SESSION["firstname"].".".$_SESSION["lastname"];
 
//Removing the session data 
         
if(isset($_SESSION["lastname"]))
{
    unset($_SESSION["lastname"]);
}
 
echo "<br>".$_SESSION["lastname"];
 
// Destroy the session
 
session_destroy();
 
?>



</body>
</html>
