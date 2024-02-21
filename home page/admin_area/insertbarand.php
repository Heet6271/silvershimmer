<?php
include './connecthome1.php';
if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brand_title'];
    $ssql="select * from `brands` where brand_title='$brand_title'";
    $result_select=mysqli_query($conn, $ssql);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo"<script>alert('This brand is present inside the databse')</script>";
    }else{
        $sql="insert into `brands` (brand_title) values ('$brand_title')";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo"<script>alert('Brand has been inserted succesfully')</script>";
        }
    }
}


?>

<h2 class="text-center">Insert Brand</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-secondary text-light p-2 my-3 border-0" name="insert_brand" value="Insert Brand">

</div>
</form>