<?php 

	include '../partials/header.php'; 
	include '../partials/navbar.php';

	function getContent(){
		return "Login";
	}
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-12 col-md-8 mx-auto">
			<div class="card mt-md-3">
				<h1 class="text-center card-header">Log In</h1>
				<div class="card-body">
					<form action="../controllers/authenticate.php" method="POST" class="mx-auto d-md-flex flex-column">
								
						
						<div class="form-group">
							<label for="e-mail">Email: *</label>
							<input type="email" name="email" id="e-mail" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="password1">Password: * </label>
							<input type="password" name="password" id="password1" class="form-control" required>
						</div>
						
						
						
						<input type="submit" value="Log In" class="btn btn-info mt-3 w-50 mx-auto">
					</form>			
				</div>
				<div class="card-footer">
					<p>No account yet? Register <a href="./register.php">here</a>.</p>
				</div>
			</div>	
		</div>
	</div>
</div>



<?php require '../partials/footer.php' ?>
