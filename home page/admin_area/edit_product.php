<?php
if(isset($_GET['edit_product'])){
    $edit_id=$_GET['edit_product'];
    $get_data="select * from `product` where product_id =$edit_id";
    $results_edit=mysqli_query($conn, $get_data);
    $row=mysqli_fetch_assoc($results_edit);
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    $product_price=$row['product_price'];
    $product_price=$row['product_price'];


    //For categorys
    $select_category="select * from `categories` where category_id=$category_id";
    $results_category=mysqli_query($conn, $select_category);
    $row_category=mysqli_fetch_assoc($results_category);
    $category_title=$row_category['category_title'];
    //For brands
    $select_brand="select * from `brands` where brand_id=$brand_id";
    $results_brand=mysqli_query($conn, $select_brand);
    $row_brand=mysqli_fetch_assoc($results_brand);
    $brand_title=$row_brand['brand_title'];
}



?>
<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" value="<?php echo $product_title?>" class="form-control" required="required">
        </div>
        <div class="form-outline">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" name="product_description" id="product_description" value="<?php echo $product_description?>" class="form-control" required="required">
        </div>
        <div class="form-outline">
            <label for="product_keyword" class="form-label">Product Keyword</label>
            <input type="text" name="product_keyword" id="product_keyword" value="<?php echo $product_keywords?>" class="form-control" required="required">
        </div>
        <div class="form-group mb-4 ">
            <label>Product Category</label>
                <select name="product_category" class="form-control">
                    <option value="<?php echo $category_title?>"><?php echo $category_title?></option>
                    <?php
                    $select_category_all="select * from `categories`";
                    $results_category_all=mysqli_query($conn, $select_category_all);
                    while($row_category_all=mysqli_fetch_assoc($results_category_all)){
                        $category_title=$row_category_all['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
        </div>
        <div class="form-group mb-4 ">
            <label>Product Brand</label>
                <select name="product_brand" class="form-control">
                    <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
                    <?php
                    $select_brand_all="select * from `brands`";
                    $results_brand_all=mysqli_query($conn, $select_brand_all);
                    while($row_brand_all=mysqli_fetch_assoc($results_brand_all)){
                        $brand_title=$row_brand_all['brand_title'];
                        $brand_id=$row_brand_all['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                </select>
        </div>
        <div class="form-group mb-4 ">
                <label>Product 1st Image</label>
                <div class="d-flex">
                <input type="file" class="form-control-file w-90 m-auto" name="product_image1" id="product_image1">
                <img src="./product_image/<?php echo $product_image1?>" class="product_img">                    
                </div>
        </div>
        <div class="form-group mb-4 ">
                <label>Product 2nd Image</label>
                <div class="d-flex">
                <input type="file" class="form-control-file w-90 m-auto" name="product_image2" id="product_image2">
                <img src="./product_image/<?php echo $product_image2?>" class="product_img">                    
                </div>
        </div>
        <div class="form-group mb-4 ">
                <label>Product 3rd Image</label>
                <div class="d-flex">
                <input type="file" class="form-control-file w-90 m-auto" name="product_image3" id="product_image3">
                <img src="./product_image/<?php echo $product_image3?>" class="product_img">                    
                </div>
        </div>
        <div class="form-outline">
            <label for="product_price" class="form-label">Product price</label>
            <input type="text" name="product_price" id="product_price" value="<?php echo $product_price?>" class="form-control" required="required">
        </div>        
        <div class="text-center">
            <input type="submit" name="edit_product" value="Edit Product" class="btn btn-secondary px-3 mb-3">
        </div>
    </form>
</div>


<!-- Editng PHP -->
<?php
if(isset($_POST['add_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //access temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking
    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brand=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' or $product_price==''){
        echo "<scrpit>alert('Please fill all the availble fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_image/$product_image1");
        move_uploaded_file($temp_image2,"./product_image/$product_image2");
        move_uploaded_file($temp_image3,"./product_image/$product_image3");

        // Update Query
        $upate_product="update `product` set product_title='$product_title', product_description='$product_description', product_keywords='$product_keywords',
        category_id='$product_category', brand_id='$product_brand', product_image1='$product_image1', product_image2='$product_image2',
        product_image3='$product_image3', product_price='$product_price', date=NOW() where product_id=$edit_id";
        $result_update_product=mysqli_query($conn, $result_update_product);
        if($result_update_product){
            echo "<scrpit>alert('Product updated successfully')</script>";
            echo "<scrpit>window.open('./home.php', '_self')</script>";
        }
    }
}



?>