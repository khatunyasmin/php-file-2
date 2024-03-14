<?php
$connect = mysqli_connect("localhost","root","");
class colors{

public $color;
public $c;
public function clr(){

            $c=strtolower($this->color);
                    switch($c){
                        case "red":
                            echo "<p style='color:red;'>Red color is matched.</p>";
                        break;
                        case "blue":
                            echo "<p style='color:Blue;'>Blue color is matched.</p>";
                        break;
                        case "green":
                            echo "<p style='color:Green;'>Green color is matched.</p>";
                        break;
                        case "yellow":
                            echo "<p style='color:Yellow;'>Yellow color is matched.</p>";
                        break;
                        case "pink":
                            echo "<p style='color:Deeppink;'>Pink color is matched.</p>";
                        break;
                        case "orange":
                            echo "<p style='color:Orange;'>Orange color is matched.</p>";
                        break;
                        default: echo "<p style='color:Grey;'>No color matched</p>";
                        break;
                        }  
}
}



$obj=new colors;
$obj->color=mysqli_real_escape_string($connect,$_REQUEST['a2']);
$obj->clr();
?>