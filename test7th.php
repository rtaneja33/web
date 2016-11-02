<?php 
	//instantiate our DB object
	$host="host=ec2-174-129-223-35.compute-1.amazonaws.com";
	$dbname="dbname=d7b1p5egvpv1r1";
	$user="user=ixmcxtritsaljf";
	$port="port=5432";
	$password="password=1_NfGYcoaASkseEh0zvQ_eOffl";
	$db = pg_connect($host." " .$dbname." " .$user." " .$port." " .$password);
	//create a table try/catch
	$query = <<<CREATE
		CREATE TABLE Football(
				TeamName varchar(255),	
				NumberofWins int
			)

CREATE;
	$ret = pg_query($query);
	if(!$ret)
	{
		echo(pg_last_error($db));
	}
	else{
		echo("IT WORKED!");
	}


	// $query = "CREATE "...
	//add some data
	$query = <<<CREATE
		INSERT INTO Football VALUES(
			Redskins, 4);
		

CREATE;
$ret = pg_query($query);
	if(!$ret)
	{
		echo(pg_last_error($db));
	}
	else{
		echo("IT WORKED!");
	}
	//Query our table
 ?>