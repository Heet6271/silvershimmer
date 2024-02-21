<?php 
include './home page/connecthome1.php';
session_start(); //Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  
  //Prepare the SQL statement to check if user exists with the given phone and password
  $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $phone, $password);
  
  //Execute the SQL statement
  $stmt->execute();
  
  //Fetch the result
  $result = $stmt->get_result();
  
  //Check if user exists
  if ($result->num_rows === 1) {
    //User exists, set session variables and redirect to home page
    $row = $result->fetch_assoc();
    $_SESSION['phone'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['status'] = $row['status'];
    header("Location: ./home page/home.php"); //Replace home.php with your home page URL
    exit();
  } else {
    //User does not exist or incorrect credentials
    echo "<script>alert('Invalid phone number or password')</script>";
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
    <title>Login</title>
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
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form method="POST" action="" class="needs-validation" novalidate>
        <h1 class="text-center">User Login</h1>
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

        <button type="submit" class="btn btn-primary">Login</button>
        <a href="./registration.php" class="btn btn-link">Sign Up</a>
    </form>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    </script>
</body>

</html>
