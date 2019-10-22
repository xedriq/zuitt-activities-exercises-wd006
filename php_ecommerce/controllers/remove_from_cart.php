<?php 
	
	// var_dump($_POST['item_id']);


	session_start();
	$item_id = $_POST['item_id'];
	// echo "<hr>";
	// var_dump($_SESSION['cart']);
	// note: remove specific item from the session cart
	unset($_SESSION['cart'][$item_id]);
	header("Location: ". $_SERVER['HTTP_REFERER']);

?>