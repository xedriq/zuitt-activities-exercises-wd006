<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>PHP Control Structure</title>
</head>
<body>
	<?php

	// A control structure is a block of code that
	// decides the execution path depending on the 
	// value of a function

	// if... else
	$first_number = 7;
	$second_number = 21;

	if ($first_number > $second_number) {
		echo "$first_number is greater than $second_number <br>";
	} else {
		echo "$first_number is less than $second_number <br>";
	}

	// else... if
	$language = "Spanish";
	if ($language == "French") {
		echo "Bojour! <br>";
	} else if ($language == "Spanish") {
		echo "Hola! <br>";
	} else {
		echo "Hello! <br>";
	}


	$day = "wednesday";

	switch ($day) {
		case 'sunday':
			echo "go to church";
			break;
		case 'wednesday':
			echo "ladies night";
			break;
		case 'saturday':
			echo "bingo night";
			break;
		default:
			echo "have a nice day at work.";
			break;
	}
	echo "<br>";
	// Loop are used for repeated actions depending on the condition
	// while loop

	$num1 = 1;
	while ($num1 <= 10) {
		echo "$num1 <br>";
		$num1++;
	}
	echo "<hr/>";
	// do while loop

	$num2 = 5;
	do {
		echo "$num2 <br>";
		$num2--;
	} while ( $num2 >= 0);

	// for loop
	echo "<hr />";
	for ($i=0; $i <=10 ; $i++) { 
		echo $i * 2 ."<br>";
	};

	echo "<hr/>";
	$animals = array("cat", "dog", "turtle", "human", "chicken");

	foreach ($animals as $animal) {
		echo "I have a pet $animal <br>";
	};

	echo "<hr/>";

	$grades = [
		"Math" => 95,
		"Science" => 89,
		"English" => 99,
		"Social Studies" => 92
	];

	foreach ($grades as $subject => $grade) {
		echo "Your grade in $subject is $grade <br>";
	}

	?>
</body>
</html>