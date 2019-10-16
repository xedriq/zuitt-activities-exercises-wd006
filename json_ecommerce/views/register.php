<?php 

	include '../partials/header.php'; 
	include '../partials/navbar.php';

	function getContent(){
		return "Register";
	}

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-12 col-md-8 mx-auto">
			<div class="card mt-md-3 mb-md-0 mb-3">
				<h1 class="text-center card-header">Registration</h1>
				<div class="card-body">
					<form action="../controllers/register_user.php" method="POST" class="mx-auto d-md-flex flex-column">
						<!-- action attribute sets the destination to which the form data is sumitted.
						the value of this can be absolute or relative url -->
						
						<!-- the method attribute specifies the type of http request you want to make when
						sending the form -->
						<div class="form-group">
							<label for="fname">First Name: </label>
							<input type="text" name="firstName" id="fname" class="form-control">
						</div>
						
						<div class="form-group">
							<label for="lname">Last Name: </label>
							<input type="text" name="lastName" id="lname" class="form-control">
						</div>
						
						<div class="form-group">
							<label for="e-mail">Email: *</label>
							<input type="email" name="email" id="e-mail" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="password1">Password: * </label>
							<input type="password" name="password" id="password1" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label for="password2">Confirm Password: *</label>
							<input type="password" name="confirmPassword" id="password2" class="form-control" required>
						</div>
						
						<input type="submit" value="Register" class="btn btn-primary mt-3 w-50 mx-auto">
					</form>			
				</div>
				<div class="card-footer">
					<p>* required</p>
					<p>Already have an account? Log in <a href="./login.php">here</a>.</p>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php require '../partials/footer.php'; ?>
