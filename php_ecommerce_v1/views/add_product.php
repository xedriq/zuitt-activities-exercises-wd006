

<?php 

	include '../partials/header.php'; 
	include '../partials/navbar.php';

	function getContent(){
		return "Add Item";
	}

?>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mt-4">
				<div class="card-header text-center">
					<h2>Add New Item</h2>
				</div>
				<div class="card-body">
					<form action="../controllers/add_item.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="productName" class="label-text">Product Name:</label>
							<input id="productName" type="text" name="productName" class="form-control" />
						</div>

						<div class="form-group">
							<label for="description" class="label-text">Description:</label>
							<input id="description" type="text" name="description" class="form-control" />
						</div>

						<div class="form-group">
							<label for="price" class="label-text">Price:</label>
							<input id="price" type="text" name="price" class="form-control" />
						</div>

						<div class="form-group">
							<label for="image" class="label-text">Image:</label>
							<input id="image" type="file" name="image" class="form-control" />
							<!-- <div class="input-group">
								
								<div class="custom-file">
							        <input type="file" class="custom-file-input form-control" id="image" name="image">
							        <label class="custom-file-label" for="image">Choose file</label>
							    </div>
							    <div class="input-group-append">
						        	<span class="input-group-text" id="image"></span>
						      	</div>
							</div> -->
						</div>


						<button type="submit" class="btn btn-primary">Add Item</button>
					</form>
				</div>
				<div class="card-footer"></div>
			</div>
			
		</div>
	</div>
</div>


<?php require '../partials/footer.php'; ?>

