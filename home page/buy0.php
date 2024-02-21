<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     </title>
</head>
<body>
<?php 
      echo $_SESSION['name'];
      echo "<img src='./image/2.jfif'>";
      echo"<h1> product detail<h1>";
      echo"<h2> price=100000<h2>";
      echo"<h3> product=Gold<h3>";
            ?>
            <form method="post" action="../payment/pay2.php"><button name='buy1' type="submit">100000</button></form>
       <img src=<?php $_SESSION['p1img']; ?>>
            
</body>
</html>
<?php 

session_destroy();

?>