<?php
include 'connecthome1.php';
include './functions/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Bootstrap CSS Link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Show Order</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="Search Id" name="search" autocomplete="off">
            <button class="btn btn-secondary" name="submit">Search</button>
            <a class="btn btn-secondary" href="order.php" role="button">Back</a>
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
                                    <th>Pair</th>
                                    <th>Price of weight</th>
                                    <th>Price of pair</th>
                                    <th>Mobile No</th>
                                    <th>Option</th>
                                <tr>
                            <thead>';

                            while($row=mysqli_fetch_assoc($result)){
                            echo '
                            <tbody>
                                <tr>
                                <td><a href="updateworkerorder.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                                <td><a href="searchdata.php?data='.$row['id'].'">'.$row['name'].'</td>
                                <td>'.$row['workingtype'].'</td>
                                <td>'.$row['weight'].'</td> 
                                <td>'.$row['pair'].'</td>
                                <td>'.$row['priceofweight'].'</td>
                                <td>'.$row['priceofpair'].'</td>
                                <td>'.$row['mobileno'].'</td>
                                <td><a href="printorder.php?data='.$row['id'].'">Print</td>
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