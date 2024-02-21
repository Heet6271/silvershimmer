<?php
include 'connecthome1.php';
include './functions/common_function.php';
$id=$_GET['updateproductid'];
$sql="select * from `jewelry_products` where id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$price=$row['price'];
$description=$row['description'];
$imgurl=$row['imgurl'];
if(isset($_POST['update'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$imgurl = mysqli_real_escape_string($conn, $_POST['imgurl']);

    $sql="update `jewelry_products` set id=$id, name='$name', price='$price', description='$description', imgurl='$imgurl' where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Data insert Successfully";
        header('location:UndD.php');
    }
    else{
        die(mysqli_error($conn));
    }
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
	<h1>Update Product</h1>
	<form method="post">
		<label for="name">Product Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="price">Price:</label>
		<input type="number" id="price" name="price" required>
		<label for="description">Description:</label>
		<textarea id="description" name="description" required></textarea>
		<label for="imgurl">Image URL:</label>
		<input type="text" id="imgurl" name="imgurl" required>
		<button type="update">Update Product</button>
	</form>
</body>
</html>
