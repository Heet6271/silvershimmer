<?php
include 'connecthome1.php';
include './functions/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>Give Work</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Give Work</a></button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sl no/th>
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
                <button class="btn btn-primary"><a href="updateworker.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="deleteworker.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                <button class="btn btn-success"><a href="giveorder.php?giveid='.$id.'" class="text-light">Give Order</a></button>
                <button class="btn btn-warning"><a href="showorder.php?showid='.$id.'" class="text-light">Show Order</a></button>
            </td>
        </tr>';
        }
    }
    ?>
    
    </tbody>
</table>
    </div>
</body>
</html>