<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>PHP basic syntax</title>
</head>
<body>
	<?php
		// this comment is inside the php delimeters
		echo "Hello world!";
		echo "<hr />";
		// Each php statement ends with a semi colon
		/*
		Multi line comments
		As long as the code is inside the symbols, then
		they are part if the comment
		*/

		// Variables are use to store data and provide the stored data
		// data when needed

		// In PHP, variables start with the $ sign

		/*
			1. Variable names are case sensitive
			2. Names should start with either a letter or underscore
			3. No spaces allowed variable names

		*/

		// PHP data type -> loosely typed,  the type of data doesn't need to  be specified
		// Integer - Positive or negative number without any decimal values

		$age = 36;
		echo $age;
		echo "<br>";

		// Float - numbers with decimal values
		$top_speed = 104.80;
		echo "<h3>top speed: ", $top_speed, "</h3>";
		echo "<br>";

		// String - alphanumeric text
		$course = "PHP";
		echo $course;
		echo "<br>";

		// Boolean - truth values
		$is_logged_in = true;
		echo $is_logged_in;
		echo "<br>";

		// PHP constants are variables whose values cannot change at runtime
		// ex. we would want to create a variable for Pi (3.14)
		define("PI", 3.14);
		echo PI;

		
	?>
</body>
</html>