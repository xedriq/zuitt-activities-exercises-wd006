<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Activity</title>
</head>
<body>
	<h1>PHP Activity</h1>

	<?php 

	$movies = array(
		"Comedy" => array("Pink Panther", "Johnny English", "See No Evil Hear No Evil"),
		"Action" => array("Die Hard", "Expendables"),
		"Horror" => array("Exorcist"),
		"Romance" => array("Romeo and Juliet")
	);

	

	echo "<table>";
	echo "<head>";
	echo "<td>Movie Title</td>";
	echo "<td>Category</td>";
	echo "</head>";
	echo "<tr>";
	echo "<td>". $movies["Comedy"][0]."</td>";
	echo "<td>". key($movies) . "</td>";
	echo "</tr>";
	echo "</table>";
	?>
</body>
</html>