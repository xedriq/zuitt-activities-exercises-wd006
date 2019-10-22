<?php 

$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'b43_ecom_db';

$conn = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

// if(!$conn) {
// 	die('db connection failed: '. mysqli_error($conn));
// } else {
// 	echo 'db connection successful';
// };


?>