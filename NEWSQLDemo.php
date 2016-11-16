<?php 
	//instantiate our DB object
	$host="host=ec2-174-129-223-35.compute-1.amazonaws.com";
	$dbname="dbname=d7b1p5egvpv1r1";
	$user="user=ixmcxtritsaljf";
	$port="port=5432";
	$password="password=1_NfGYcoaASkseEh0zvQ_eOffl";
	$db = pg_connect($host." " .$dbname." " .$user." " .$port." " .$password);
	//create a table try/catch
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
else
echo "SUCCESS";

$sql = "INSERT INTO MyGuests (`firstname` , `lastname` , `email`)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>

	<!-- // $query = "CREATE "...
	//add some data
// 	$query = <<<CREATE
// 		INSERT INTO Football VALUES(
// 			Redskins, 4);
		

// CREATE;
// $ret = pg_query($query);
// 	if(!$ret)
// 	{
// 		echo(pg_last_error($db));
// 	}
// 	else{
// 		echo("IT WORKED!");
// 	}
	//Query our table
 ?> -->