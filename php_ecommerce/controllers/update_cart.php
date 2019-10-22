<?php 

// var_dump($_POST);
session_start();

$item_id = $_POST['item_id'];
$item_quantity = $_POST['item_quantity'];

echo "item id: ". var_dump($item_id);
echo "<hr>";
echo "item quant: " . var_dump($item_quantity);

	
if (isset($_POST['update_from_cart'])) {
	// if update came from cart page do this

	// if id and new item quantity from the update quantity form in cart page
	$_SESSION['cart'][$item_id] = $item_quantity;
	
	header("Location: ". $_SERVER['HTTP_REFERER']);
} else {
	// if add to cart/update came from gallery
	if (isset($_SESSION['cart'][$item_id])) {
		$_SESSION['cart'][$item_id] += $item_quantity;
	} else {
		$_SESSION['cart'][$item_id] = $item_quantity;
	}
	header("Location: ". $_SERVER['HTTP_REFERER']);

}

// var_dump($_SESSION['cart']);

?>