<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_POST['submit'])){
    $mname=$_POST['mname'];
    $gstno=$_POST['gstno'];
    $cname=$_POST['cname'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];

    $sql="insert into `marchant`(mname, gstno, cname, mobileno, address) values('$mname', '$gstno', '$cname', '$mobileno', '$address')";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Data insert Successfully";
        header('location:marchantbill.php');
    }
    else{
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

    <title>Add Marchant</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
    <form method="post">
<div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="mname" autocomplete="off">
</div>

<div class="form-group">
    <label>GST No.</label>
    <input type="text" class="form-control" placeholder="Enter GST No." name="gstno" autocomplete="off">
</div>

<div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="cname" autocomplete="off">
</div>

<div class="form-group">
    <label>Mobile No</label>
    <input type="text" class="form-control" placeholder="Enter Mobile no." name="mobileno" autocomplete="off">
</div>

<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off">
</div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>