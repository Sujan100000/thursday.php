<?php
require 'config.php';
$sql = "delete from users where user_id=0";
$delete = $conn->query($sql);
 if($delete === TRUE) {
 	echo" deleted ";
 } else {
 	echo "not deleted";
 }