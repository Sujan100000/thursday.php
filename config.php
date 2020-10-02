<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName= "sept_9";
$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn -> connect_error) {
	die ('failed:' . $conn -> connect_error);

}