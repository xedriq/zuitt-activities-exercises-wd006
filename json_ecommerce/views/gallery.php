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
 	<div class="row">

 		<?php
	 		$json = file_get_contents('../assets/lib/products.json');
	 		$products = json_decode($json, true);

 			foreach($products as $product) {
 		?>

	 	<div class="col-md-3">
 			<div class="card mt-4">
 				<div class="card-header"><?= $product['name']; ?></div>
 				<img class="card-img-top" src="<?= $product['image']; ?>">
 				<div class="card-body d-md-flex justify-content-between">
 					<p class="card-text"><?= $product['description'];?></p>
 					<p class="card-text">P <?= $product['price']; ?></p>
 				</div>
 			</div>
 		</div>
	 	<?php } ?>
 	</div>
 </div>

<?php 
	require_once '../partials/footer.php';
?>