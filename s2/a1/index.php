<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Control Structure Activity</title>
</head>
<body>
	<?php

	$i = 1;

	while ( $i <= 50) {
		if ($i % 2 == 0) {
			if ($i % 5 == 0 ) {
				echo "$i - BuzzPop <br>";
			} else {
				echo "$i - Buzz <br>";
			}
		} else {
			if ($i % 5 == 0) {
				echo "$i - Pop <br>";
			} else {
				echo "$i - Fizz <br>";
			}
		}
		$i++;
	}

	echo "<hr />";
	
	for ($x=1; $x <= 20 ; $x++) { 
		if ($x  % 2 ==0) {
			echo "$x - even <br>";
		} else {
			echo "$x - odd <br>";
		}
	}

	?>

</body>
</html>