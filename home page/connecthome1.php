<?php
// database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$dbname = "jwell";

// connect to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
//     echo "Connection established: ";
// }
