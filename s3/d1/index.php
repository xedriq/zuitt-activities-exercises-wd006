<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>PHP Functions</title>
</head>
<body>
	<?php

	// Function ia a block of statements that can be used
	// repeatedly in a program. A function doesn't executed unless
	// it is call

	// Function definition - what name does the function have and what it does.
	// function sayHello(){
	// 	echo "Greetings from Batch 43";
	// }

	// sayHello()

	// Function Arguments - serve as an input to the function
	function sayHello($name) {
		echo "Welcome $name to the batch 43.";
	}

	sayHello("Cedrick");

	echo "<hr />";
	function addNums($num1, $num2) {
		$total = $num1 + $num2;
		echo $total. "<br>";
	}

	addNums(10, 15);
	addNums(7, 11);

	// return values from a function
	// a function can return a value using the return statement in
	// conjunction with a value. The return statement stops the execution
	// of the function and returns the value back to the calling code.

	function addFunction($n1, $n2) {
		$sum = $n1 + $n2;
		return $sum;
	}

	$returned_value = addFunction(312,346);
	echo "The sum is $returned_value"
	?>
</body>
</html>