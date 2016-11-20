<?php 
$sq = new SQLite3('test.db');
$sq->exec("CREATE TABLE IF NOT EXISTS contactinfo (username varchar(255), city varchar (255), state varchar(255))");
	$username = $_POST["USER"];
	$city = $_POST["CITY"];
	$state = $_POST["STATE"];


	$contacts = array("use" => $username, "cit" => $city, "stat" => $state);
	$sq->exec("INSERT INTO contactinfo (username,city,state) VALUES ('$contacts[username]','$contacts[city]','$contacts[state]')");

	echo "<table border='5' class='stats' cellspacing='0'>

            <tr>
            <td class='hed' colspan='8'>Form Data</td>
             </tr>
            <tr>
            <th>Username</th>
            <th>City</th>
            <th>State</th>

            </tr>";
     $result = $sq -> query("SELECT * FROM contactinfo");
     while($row = $result -> fetchArray()){
     		 echo "<tr>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['city'] . "</td>";
              echo "<td>" . $row['state'] . "</td>";

              echo "</tr>";
     }

 ?>