<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

date_default_timezone_set("Asia/kolkata");
echo "The time is " . date("h:i:sa");
echo"<br>";

$d=strtotime("next Thursday");
echo date("Y-m-d h:i:sa", $d) . "<br>";




?>