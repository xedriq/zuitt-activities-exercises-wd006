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
		return "Gallery";
	}
 ?>



 <div class="container">
 	<h2 class="text-center mt-4">Products Dashboard</h2>
	<h3>Sort By:</h3>
	<ul class="list-group">
		<li class="list-group-item">
			<a href="../controllers/sort.php?sort=asc"> Price (Lowest to Highest)</a>
		</li>
		<li class="list-group-item">
			<a href="../controllers/sort.php?sort=desc"> Price (Highest to Lowest)</a>
		</li>
	</ul>
 	<div class="row">
 		<?php
	 		// $json = file_get_contents('../assets/lib/products.json');
	 		// $products = json_decode($json, true);
 			$product_query = "SELECT * FROM items";

 			if (isset($_SESSION['sort'])) {
 				$product_query .= $_SESSION['sort'];
 			}
 			
 			// mysqli_query() performs a query to our db that returns true or false
 			// mysqli_query(connection, query to execute)
 			$products = mysqli_query($conn, $product_query);

 			foreach($products as $product) {
 		?>

	 	<div class="col-md-3">
 			<div class="card mt-4">
 				<div class="card-header font-weight-bolder"><?= $product['name']; ?></div>
 				<img class="card-img-top" src="<?= $product['image']; ?>">
 				<div class="card-body d-md-flex justify-content-between">
 					<p class="card-text"><?= $product['description'];?></p>
 					<p class="card-text">Php <?= $product['price']; ?></p>
 				</div>
 				<div class="card-footer">
 					<form action="../controllers/update_cart.php" method="POST">
 						<div class="form-control">
 							<input type="number" name="item_quantity" class="form-control form-control-sm" min="1" max="3" value="1">
 							<input type="hidden" name="item_id" value= <?= $product['id'] ?> >
 						</div>
 						<button class="btn btn-primary btn-block add-to-cart">Add to Cart</button> 						
 					</form>
 					<?php 
	 					if ($_SESSION['user']['role_id'] == 1 ) {
	 						echo '<a href="../controllers/delete_item.php?id='. $product['id'] .'" class="btn btn-danger btn-block mt-3">Delete Item</a>';

	 						echo '<a href="./edit_form.php?id='. $product['id'] .'" class="btn btn-info btn-block mt-3">Update Item</a>';
	 					}
 					?>
 					
 				</div>
 			</div>
 		</div>
	 	<?php } ?>
 	</div>
 </div>

<?php 
	require_once '../partials/footer.php';
?>