<?php 
		$num = $_REQUEST["numIn"];
		for($x=2; x<$num; $x++)
		{
			if($num%$x ==0)
					$isPrime=false;
		}
		echo $num;
		echo("<br>".$isPrime);
 ?>