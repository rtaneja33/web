<?php
//$s = $_REQUEST["str"];
//$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
//echo fread($myfile, filesize("words.txt"));
$file = file("words.txt", FILE_IGNORE_NEW_LINES);
echo($file);
fclose($myfile);
?>