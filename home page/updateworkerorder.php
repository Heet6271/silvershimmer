<?php
include 'connecthome1.php';
include './functions/common_function.php';
$data=$_GET['data'];
$sql="select * from `givingoder` where id=$data";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$weight=$row['weight'];
$pair=$row['pair'];
if(isset($_POST['submit'])){
    $weight=$_POST['weight'];
    $pair=$_POST['pair'];

    $sql="update `givingoder` set id=$data, weight='$weight', pair='$pair'  where id=$data";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Data insert Successfully";
        header('location:labourbill.php');
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

    
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
    <form method="post">
<div class="form-group">
    <label>Upadated Weight</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="weight" autocomplete="off" value=<?php echo $weight;?>>
</div>

<div class="form-group">
    <label>Enter Pair</label>
    <input type="text" class="form-control" placeholder="Enter Pair" name="pair" autocomplete="off" value=<?php echo $pair;?>>
</div>



    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</body>
</html>