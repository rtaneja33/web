<?php
$s = $_REQUEST["str"];
echo($s);
//$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
//echo fread($myfile, filesize("words.txt"));
// $file = file("words.txt", FILE_IGNORE_NEW_LINES);
// echo($file);
$homepage = file_get_contents('words.txt');
$pieces = explode(" ", $homepage);
// for(var i = 0; i < sizeof($pieces);i++)
// {

// }
// //split homepage into array
// echo $homepage;

fclose($myfile);
?>