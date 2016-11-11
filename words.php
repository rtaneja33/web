<?php
$s = $_REQUEST["str"];
// $s = $argv[1]; 
 

//$x = $_GET("str");
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
$f = fread($myfile, filesize("words.txt"));
// $file = file("words.txt", FILE_IGNORE_NEW_LINES);
// echo($file);
$homepage = file_get_contents('words.txt');
$reg = "/".$s."/im";
//echo($reg);
$num = preg_match_all($reg, $f, $match);
echo($num);



// $pieces = explode(" ", $homepage);
// echo("Size is ");
// echo(sizeof($pieces));
// if($pieces[$i] == $s)
// 	{
// 		$bool = true;
// 		echo($s);
// 	}
	
// }
// // if($bool == true)
// 	echo($s);
// else
// 	echo("Not A Real Word");
// //split homepage into array
// echo $homepage;

fclose($myfile);
?>