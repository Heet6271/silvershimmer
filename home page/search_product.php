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
    <!--Second Part-->
    <div class="row px-3">
    <div class="col-md-10">
    <div class="row">
        <?php
        search_product() ;
        get_unique_categories();
        get_unique_brands();
        add_cart();
        ?>
        </div>  
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <!--Barnda-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
            </li>
        <?php
        showbrand();
        ?>
        </ul>
        <!--Catagories-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
        <?php
        showcategory();
        ?>
        </ul>
    </div>
    </div>

    <!--Footer-->
    <div class="bg-info p-3 text-center">
        <P>All right reserved ©- Designed by Heet & Krish-2023-24</p>
    </div>
<!--Bootstrap js Link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>