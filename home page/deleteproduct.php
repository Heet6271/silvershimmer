<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_GET['deleteproductid'])){
    $id=$_GET['deleteproductid'];

    $sql="delete from `jewelry_products` where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:UndD.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>