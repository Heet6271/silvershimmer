<?php
include 'connecthome1.php';
include './functions/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

    <title>Show Order</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="Search Id" name="search" autocomplete="off">
            <button class="btn btn-warning btn-sm" name="submit">Search</button>
            <a class="btn btn-success btn-sm" href="order.php" role="button">Back</a>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql="select * from `givingoder` where id like '%$search%' or name like '%$search%' or workingtype like '%$search%'";
                    $result=mysqli_query($conn,  $sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Work Giving</th>
                                    <th>Weight</th>
                                    <th>Price</th>
                                    <th>Submited Weight</th>
                                    <th>Calculate</th>
                                <tr>
                            <thead>';

                            while($row=mysqli_fetch_assoc($result)){
                            echo '
                            <tbody>
                                <tr>
                                <td>'.$row['id'].'</a></td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['workingtype'].'</td>
                                <td>'.$row['weight'].'</td>
                                <td>'.$row['price'].'</td>
                                <td><input type="text" class="form-control text-center" name="qty"></td>
                                <button class="btn btn-secondary"><a href="updateworker.php?updateid='.$id.'" class="text-light">Update</a></button>
                                </tr>
                            </tbody>';
                        }
                        }else{
                            echo '<h2 class=text-danger>Data Not Found</h2>';
                        }
                    }
                }


                ?>
            </table>
        </div>
    </div>    
</body>
</html>