

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id=$_POST['id'];
  $name=$_POST['name']; 
  $dept=$_POST['dept'];
  $sem=$_POST['sem'];
  $city=$_POST['city'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $sql = "UPDATE student SET Id='".$id."',Name='".$name."',
  Department='".$dept."',
  Sem='".$sem."',
  City='".$city."',
  Phone='".$phone."',
  DateOfBirth='".$dob."'
  WHERE Id='".$_GET['id']."'";
  if ($link->query($sql) === TRUE) {
    header('location:Display.php');
  } else {
    echo "Error updating record: " . $link->error;
  }
}
/*value=<?php echo"UserId"?>*/


$link->close();
?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "jewellery shop";
  
  // Create connection 
  $link = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
  } 
  
  $sql1 = mysqli_query($link,"SELECT * FROM jewellery shop WHERE Id='".$_GET['id']."'");
  $row = $sql1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="id" placeholder="Id" value='<?php echo $row['Id']?>'><br>
    <input type="text" name="name" placeholder="Username" value='<?php echo $row['Name']?>'><br>
    <input type="text" name="dept" placeholder="Department" value='<?php echo $row['Department']?>'><br>
    <input type="text" name="sem" placeholder="Semester" value='<?php echo $row['Sem']?>'><br>
    <input type="text" name="city" placeholder="City" value='<?php echo $row['City']?>'><br>
    <input type="text" name="phone" placeholder="Contact" value='<?php echo $row['Phone']?>'><br>
    <input type="date" name="dob" placeholder="Date Of Birth" value='<?php echo $row['DateOfBirht']?>'><br>
    <button>Update</button>
    </form>
</body>
</html>
<?php




