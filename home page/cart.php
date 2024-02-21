<?php
include './connecthome1.php';
include 'functions/common_function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Shimmer</title>
<!--Bootstrap CSS Link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Internal Css-->
<style>
    .card-img-top{
    width:100px;
    height:200px;
    object-fit:contain;
    }

    .cart_img{
        width:80px;
        height:80px;
        object-fit:contain;
    }

    
</style>
</head>
<body>
<?php include 'navbar.php' ?>

<!--Spacing-->
<div class="bg-light my-5">
<p class="text-center">
    Communication is at the heart of e-commerce and community
</p>
</div>

<!--Second Child-->

<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
            </thead>
            <tbody>
                <!--php code-->
                <?php
                $get_ip_address = getIPAddress();
                $total=0;
                $cart_query="select * from `cart_details` where ip_address='$get_ip_address'";
                $result=mysqli_query($conn, $cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                    echo"<thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th collapse='2'>Operations</th>
                    </tr>";
                while($row=mysqli_fetch_array($result)){
                    $product_id=$row['product_id'];
                    $select_products="select * from `product` where product_id='$product_id'";
                    $result_products=mysqli_query($conn, $select_products);
                    while($row_product_price=mysqli_fetch_array($result_products)){
                        $product_price=array($row_product_price['product_price']);
                        $price_table=$row_product_price['product_price'];
                        $product_title=$row_product_price['product_title'];
                        $product_image1=$row_product_price['product_image1'];
                        $product_values=array_sum($product_price);
                        $total+=$product_values;

                ?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="./admin_area/product_image/<?php echo $product_image1?>" alt="Gold Ring" class="cart_img"></td>
                    <td><input type="text" class="form-control text-center" name="qty"></td>
                    <?php
                    $get_ip_address = getIPAddress();
                    if(isset($_POST['update_cart'])){
                        $quantites=$_POST['qty'];
                        $update_cart="update `cart_details` set quantity=$quantites where ip_address='$get_ip_address'";
                        $result_cart=mysqli_query($conn, $update_cart);
                        $total=$total*$quantites;
                    }
                    ?>
                    <td><?php echo $price_table?></td>
                    <td><input type="checkbox" name=" remove_item[]" value="<?php echo $product_id?>"></td>
                    <td>
                        <!--<button class="btn btn-outline-secondary px-3 py-2 border-0 mx-3">Update</button>
                    -->
                        <input type="submit" value="Update Cart" class="btn btn-outline-secondary px-3 py-2 border-0 mx-3" name="update_cart">
                        <!--<button class="btn btn-outline-secondary px-3 py-2 border-0 mx-3">Remove</button>-->
                        <input type="submit" value="Remove Cart" class="btn btn-outline-secondary px-3 py-2 border-0 mx-3" name="remove_cart">
                    </td>
                </tr>
                <?php
                }
            }    
        }
        else{
            echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
        }
            ?>
            </tbody>
        </table>
        <!--Subtotal-->
        <div class="d-flex mb-5">
            <?php
            $get_ip_address = getIPAddress();
             $cart_query="select * from `cart_details` where ip_address='$get_ip_address'";
            $result=mysqli_query($conn, $cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
                echo "<h4 class='px-3'>SubTotal: <strong class='text-secondary'> $total/-</strong></h4>
                <input type='submit' value='Continue Shopping' class='btn btn-outline-secondary px-3 py-2 border-0 mx-3' name='continue_shopping'>";
            }else{
                echo"<input type='submit' value='Continue Shopping' class='btn btn-outline-secondary px-3 py-2 border-0 mx-3' name='continue_shopping'>
                <input type='submit' value='Checkout' class='btn btn-outline-success px-3 py-2 border-0 mx-3' name='checkout'>";
            }
            if(isset($_POST['continue_shopping'])){
                echo"<script>window.open('home.php', '_self')</script>";
            }
            
            ?>
        </div>
    </div>
</div>
</form>

<?php

        echo $remove_item=remove_cart();

?>

<!--Footer-->
<div class="bg-info p-3 text-center">
        <P>All right reserved ©- Designed by Heet & Krish-2023-24</p>
</div>
<!--Bootstrap js Link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>