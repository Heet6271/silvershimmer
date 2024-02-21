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
    <title>Add wroker</title>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
        

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Operations</th>
                </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select * from `feedback`";
    $result=mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $mobile=$row['mobile'];
            $email=$row['email'];
            $comments=$row['comments'];
            echo' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$mobile.'</td>
            <td>'.$email.'</td>
            <td>'.$comments.'</td>
            <td>
                <button class="btn btn-danger"><a href="deletefeedback.php?deletefeedbackid='.$id.'" class="text-light">Delete</a></button>
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