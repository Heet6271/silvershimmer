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

    
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="Search Id" name="search" autocomplete="off">
            <button class="btn btn-secondary" name="submit">Search</button>
            <a class="btn btn-secondary" href="marchantbill.php" role="button">Back</a>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql="select * from `givetomarchant` where id like '%$search%' or mname like '%$search%'";
                    $result=mysqli_query($conn,  $sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Marchant Name</th>
                                    <th>Item Name</th>
                                    <th>Gross</th>
                                    <th>Bag</th>
                                    <th>Bag Weight</th>
                                    <th>Total Bag Weight</th>
                                    <th>Net Weight</th>
                                    <th>Touch</th>
                                    <th>West</th>
                                    <th>Fine</th>
                                    <th>Pair</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                <tr>
                            <thead>';

                            while($row=mysqli_fetch_assoc($result)){
                            echo '
                            <tbody>
                                <tr>
                                <td>'.$row['id'].'</td>
                                <td><a href="searchdatamarchant.php?data='.$row['id'].'">'.$row['mname'].'</td>
                                <td>'.$row['iname'].'</td>
                                <td>'.$row['gross'].'</td>
                                <td>'.$row['bag'].'</td>
                                <td>'.$row['bagweight'].'</td>
                                <td>'.$row['toalbag'].'</td>
                                <td>'.$row['netweight'].'</td>
                                <td>'.$row['touch'].'</td>
                                <td>'.$row['west'].'</td>
                                <td>'.$row['fine'].'</td>
                                <td>'.$row['pair'].'</td>
                                <td>'.$row['price'].'</td>
                                <td>'.$row['totalprice'].'</td>
                                <td>'.$row['date'].'</td>
                                <td><a href="printmarchantorder.php?data='.$row['id'].'">Print</td>
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