<?php
session_start();
$phone = $_SESSION['phone'];
$status = $_SESSION['status'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Shimmer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for the three-dot icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            padding-top: 56px; /* Adjust based on the height of your navbar */
            background-color: #f8f9fa; /* Background color */
        }

        .navbar {
            background-color: #ffffff; /* Navbar background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Navbar shadow */
        }

        .navbar-brand {
            font-size: 1.5rem; /* Adjust brand font size */
            color: #007bff; /* Brand color */
        }

        .navbar-toggler-icon {
            color: #007bff; /* Three-dot icon color */
        }

        .navbar-nav .nav-item .nav-link {
            color: #495057; /* Navbar link color */
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff; /* Navbar link hover color */
        }

        .dropdown-menu {
            background-color: #ffffff; /* Dropdown menu background color */
        }

        .dropdown-item {
            color: #495057; /* Dropdown item color */
        }

        .dropdown-item:hover {
            background-color: #007bff; /* Dropdown item hover background color */
            color: #ffffff; /* Dropdown item hover color */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Silver Shimmer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./home.php">Home</a>
                </li>
                <?php if ($status == '0') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php" >Give Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./userfeedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup> <?php cart_item_number();?> </sup></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Total: <?php total_cart_item();?>/-</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Billing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./marchantbill.php" >Marchant Billing</a>
                            <a class="dropdown-item" href="./labourbill.php" >Labour Billing</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="display_all.php">Product</a>
                            <a class="dropdown-item" href="https://www.moneycontrol.com/commodity/silver-price.html">MCX Price</a>
                            <a class="dropdown-item" href="./predication.php">Predication</a>
                            <a class="dropdown-item" href="../index.php" style="color:red;">Logout</a>
                        </div>
                    </li>
                <?php } ?>
                <?php if ($status == '1') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./adminfeedback.php">Feedback</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.moneycontrol.com/commodity/silver-price.html">MCX Price</a>
                            <a class="dropdown-item" href="./admin_area/insertproduct.php">Add Product</a>
                            <a class="dropdown-item" href="home.php?insert_category">Insert Categoires</a>
                            <a class="dropdown-item" href="home.php?insert_brand">Insert Brand</a>
                            <a class="dropdown-item" href="#">List users</a>
                            <a class="dropdown-item" href="./admin_area/adduser.php">Add User</a>
                            <a class="dropdown-item" href="../index.php" style="color:red;">Logout</a>
                        </div>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" style="color:darkblue;"><?php echo $phone; ?></a>
                </li>
                <form class="form-inline my-2 my-lg-0" action="search_product.php" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
                    <input type="submit" value="Search" class="btn btn-outline-success my-2 my-sm-0" name="search_data_product">
                </form>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('./admin_area/insertcategoires.php');
        }
        if(isset($_GET['insert_brand'])){
            include('./admin_area/insertbarand.php');
        }
        if(isset($_GET['view_products'])){
            include('./admin_area/view_products.php');
        }
        ?>
    </div>

    <!-- Content goes here -->

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
