<?php
//$s = $_REQUEST["str"];

//$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
$file = fread($myfile, filesize("words.txt"));
$lines = file("words.txt" FILE_IGNORE_NEW_LINES);
echo($lines);
// for($i =0; $i<filesize("words.txt");$i++)
// {
// 	if($file contains )
// }
//echo fread($myfile, filesize("words.txt"));
fclose($myfile);
?>