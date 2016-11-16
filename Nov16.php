<?php 
	$host="host=ec2-174-129-223-35.compute-1.amazonaws.com";
	$dbname="dbname=d7b1p5egvpv1r1";
	$user="user=ixmcxtritsaljf";
	$port="port=5432";
	$password="password=1_NfGYcoaASkseEh0zvQ_eOffl";
	$db = pg_connect($host." " .$dbname." " .$user." " .$port." " .$password);
	//create an insert query
	$table = <<<CREATE TABLE FOOTBALL
(
PersonID varchar(255),
LastName varchar(255),
Address int,
City int,
SomethingElse int
);
CREATE;
$ret = pg_query($query);
	if(!$db)
	{
		echo(pg_last_error($db));
	}
	else{
		echo("IT WORKED!");
	}
// 	$queryStr= <<<QUERY
// 	INSERT INTO FOOTBALL VALUES("Bill Belicheck","Patriots",7,2,0)

// QUERY;
// 	pg_query()($queryStr);

// 		$queryStr= <<<QUERY
// 	SELECT * FROM FOOTBALL

// QUERY;
// 	$output = pg_query()($queryStr);
// 	while($row=pg_fetch_assoc($output))
// 		var_dump($row);

 ?>