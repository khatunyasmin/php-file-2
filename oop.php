<?php
 
    require "nigam.php";
    
    // creating object of the class
    $obj = new nigam;
    
    
    $obj->length = 500;
    $obj->width = 10;
    
    
    echo $obj->getperimeter();
 
?>