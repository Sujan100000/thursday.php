<?php
require 'config.php';
$sql = "insert into users ( name , age , contact, address) values ('Sujan' , 18 , '9843819899' , 'thamel')" ;
$insert = $conn -> query ($sql); 

if ($insert === TRUE) {
	echo "successfully created";
} else {
	echo " unseccessfull to create";
}
