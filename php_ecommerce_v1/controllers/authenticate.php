<?php
require_once('./connection.php');

// sanitize inputs
$email = htmlspecialchars($_POST['email']);
$password = sha1(htmlspecialchars($_POST['password']));


$query = "SELECT * FROM users WHERE email='$email';";
$result = mysqli_query($conn, $query);

$account = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
	if ($email != $account['email'] && $password != $account['password']) {
		
		echo "Invalid credentials.";

	} else {
		session_start();

		$_SESSION['user'] = $account;
		// $_SESSION['email'] = $email;
		// $_SESSION['first'] = $account['first_name'];
		// var_dump($_SESSION['user']);
		header('Location: ../views/gallery.php');
	}

} else {
	echo "User does not exist.";
}

?>