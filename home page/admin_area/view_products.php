<?php
include '../connecthome1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap CSS Link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .product_img{
        width:100px;
        object-fit:contain;
    }
</style>
</head>
<body>
<?php include '../navbar.php' ?>
    <h1 class="text-center text-success">All Product</h1>
    <table class="table table-bordered mt-5">
        <thead class="bg-secondary">
            <th>Product Id</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
                <?php
                $get_products="select * from `product`";
                $result_product=mysqli_query($conn, $get_products);
                $number=0;
                while($row=mysqli_fetch_assoc($result_product)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_image=$row['product_image1'];
                    $product_price=$row['product_price'];
                    $status=$row['status'];
                    $number++;
                    ?>
                    <tr class='text-center'>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $product_title; ?></td>
                    <td><img src='./product_image/<?php echo $product_image; ?>' class='product_img'></td>
                    <td><?php echo $product_price; ?>/-</td>
                    <td><?php echo $status; ?></td>
                    <td><a href='view_products.php?edit_product=<?php echo $product_id?>' class='text-success'><i class='fa-solid fa-pen-to-square'></i></a></td>
                    <td><a href='' class='text-success'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
                <?php
                }
                ?>
                
        </tbody>
    </table>
    <?php
        if(isset($_GET['edit_product'])){
            include('edit_product.php');
        }
?>
    <!--Footer-->
<div class="bg-info p-3 text-center">
        <P>All right reserved ©- Designed by Heet & Krish-2023-24</p>
</div>


</body>
</html>