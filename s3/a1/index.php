<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Functions Activity</title>
</head>
<body>
	<?php

	function calc($num1,$num2,$operation) {
		$operation = strtolower($operation);

		switch ($operation) {
			case 'add':
				$sum = $num1 + $num2;
				echo "The sum is $sum <br>";
				break;
			case 'subtract':
				 $diff = $num1 - $num2;
				 echo "The diffence is $diff <br>";
				 break;
			case 'multiply':
				$product = $num1 * $num2;	
				echo "The product is $product <br>";
				break;
			case 'divide':
				$quotient = $num1 / $num2;
				echo "The quotient is $quotient <br>";
				break;
			case 'modulo':
				$remainder = $num1 % $num2;
				echo "The remainder is $remainder <br>";
				break;		
			default:
				echo "Invalid Operation <br>";
		}
	}

	calc(10,16, "multiply");
	calc(10,16, "MuLtiply");
	calc(1,1, "add");
	calc(1,1, "Brandon");
	calc(15,2, "modulo")

	?>

</body>
</html>