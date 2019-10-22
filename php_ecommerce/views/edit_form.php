

<?php 
	
	include '../partials/header.php'; 
	include '../partials/navbar.php';

	function getContent(){
		return "Edit Item";
	}

	$item_to_update = $_GET['id'];
	
	// var_dump($item_to_update);

	//query that retrieve the item to be updated from the items table via item_id
	$item_query = "SELECT name, price, description FROM items WHERE id = $item_to_update";
	$result = mysqli_query($conn, $item_query);

	$item = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mt-4">
				<div class="card-header text-center">
					<h2>Edit Item</h2>
				</div>
				<div class="card-body">
					<form action="../controllers/update_item.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="productName" class="label-text">Product Name:</label>
							<input id="productName" type="text" name="productName" class="form-control" value="<?= $item['name'] ?>" />
						</div>


						<div class="form-group">
							<label for="description" class="label-text">Description:</label>
							<input id="description" type="text" name="description" class="form-control" value="<?= $item['description'] ?>" />
						</div>
						
						<div class="form-group">
							<label for="price" class="label-text">Price:</label>
							<input id="price" type="text" name="price" class="form-control" value="<?= $item['price'] ?>" />
						</div>


						<button type="submit" class="btn btn-primary">Update Item</button>
					</form>
				</div>
				<div class="card-footer"></div>
			</div>
			
		</div>
	</div>
</div>


<?php require '../partials/footer.php'; ?>

