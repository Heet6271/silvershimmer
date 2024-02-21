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

    <!--font awesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
<?php include 'navbar.php' ?>
    <?php
    $data=$_GET['data'];
    
    $sql="select * from `givetomarchant` where id=$data";
    $result=mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        echo '<div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center text-info">'.$row['id'].'</h1>
            <p class="lead text-center text-danger">Your Selected Id Name Is:- '.$row['name'].'</p>
            <hr class="my-4">
            <a class="btn btn-dark btn-lg" href="showmarchant.php" role="button">Back</a>
        </div>
    </div>';
    }
    ?>
    <div class="container my-5">
            <table class="table">
    <?php
    $sqll="select * from `givetomarchant` where id like '%$data%' or name like '%$data%' or workingtype like '%$data%'";
    $result=mysqli_query($conn,  $sqll);
    if($result){
        if(mysqli_num_rows($result)>0){
            echo'
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Work Giving</th>
                    <th>Weight</th>
                    <th>Pair</th>
                    <th>Price of weight</th>
                    <th>Price of pair</th>
                    <th>Total of weight</th>
                    <th>Total of pair</th>
                <tr>
            <thead>';

            while($row=mysqli_fetch_assoc($result)){
            echo '
            <tbody>
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['workingtype'].'</td>
                <td>'.$row['weight'].'</td>
                <td>'.$row['pair'].'</td>
                <td>'.$row['priceofweight'].'</td>
                <td>'.$row['priceofpair'].'</td>
                <td>'.$row['totalofweight'].'</td>
                <td>'.$row['totalofpair'].'</td>
                </tr>
            </tbody>';
        }
        }else{
            echo '<h2 class=text-danger>Data Not Found</h2>';
        }
    }
    ?>
    </table>
</div>
</body>
</html>