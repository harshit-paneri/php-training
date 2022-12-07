<?php

define("college","Techno India");
echo college; 
echo"<br>";

$x = 25;
$y = 5;
echo"<br>";
echo $x/$y;
echo"<br>";
$x++;
echo $x;
echo"<br>";

$a = 25;
$b = 5;
if($b<$a)
{
    echo "Happy Happy Birthday";
}
else{
    echo "Happy Birthday";
}
echo"<br>";

// switch case

$number=14;
 switch($number){
    case 1:
     echo "My Number is 1";
    break;
    case 2:
        echo "My Number is 2";
       break;
       case 3:
        echo "My Number is 3";
       break;
       case 4:
        echo "My Number is 4";
       break;
       case 5:
        echo "My Number is 5";
       break;
       case 6:
        echo "My Number is 6";
       break;
       case 7:
        echo "My Number is 7";
       break;
       case 8:
        echo "My Number is 8";
       break;
       case 9:
        echo "My Number is 9";
       break;
       case 14:
        echo "Happy Birthday 🎂";
       break;
     default:
      echo "The number is out of range of (1-10)"; 
 }
 echo"<br>";
 $color=array("red","green","blue");
 foreach($color as $value)
 echo "$value <br>";


?>