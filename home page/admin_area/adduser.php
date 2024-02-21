<?php 
include '../connecthome1.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $status = $_POST['status'];
  
  //Prepare the SQL statement to insert data into the 'user' table
  $sql = "INSERT INTO `user` (username, password, status) values ('$phone', '$password', '$status')";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data Inserted Successfully";
        header('location:../home.php');
    }else{
        die(mysqli_error($conn));
    }

  //Close the database connection
  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #17a2b8;
            border-radius: 5px;
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
        }

        button[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form method="POST" action="" class="needs-validation" novalidate>
        <h1 class="text-center">User Registration</h1>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" pattern="[0-9]{10}" id="phone" name="phone" class="form-control"
                placeholder="Enter phone number" required>
            <div class="invalid-feedback">
                Please enter a valid 10-digit phone number.
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password"
                required>
            <div class="invalid-feedback">
                Please enter your password.
            </div>
        </div>

        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword" class="form-control"
                placeholder="Confirm password" required>
            <div class="invalid-feedback">
                Passwords do not match.
            </div>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" class="form-control"
                placeholder="Enter User Status" required>
            <div class="invalid-feedback">
                Please Enter Valid Status.
            </div>
        </div>

        <button type="submit" class="btn btn-success">Sign Up</button>
    </form>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            const pass = document.getElementById('password');
            const cpass = document.getElementById('cpassword');
            if (pass.value !== cpass.value) {
                event.preventDefault();
                cpass.setCustomValidity('Passwords do not match');
            } else {
                cpass.setCustomValidity('');
            }
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    </script>
</body>

</html>
