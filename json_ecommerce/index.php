<!DOCTYPE html>
<html lang="en">
<head>
	<title>JSON E-Commerce</title>
</head>
<body>
	<?php
		// PHP stands for PHP: Hypertext Preprocesson
		// it allows developers to make what used to be static
		// HTML content and make it responsive to user's requests,
		// or do the same with permanently stored data that
		// resides in a database.

		// to serve a project:
		// php -S address:port
		// php -S localhost:8000

		// to make our web server accessible by remote machines, serve it using 0.0.0.0
		// php -S 0.0.0.0:3000

		echo "Hello";

		// the header function will redirect to the indicated path.

		header('Location: ./views/register.php')

	?>
</body>
</html>