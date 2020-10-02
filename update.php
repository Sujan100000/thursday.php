<?php
require 'config.php';
$sql = "update users SET name = 'ravi' WHERE user_id = 2 " ;
$update = $conn -> query($sql);

if ($update === TRUE) {
	echo " updated";

}else {
  	echo "error";
}