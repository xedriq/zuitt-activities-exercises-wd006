<?php
// sanitize inputs

$email = htmlspecialchars($_POST['email']);
$password = sha1(htmlspecialchars($_POST['password']));

//retrive the content of accounts.json as a string

$json = file_get_contents('../assets/lib/accounts.json');

// convert it to a php assoc array
$accounts = json_decode($json, true);
// var_dump($accounts)

$flag = false;

foreach ($accounts as $account) {
	if ($email == $account['email'] && $password == $account['password']) {
		
		// how to create a session
		// initially we have to tell php that we want to start/initialize
		// a session by declaring the session_start() function
		session_start();

		// once a session is initialized, you can create properties
		// or the more correct term, session variables to your
		// $_SESSION and assign values to it
		// syntax: $_SESSION['session_variable'] = value;
		$_SESSION['email'] = $email;
		$_SESSION['first'] = $account['firstName'];
		
		$flag = true;
	}

	// as we've discussed, databases are ideal for permanently storing data
	// that an application can retrieve later, there are also options for storing data
	// temporarily in php, and one of those is SESSIONS. Sessions are designed to hold smaller chunks
	//	of data that normally found in the database(eg users' email/details)

	// superglobal variables $_SESSION is a special form of "continuity" used to store
	// data across different page requests as user navigates during their visit
	// in our website. The data of the session is stored in the webserver of our website
	// and can be retrieved from the session we initiate at the beginning of each page

}

if ($flag) {
	echo "Login Successful!";
	header('Location: ../views/gallery.php');
} else {
	echo "Invalid credentials";
}

?>