<?php
include 'connecthome1.php';
include'functions/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>Add wroker</title>
    <!--Bootstrap CSS Link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <div class="btn-group my-5">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Give Order
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="giveorder.php">Normal Work</a>
        <a class="dropdown-item" href="pressgiveorder.php">Press Work</a>
        </div>
</div>
<button class="btn btn-primary my-5"><a href="showorder.php" class="text-light">Show Order</a></button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Working Area</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operations</th>
                </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select * from `worker`";
    $result=mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $workingarea=$row['workingarea'];
            $mobileno=$row['mobile'];
            $address=$row['address'];
            echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$workingarea.'</td>
            <td>'.$mobileno.'</td>
            <td>'.$address.'</td>
            <td>
                <button class="btn btn-secondary"><a href="updateworker.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-secondary"><a href="deleteworker.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                
                
                
            </td>
        </tr>';
        }
    }
    ?>
    
    </tbody>
</table>
    </div>
    <!--Footer-->
<div class="bg-info p-3 text-center">
        <P>All right reserved ©- Designed by Heet & Krish-2023-24</p>
</div>
</body>
</html>