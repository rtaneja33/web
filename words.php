<?php
$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
echo fread($myfile);
//printf($x);
fclose($myfile);
?>