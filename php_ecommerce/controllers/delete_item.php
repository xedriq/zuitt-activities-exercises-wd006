<?php 

require_once('./connection.php');

session_start();

// id of item to delete

$item_id = $_GET['id'];

$query = "DELETE FROM items WHERE id=$item_id";
$result = mysqli_query($conn, $query);

if ($result) {
	echo "item deleted";
	header("Location: ../views/gallery.php");
} else {
	echo mysqli_error($conn);
}


?>