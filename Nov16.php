<?php 
	//create an insert query
	<<<CREATE TABLE FOOTBALL
(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);
CREATE;
	$queryStr= <<<QUERY
	INSERT INTO FOOTBALL VALUES("Bill Belicheck","Patriots",7,2,0)

QUERY;
	pg_query()($queryStr);

		$queryStr= <<<QUERY
	SELECT * FROM FOOTBALL

QUERY;
	$output = pg_query()($queryStr);
	while($row=pg_fetch_assoc($output))
		var_dump($row);

 ?>