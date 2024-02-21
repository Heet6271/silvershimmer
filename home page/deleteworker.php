<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `worker` where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:order.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>