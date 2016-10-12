<html>
<head>
	<title>What up php?</title>
	<script type="text/javascript">
		function doStuff(){
				var text = document.getElementById("toOutput").value;
				document.getElementById("outputDiv").innerHTML = text;

		}
	</script>
</head>
<body>
	<?php
		echo("<input id = 'toOutput'>");
		echo("hello");

	?>
	<button id="changeStuff" onclick = "doStuff()">click me!</button>
	<div id ="outputDiv"></div>

</body>
</html>