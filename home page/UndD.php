<?php
include 'connecthome1.php';
include './functions/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>Add wroker</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="addproduct.php" class="text-light">Add User</a></button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sl no/th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
					<th scope="col">Description</th>
                    <th scope="col">Image Url</th>
                    <th scope="col">Operations</th>
                </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select * from `jewelry_products`";
    $result=mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $price=$row['price'];
            $description=$row['description'];
            $imgurl=$row['imgurl'];
            echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$price.'</td>
            <td>'.$description.'</td>
            <td>'.$imgurl.'</td>
            <td>
                <button class="btn btn-primary"><a href="updateproduct.php?updateproductid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="deleteproduct.php?deleteproductid='.$id.'" class="text-light">Delete</a></button>
            </td>
        </tr>';
        }
    }
    ?>
    
    </tbody>
</table>
    </div>
</body>
</html>