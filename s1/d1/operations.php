<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Operations</title>
</head>
<body>
	<h1>PHP Operations</h1>
	<?php 

	// OPERATIONS
	// Arithmetic
	// + - / * %
	echo "<h2>Arithmetic</h2>";
	echo 10+10;
	echo "<br>";
	echo 10-10;
	echo "<br>";
	echo 10*10;
	echo "<br>";
	echo 10/10;
	echo "<br>";
	echo 10%10;
	echo "<br>";
	$num1 = 10;
	echo $num1++;
	echo "<br>";
	echo $num1;
	echo "<br>";

	// Comparision
	// < > == === >= <=
	echo "<h2>Comparision</h2>";
	echo 1 > 5; // false (blank)
	echo "<br>";
	echo 5 < 10; // true (1)
	echo "<br>";
	echo 5 == 5; // true (1)
	echo "<br>";
	// Logical
	echo "<h2>Logical</h2>";
	echo true && true; //true (1)
	echo "<br>";
	echo true || false; // true (1)
	echo "<br>";
	echo !true; //false(blank)
	echo "<br>";

	echo 1==="1"; // false(blank)
	echo "<br>";
	echo 1=="1"; // true(1)
	echo "<br>";

	//String
	$name = "Ironman";
	echo "$name is my hero";
	echo "<br>";
	echo '$name is my hero';
	echo "<br>";

	$firstName = "Cedrick";
	$lastName = "Tabares";
	echo $firstName . $lastName;
	echo "<br>";
	echo "$firstName $lastName"

	?>
</body>
</html>