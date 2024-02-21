
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "jewellery shop";
    // Create connection
    $link = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$link) {
       die("Connection failed: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM ict";
$result = $link->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $Name=$_POST['Name'];
  $phone =$_POST['phone']; 
  $Email =$_POST['Email'];
  $city=$_POST['city'];
  if($name!=null)
  {
    $sql = "INSERT INTO ict (Name,phone ,	Email,	city)
            VALUES ( '$Name','$phone' ,'$Email','$city')";
  }
  else
  {
    echo "Invalid input";
  }

  if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }

}

//$conn->close();
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <form method="post">
  <input type="text" name="Name" placeholder="Name"><br>
  <input type="text" name="phone" placeholder="phone"><br>
  <input type="text" name="Email" placeholder="Email"><br>
  <input type="text" name="city" placeholder="city"><br>
  <button>Sign Up</button>
  </form>
    
</body>
</html>