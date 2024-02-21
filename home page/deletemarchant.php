<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_GET['deletemarchant'])){
    $id=$_GET['deletemarchant'];

    $sql="delete from `marchant` where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:marchantbill.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>