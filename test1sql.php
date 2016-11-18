<?php

/*
 * PHP SQLite - Create a table and insert rows in SQLite
 */

//Open the database mydb
$db = new SQLite3('mydb.db');

//drop the table if already exists
$db->exec('DROP TABLE IF EXISTS people');



//Create a basic table
//$db->exec("TRUNCATE TABLE data");

$db->exec("CREATE TABLE IF NOT EXISTS data (full_name varchar(255), last_name varchar (255), email varchar(255), phone varchar(255), 'date' varchar(255))");

$first = $_POST["FirstName"];
$last = $_POST["LastName"];
$phone = $_POST["Phone"];
$email = $_POST["Email"];
$date = $_POST["date"];
$cars = array("firstName" => $first, "lastName" => $last, "phone" => $phone, "email" => $email, "date" => $date);

//insert rows
$db->exec("INSERT INTO data (full_name, last_name, email, phone, 'date') VALUES ('$cars[firstName]','$cars[lastName]','$cars[email]','$cars[phone]','$cars[date]')");

echo "<table border='5' class='stats' cellspacing='0'>

            <tr>
            <td class='hed' colspan='8'>Form Data</td>
              </tr>
            <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE</th>

            </tr>";
     $result = $db -> query("SELECT * FROM data");
     while($row = $result -> fetchArray()){
     		 echo "<tr>";
              echo "<td>" . $row['full_name'] . "</td>";
              echo "<td>" . $row['last_name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>";
              echo "<td>" . $row['date'] . "</td>";

              echo "</tr>";
     }





?>