<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_POST['submit'])){
    $mname=$_POST['mname'];
    $iname=$_POST['iname'];
    $gross=$_POST['gross'];
    $bag=$_POST['bag'];
    $bagweight=$_POST['bagweight'];
    $touch=$_POST['touch'];
    $west=$_POST['west'];
    $pair=$_POST['pair'];
    $price=$_POST['price'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];
    // Total Bag Weight
    $toalbag= $bag * $bagweight;
    // Net Bag
    $netweight= $gross - $toalbag;
    // Fine
    $temfine= $touch + $west;
    $fine = $netweight * $temfine;
    // Labour Price
    $totalprice= $pair * $price;

    

    $sql = "INSERT INTO `givetomarchant` (mname, iname, gross, bag, bagweight, toalbag, netweight, touch, west, fine, pair, price, totalprice, mobileno, address, date) values 
    ('$mname', '$iname', '$gross', '$bag', '$bagweight', '$toalbag', '$netweight', '$touch', '$west', '$fine', '$pair', '$price', '$totalprice', 
    '$mobileno', '$address', NOW())";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data Inserted Successfully";
        header('location:marchantbill.php');
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

    <!--Bootstrap CSS Link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Silver Shimmer</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label>Marchant  Name</label>
    <input type="text" class="form-control" placeholder="Enter Selected Marchant Name" name="mname" autocomplete="off">
</div>

<div class="form-group">
    <label>Item Name</label>
    <input type="text" class="form-control" placeholder="Enter Submited Item Name" name="iname" autocomplete="off">
</div>

<div class="form-group">
    <label>Gross</label>
    <input type="text" class="form-control" placeholder="Enter Total Gross(Weight)" name="gross" autocomplete="off">
</div>

<div class="form-group">
    <label>Bag</label>
    <input type="text" class="form-control" placeholder="Enter Total Number Of Bag" name="bag" autocomplete="off">
</div>

<div class="form-group">
    <label>Per Bag Weight</label>
    <input type="text" class="form-control" placeholder="Enter 1 Bag Weight" name="bagweight" autocomplete="off">
</div>

<div class="form-group">
    <label>Touch</label>
    <input type="text" class="form-control" placeholder="Enter Touch" name="touch" autocomplete="off">
</div>

<div class="form-group">
    <label>West</label>
    <input type="text" class="form-control" placeholder="Enter total west" name="west" autocomplete="off">
</div>

<div class="form-group">
    <label>Labour Rate</label>
</div>

<div class="form-group">
    <label>Pair/Total Weight</label>
    <input type="text" class="form-control" placeholder="Enter total number of pair/total weight" name="pair" autocomplete="off">
</div>

<div class="form-group">
    <label>Enter Labour Price</label>
    <input type="text" class="form-control" placeholder="Enter labour price" name="price" autocomplete="off">
</div>

<div class="form-group">
    <label>Mobile No</label>
    <input type="text" class="form-control" placeholder="Enter Number" name="mobileno" autocomplete="off">
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