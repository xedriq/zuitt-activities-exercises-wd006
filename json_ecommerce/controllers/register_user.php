<?php

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
	$password = htmlspecialchars($_POST['password']);
	$confirmPassword = htmlspecialchars($_POST['confirmPassword']);

	if ($fname != "" && $lname != "") {
		echo "Welcome $fname $lname!<br>";
	} else {
		echo "Please provide a first and last name. <br>";
	}


	// if email input is not equal to an empty string, echo out
	// your email is: (value of the email variable)
	// else output, please provide an email
	echo "<hr>";

	if ($email != "") {
		echo "Your email is $email";
	} else {
		echo "Please provide an email.";
	}

	echo "<hr>";
	
	if ($password != "" || $confirmPassword != "") {
		// lets hash our password to make it secure
		$password = sha1($password);
		$confirmPassword = sha1($confirmPassword);

		if ($password === $confirmPassword) {
			// retrieve the contents of accounts.json
			// file_get_contents() will return the content in a string
			$json = file_get_contents("../assets/lib/accounts.json");

			// convert the json string to an php assiciative array, when the second parameter is
			// set to true, it converts the json string to an assioc array
			$accounts = json_decode($json,true);
			// var_dump($accounts);

			// form a new assoc array using the sanitized inputs
			$newUser = [
				"firstName" => $fname,
				"lastName" => $lname,
				"email" => $email,
				"password" => $password
			];

			// array_push(array, value to be push)
			array_push($accounts, $newUser);

			// should reflect the newly inserted data($newUser)
			// fopen(file to be opened, mode of access) opens the file for writing
			// w - opens the file for writing/manipulating it
			$to_write = fopen('../assets/lib/accounts.json', 'w');
			
			// fwrite() writes on the opened file
			// fwrite(opened file, string to be written)
			// json_encode(value, option) - converts php array to json string
			// JSON_PRETTY_PRINT option adds white spaces that makes jason string readable
			$encode = json_encode($accounts, JSON_PRETTY_PRINT);
			var_dump($encode);
			
			fwrite($to_write, $encode);
			
			// close the previously opened file
			fclose($to_write);

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