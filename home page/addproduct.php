<?php
require './connecthome1.php';

if(isset($_POST['price']))
{
    
// Get form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$imgurl = mysqli_real_escape_string($conn, $_POST['imgurl']);

// Insert data into database
$sql = "INSERT INTO jewelry_products (name, price, description, imgurl) VALUES ('$name', '$price', '$description', '$imgurl')";

if (mysqli_query($conn, $sql)) {
	echo "Product added successfully.";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
<style>
    h1 {
	text-align: center;
	margin-top: 50px;
}

form {
	width: 50%;
	margin: 0 auto;
}

label, input, textarea {
	display: block;
	margin-bottom: 10px;
}

label {
	font-weight: bold;
}

input, textarea {
	padding: 5px;
	width: 100%;
	box-sizing: border-box;
}

button {
	padding: 10px;
	background-color: #008CBA;
	color: white;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

button:hover {
	background-color: #004C6D;
}

</style>
<!DOCTYPE html>
<html>
<head>
	<title>Product Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'navbar.php' ?>
	<h1>Add Product</h1>
	<form action="./addproduct.php" method="post">
		<label for="name">Product Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="price">Price:</label>
		<input type="number" id="price" name="price" required>
		<label for="description">Description:</label>
		<textarea id="description" name="description" required></textarea>
		<label for="imgurl">Image URL:</label>
		<input type="text" id="imgurl" name="imgurl" required>
		<button type="submit">Add Product</button>
	</form>
</body>
</html>
