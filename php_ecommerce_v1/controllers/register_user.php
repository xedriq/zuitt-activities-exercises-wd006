<?php
	require_once('./connection.php');
	// PHP has predefined variables which are designed to collect data sent by html form which
	// $_POST and $_GET superglobal variable

	// superglobal variables simply means that it is a specially pre-defined
	// variable(normally arrays) that can be accessed in the program

	// the request returned an array where it established the name
	// attribute of the input as the key and the value inputted as the value

	// they do the same this as both variables handle html
	// form data but the main difference is when you use the GET method,
	// the query string we entered in the form will be displayed
	// in the url. POST, on the other hand,

	// var_dump($_POST['firstName']) ;
	
	// DATA SANITIZATION
	

	$fname = htmlspecialchars($_POST['firstName']);
	$lname = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$address = htmlspecialchars($_POST['address']);
	$password = htmlspecialchars($_POST['password']);
	$confirmPassword = htmlspecialchars($_POST['confirmPassword']);
	$role_id = 2;

	// $fname = 'cedrick';
	// $lname = 'tabares';
	// $email = 'ced@mail.com';
	// $username = 'ctabares';
	// $address = 'qc';
	// $password = '111111';
	// $confirmPassword = '111111';
	// $role_id = 1;
	

	if ($fname != "" && $lname != "") {
		echo "Welcome $fname $lname!<br>";
	} else {
		echo "Please provide a first and last name. <br>";
	}


	// if email input is not equal to an empty string, echo out
	// your email is: (value of the email variable)
	// else output, please provide an email
	// echo "<hr>";

	if ($email != "") {
		echo "Your email is $email";
	} else {
		echo "Please provide an email.";
	}

	// echo "<hr>";
	
	if ($password != "" || $confirmPassword != "") {
		// lets hash our password to make it secure
		$password = sha1($password);
		$confirmPassword = sha1($confirmPassword);

		if ($password === $confirmPassword) {

			$insert_query = "INSERT INTO users(username, password, first_name, last_name, email, address, role_id)
				VALUES('$username', '$password', '$fname', '$lname', '$email', '$address', '$role_id');";

			$result = mysqli_query($conn, $insert_query);

			if ($result) {
				echo "User registered.";
			} else {
				echo mysqli_error($conn);
				die();
			};

		
			header('Location: ../views/login.php');

		} else {
			echo "Please verify your password.";
		}

		// we are going to store to a json file. JSON stands for Javascript Object Notation
		// It is used id exchanging and storing data from the webserver. JSON user the
		// oject notation/syntax of javascript

	} else {
		echo "Please check the password fields.";
	}

	
?>