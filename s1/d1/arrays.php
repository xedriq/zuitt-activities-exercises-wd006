<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Operations</title>
</head>
<body>
	<h1>Arrays</h1>
	<?php 

	// An array is a special variable that can hold more than
	// one value at a time.

	// To create an array in PHP, we could use the square bracket notation
	// OR the array()
	// In PHP, there are 3 types of arrays:
		// Indexed Array - array with a number index
		// Associative array - arrays with named keys
		// Multidimensional Array - arrays containing one or more arrays

	// Indexed Array
	// $topics = array("HTML", "CSS", "JS", "Jquery", "PHP");
	$topics = ["HTML", "CSS", "JS", "Jquery", "PHP"];
	echo "Your are the $topics[1] to my html <3";
	echo "<br>";
	$topics[0] = "Hyper Text Markup Language";
	echo $topics[0];
	echo "<hr />";

	// Asssociative arrays - array with key-value pairs
	//method1
	$student_grade1 = array(
		"Math" => 95,
		"Physics" => 90,
		"Chemistry" => 93,
		"Computer" => 98,
	);
	// method2
	$student_grade2["Math"] = 95;
	$student_grade2["Physics"] = 90;
	$student_grade2["Chemistry"] = 93;
	$student_grade2["Computer"] = 98;

	echo "Student 1's grade in computer is ".$student_grade1["Computer"];
	echo "<br>";
	echo "Student 2's grade in Physics is ".$student_grade2["Physics"];
	echo "<hr />";
	?>
	<?php
		echo "<h2>Multidimensional Array</h2>";
		echo "<lead>Arrays within array</lead>";
		echo "<br>";
		$grocery = array(
			array("Apple", "Banana", "Orange"),
			array("Sitaw", "Bataw", "Patani"),
		);

		echo $grocery[0][0]; // Apple
		echo "<br>";
		echo $grocery[1][2]; // Patani
		echo "<br>";

		$artist = array(
			"Eheads" => array("Alapaap", "El Bimbo"),
			"EXO" => array("Loveshot", "Growl"),
			"ExB" => array("Hayaan mo sila", "Pakinabang")
		);

		echo $artist["ExB"][0];
		echo "<br>";
		print_r($artist); // prints the entire array
	?>
</body>
</html>