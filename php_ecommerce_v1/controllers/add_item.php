<?php 
require_once('./connection.php');
// check how superglobal $_FILES look
// superglobal $_FILES is an assoc array that will contain a key equivalent to the name given in our file input in the form which has an assoc array of information of the uploaded file as its value
$productName = htmlspecialchars($_POST['productName']);
$price = htmlspecialchars($_POST['price']);
$desc = htmlspecialchars($_POST['description']);
$category_id = 1;

$filename = $_FILES['image']['name'];
$filesize = $_FILES['image']['size'];
$file_tempname = $_FILES['image']['tmp_name'];

// var_dump($filename);
// var_dump($filesize);
// var_dump($file_tempname);

// get the file extension of the $filename using the pathinfo() and convert it to lowercase chars.
// pathinfo() will return an assoc array of information regarding the path and file type of the uploaded file
// we are using the PATHINFO_EXTENSION to only return the file extension.

$file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

// var_dump(isset($productName));

$isImg = false;
$hasDetails = false;

if ($productName != "" && $price > 0 && $desc != "") {
	
	$hasDetails = true;
}

if ($file_type == 'jpg' || $file_type == 'png' || $file_type == 'jpeg'
	|| $file_type == 'gif' || $file_type == 'svg') {
	
	$isImg = true;
}

if ($filesize > 0 && $isImg && $hasDetails) {
	// echo "ready to upload"
	// lets declare the final path that we want to assign to the uploaded file
	$final_filepath = "../assets/images/uploaded/" . $filename;
	// var_dump($final_filepath);

	// move the image that is temporarily stored in our server to the final path
	// syntax: move_uploaded_file(temporary path, new path)
	move_uploaded_file($file_tempname, $final_filepath);

} else {
	echo "Please upload a correct image.";
}

// create a new assoc array containing the product details

// $newProduct = [
// 	"name" => $productName,
// 	"price" => $price,
// 	"description" => $desc,
// 	"image" => $final_filepath
// ];


// if (isset($newProduct['name']) && isset($newProduct['price']) && isset($newProduct['description']) && isset($newProduct['image'])) {

	$query = "INSERT INTO items(name,price,description,image,category_id)
		VALUES('$productName',$price,'$desc','$final_filepath',$category_id);";
	$result = mysqli_query($conn, $query);
	// return the contents of products.json in a string
	// $products_json = file_get_contents('../assets/lib/products.json');

	// convert to a php array
	// $products_array = json_decode($products_json, true);

	// push the contents of new #newProduct to the array
	// array_push($products_array, $newProduct);

	// open the products.json file for writing
	// $f_open = fopen('../assets/lib/products.json', 'w');

	// $encode_products_json = json_encode($products_array, JSON_PRETTY_PRINT);

	// write on the opened file using fwrite()
	// fwrite($f_open, $encode_products_json);

	// close the opened file
	// fclose($f_open);
	if ($result) {
		echo "Item added!";
	} else {
		echo mysqli_error($conn);
	}

	header('Location: ../views/gallery.php');
// } else {
	// echo "Upload failed";
// }

?>