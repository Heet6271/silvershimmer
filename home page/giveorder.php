<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $workingtype=$_POST['workingtype'];
    $weight=$_POST['weight'];
    $pair=$_POST['pair'];
    $priceofweight=$_POST['priceofweight'];
    $priceofpair=$_POST['priceofpair'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];
    if ($weight && $priceofweight) {
        $ttl = $weight * $priceofweight;
    } else {
        $ttl = 0; // Set to 0 if any one of the weight or priceofweight is not available
    }

    if ($pair && $priceofpair) {
        $tt2 = $pair * $priceofpair;
    } else {
        $tt2 = 0; // Set to 0 if any one of the pair or priceofpair is not available
    }

    $sql="insert into `givingoder` (name, workingtype, weight, pair, priceofweight, priceofpair, mobileno, address, totalofweight, totalofpair, date) values ('$name', '$workingtype', '$weight', '$pair', '$priceofweight', '$priceofpair', '$mobileno', '$address', '$ttl', '$tt2', NOW())";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data Inserted Successfully";
        header('location:order.php');
    }else{
        die(mysqli_error($conn));
    }

}



?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container my-5">
    <form method="post">


<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Selected Name" name="name" autocomplete="off">
</div>

<div class="form-group">
    <label>Work</label>
    <input type="text" class="form-control" placeholder="Enter Selected Working Type" name="workingtype" autocomplete="off">
</div>

<div class="form-group">
    <label>Weight</label>
    <input type="text" class="form-control" placeholder="Enter Giving Weight" name="weight" autocomplete="off">
</div>

<div class="form-group">
    <label>Pair</label>
    <input type="text" class="form-control" placeholder="Enter Giving Pair" name="pair" autocomplete="off">
</div>

<div class="form-group">
    <label>Price Of Weight</label>
    <input type="text" class="form-control" placeholder="Enter The Price What Amount You Pay For It /KG" name="priceofweight" autocomplete="off">
</div>

<div class="form-group">
    <label>Price Of Pair</label>
    <input type="text" class="form-control" placeholder="Enter The Price What Amount You Pay For Pair" name="priceofpair" autocomplete="off">
</div>

<div class="form-group">
    <label>Mobile No.</label>
    <input type="text" class="form-control" placeholder="Enter Selected Person Number" name="mobileno" autocomplete="off">
</div>

<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter Giving Order Address" name="address" autocomplete="off">
</div>

<button type="submit" class="btn btn-primary" name="submit">Give Order</button>
</form>
    </div>

</body>
</html>