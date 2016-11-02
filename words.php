<?php
$s = $_REQUEST["str"];

//$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
//echo fread($myfile, filesize("words.txt"));
// $file = file("words.txt", FILE_IGNORE_NEW_LINES);
// echo($file);
$homepage = file_get_contents('words.txt');
$pieces = explode(" ", $homepage);
$bool = false;
// for($i = 0; $i < sizeof($pieces); $i++)
// {
// if($pieces[$i] == $s)
// 	{
// 		$bool = true;
// 		echo($s);
// 	}
// }
// if($bool == true)
// 	echo($s);
// else
// 	echo("Not A Real Word");
// //split homepage into array
// echo $homepage;

fclose($myfile);
?>