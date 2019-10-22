<?php 

session_start();

// when to checkout
// 1. finalized cart
// 2, logged in
require_once('./connection.php');

// var_dump($_SESSION['user']);

// checks of a user is logged in
if ($_SESSION['user']) {
	// orders table - needs (user id, transaction code, purchase date, total, status id, payment mode)

	$user_id = $_SESSION['user']['id'];
	// var_dump($user_id);
	$transaction_code = "MyStore".time();
	$total = 0; // update this after we compute the total from cart
	$status_id = 1; // default value for pending
	$payment_mode_id = 1; // default value of COD

	// var_dump($transaction_code);
	$order_query = "INSERT INTO orders(user_id, transaction_code, total, status_id, payment_mode_id)
					VALUES ('$user_id','$transaction_code','$total','$status_id','$payment_mode_id')";

	$order_result = mysqli_query($conn, $order_query);

	// mysqli_insert_id() // returns the id of the most recent order/recent data on the table
	$order_id = mysqli_insert_id($conn);

	// create entry for our item_order table
	// item_id in (sessioncart), recent orderid($order_id)

	foreach ($_SESSION['cart'] as $item_id => $quantity) {
		$item_query = "SELECT * FROM items WHERE id=$item_id";
		$item_result = mysqli_query($conn, $item_query);
		$item = mysqli_fetch_assoc($item_result);
		// var_dump($item);
		// echo "<hr>";

		// set the value of total
		$total += $item['price'] * $quantity;

		// insert data to item_order table
		// order_id, item_id and quatity

		$item_order_query = "INSERT INTO item_order(order_id, item_id, quantity)
		VALUES ('$order_id','$item_id', '$quantity')";

		$item_order_result = mysqli_query($conn, $item_order_query);
		var_dump($item_order_result);
	}

	// UPDATE orders table to reflect to the total
	// syntax: UPDATE table_name SET column_name = $new_value WHERE column_name = $order_id;

	$update_total_orders_query = "UPDATE orders SET total = $total WHERE id=$order_id";
	$update_total_order_result = mysqli_query($conn, $update_total_orders_query);

	if ($update_total_order_result) {
		echo "order added";
		unset($_SESSION['cart']);
		header("Location: ../views/gallery.php");
	} else {
		echo mysqli_error($conn);
	}
}

?>