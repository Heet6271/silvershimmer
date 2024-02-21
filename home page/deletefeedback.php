<?php
include 'connecthome1.php';
include './functions/common_function.php';
if(isset($_GET['deletefeedbackid'])){
    $id=$_GET['deletefeedbackid'];

    $sql="delete from `feedback` where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:adminfeedback.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>