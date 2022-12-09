<?php
// $myfile = fopen("text.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("text.txt"));
// $t1 = "Hii I am t1";
// fwrite($myfile,$t1);

$myfile = fopen("text.txt", "w") or die("Unable to open file!");
$txt = "Hii I am t3\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("text.txt", "r") or die("CAN T open");

echo fread($myfile,filesize("text.txt"));
fclose($myfile);
?>