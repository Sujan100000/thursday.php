<?php
require 'config.php';
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName= "sept_9";
$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn -> connect_error) {
	die ('failed:' . $conn -> connect_error);

}
$sql = "select * from users";
$result = $conn -> query($sql);

if ($result->num_rows > 0 ) {
	while ($row = $result->fetch_assoc()){
		echo "user_id:" . $row["user_id"] ."<br>name " . $row ["name"]. "<br>";
		}

}
else {
		echo "there is no value";
		}
$conn -> close();