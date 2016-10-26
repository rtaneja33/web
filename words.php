<?php
$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
echo fgets($x);
printf($x);
fclose($myfile);
?>