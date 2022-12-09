<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

date_default_timezone_set("Asia/kolkata");
echo "The time is " . date("h:i:sa");
echo"<br>";

$a=strtotime("next Thursday");
echo date("Y-m-d h:i:sa", $a) . "<br>";

$d= mktime(0,0,0,1,1,2023);
$startdate = strtotime("Sunday",$d);
$enddate = mktime(0,0,0,12,31,2023);
while ($startdate <= $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}


?>