<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "jewellery shop";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM ict";
$result = $conn->query($sql);
 
// Attempt delete query execution
$sql = "DELETE FROM ict WHERE Id = '".$_GET['un']."'";
if($conn->query($sql) === TRUE){
    header('location:Display.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

// Close connection
//mysqli_close($link);
?>