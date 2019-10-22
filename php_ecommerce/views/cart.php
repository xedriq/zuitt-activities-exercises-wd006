<?php 

// in order for us to access the stored data in
// the $_SESSION across diff pages, we just initialize
// the session start function

// once we have initialized the session. we can then freely access all the session vars
// and its values stored in the current $_SESSION and use it as we please

// 	if($_SESSION[''] == "admin@email.com") {
//		echo "hello admin";
//	}

	require_once '../partials/header.php';
	require_once '../partials/navbar.php';

	function getContent(){
		return "Cart";
	}

 ?>

<div class="container">
	<h2 class="text-center mt-3">My Cart</h2>
	<div class="row">
		<div class="col-md-10 mx-auto">

				<table class="table table-hover" id="cart_item">
					<thead>
					    <tr>
					      <th scope="col">Item</th>
					      <th></th>
					      <th scope="col">Price</th>
					      <th scope="col">Quantity</th>
					      <th scope="col">Sub Total</th>
					      <th></th>
					    </tr>
					</thead>

					<tbody>
						<?php 
							$total = 0;
							// var_dump(count($_SESSION['cart'])!=0);
							if (isset($_SESSION['cart']) && count($_SESSION['cart'])!=0) { // if cart session has any item
								
							foreach ($_SESSION['cart'] as $item_id => $item_quantity) {
							 	// var_dump($item_id);
							 	// var_dump($item_quantity);

							 	$query = "SELECT * FROM items WHERE id=$item_id";
							 	$result = mysqli_query($conn, $query);
							 	$found_item = mysqli_fetch_assoc($result);

							 	// var_dump($found_item);
							 	// conver the assoc array into set of variables w/ associated array keys as the variable names
							 	extract($found_item);
							 	$subtotal = $item_quantity * $price;
							 	$total += $subtotal;
						 ?>
						    <tr>
						      <td class="align-middle">
						      	<span class="font-weight-bolder"><?= $name ?></span>
						      </td>
						      <td><img src="<?= $image ?>" class="img-fluid" style="height: 160px;" ></td>
						      <td class="align-middle">Php <?= number_format($price, 2) ?></td>
						      <td class="text-center align-middle">
						      	<form action="../controllers/update_cart.php" method="POST" class="form-group d-flex">
						      		<input type="number" name="item_quantity" class="text-center w-25 quantity_input form-control" value="<?= $item_quantity ?>" min="0" max="3">
						      		<input type="hidden" name="item_id" value="<?= $id ?>">
						      		<input type="hidden" name="update_from_cart" value="true">
						      		<button class="btn btn-primary btn-sm">Update</button>
						      	</form>
						      </td>
						      <td class="align-middle">Php <?= number_format($subtotal, 2) ?></td>
						      <td class="align-middle">
						      	<form method="POST" action="../controllers/remove_from_cart.php">
						      		<input type="hidden" name="item_id" value="<?= $item_id ?>">
						      		<button class="btn btn-danger btn-block">Remove</button>
						      	</form>
						      </td>
						    </tr>
						<?php } ?>
					    <tr class="table-default">
					      <td></td>
					      <td></td>
					      <td></td>
					      <td class="align-middle"><span class="lead font-weight-bold text-primary">
					      	Total: Php <?= number_format($total, 2) ?>
					      </span></td>
					      <td><a href="../controllers/checkout.php" class="btn btn-primary btn-block">Check out</a></td>
					      <td><a href="../controllers/empty_cart.php" class="btn btn-danger btn-block">empty</a></td>
					    </tr> 

					    <?php 
							} else {
								// cart is empty
								echo '<tr>
						  			<td class="text-center" colspan="6">No items in cart</td>
						    		</tr>';
							}	

					    ?>
					    
					</tbody>
				</table>
		</div>
	</div>
</div>


<?php 
	require_once '../partials/footer.php';
?>