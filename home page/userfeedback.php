<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $comments=$_POST['comments'];

    $sql="insert into `feedback`(name, mobile, email, comments) values('$name', '$mobile', '$email', '$comments')";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Data insert Successfully";
        header('location:userfeedback.php');
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

    <title>Add Worker</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
    <form method="post">
<div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
</div>

<div class="form-group">
    <label>Mobile No.</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile No." name="mobile" autocomplete="off">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
</div>

<div class="form-group">
    <label>Feedback</label>
    <input type="text" class="form-control" placeholder="Enter Your Feedback" name="comments" autocomplete="off">
</div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>