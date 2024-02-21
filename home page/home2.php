    <?php 
             session_start();
//                if(isset($_post['btn1']))         
//                {
// $_SESSION['productname'] = $_post['one'];
// header("location: buy.php");
//                }

if (isset($_POST['btn1'])) {
    $one =  $_POST['one'];
    $_SESSION['p1img'] = $p1img;
    $_SESSION['name'] = $one;
    header('location:buy0.php');
      
      }
      if (isset($_POST['btn2'])) {
        $two =  $_POST['two'];
        $_SESSION['p1img'] = $p1img;
        $_SESSION['name'] = $two;
        header('location:buy1.php');
          
          }
  
          if (isset($_POST['btn3'])) {
            $three =  $_POST['three'];
            $_SESSION['p1img'] = $p1img;
            $_SESSION['name'] = $three;
            header('location:buy2.php');
              
              }
          

    ?>

<!DOCTYPE html>
    
    <html>
    
    <head>

    <!-- <link rel="stylesheet" href="../css/home.css"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
     <style>
        nav {
  background-color: #333;
  font-size: 1.2em;
  height: 50px;
  display: flex;
  justify-content: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

li {
  margin: 0 10px;
}

a {
  color: white;
  text-decoration: none;
  padding: 15px 20px;
  display: block;
}

a:hover {
  background-color: white;
  color: #333;
}
.search-container {
  display: flex;
  justify-content: center;
  margin-top: 5px;
}
.second_image{
  margin-left:100px;
}
form {
  display: flex;
}

input[type="text"] {
  padding: auto;
  border: 2px solid black;
  font-size: 10px;
  font-size: 1.2em;
  height: 45px;
  display: flex;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 2px;
  cursor: pointer;
  margin-left: 5px;
}

button[type="submit"]:hover {
  background-color: #45a049;
}
ul li{
    width: 200px;
}
ul li a {
    text-decoration: none;
    color:white;
    display: block;

}
ul li a:hover{
    background-color: white;
}
ul li ul li{
    display: none;
}
ul li:hover ul li{
    display: block;
}
* {

 margin: 10;

 padding: 10;

 box-sizing: border-box;

}

body {

 font-family: Arial;

}

a {
  
  text-decoration: none;
  
}

li {

 list-style: none;

}
div{
  margin:left = 10px;

}

.main_div{
  width:100%;
  height:100%;
  border:1px solid;
  float:left;
}

.div_1 {
  /* width:25%; */
}
.div_2 {
  /* width:25%; */
}
.div_3 {
  width:25%;
}
.div_4 {
  /* width:25%; */
}

.img{
 width:100%
}

.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: white;
  color:black;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* create 3 columns of equal width */
  grid-gap: 20px; /* add some space between grid items */
}

.grid-item {
  text-align: center;
}

.grid-item img {
  width: 100%; /* make the image fill the grid item */
  height: 250px; /* keep the aspect ratio */
}

.product-info {
  margin: 10px 0; /* add some space between the product name/price and the image */
}

.product-info h3 {
  margin-bottom: 5px; /* add some space between the product name and price */
}

.grid-item button {
  background-color: #007bff; /* set the button color */
  color: #fff; /* set the text color */
  padding: 10px 20px; /* add some padding to the button */
  border: none; /* remove the border */
  border-radius: 5px; /* add some rounded corners */
  cursor: pointer; /* add a pointer cursor on hover */
}

</style>

    </head>
    

    <nav>    <body>

    <ul>
                <li>
    <div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
  <a href="link.php">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>
                </li>
                <li><a href="./buy0.php">jewallary</a>
            
            </li>
                 <li><a href="https://www.5paisa.com/commodity-trading/gold">MCX Live</a></li> 
                
                <li><a href="service.php">Contact us</a></li>

                <input type="text" placeholder="Search...">
                <i class="fa fa-search"></i>
            </ul>
    </nav>

    <div class='img'>
    <img style = "width:1400px"; src="image/20.jpg" >
  </div>


    <div class="container">
  <!-- <div class="row"> -->


    <!-- <div class="col-sm">
    <form method='POST'>
        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./image/2.jfif" name='p1img' style="width:110px; height:100px">
        <div class="text"><input type='text' name='one' value='Product 1' ></div>
        <button name='btn1' type="submit">payment</button>
        </div>
            </form>    </div>
    

    <div class="col-sm">
    <form method='POST'>
        
        <div class="mySlides fade">
        <div class="numbertext">4 / 3</div>
        <img src="./image/4.jfif" style="width:130px; height:100px">
        <div class="text"><input type='text' name='three' value='Product 3'></div>
        <button name='btn3' type="submit">payment</button>
        </div>    </div>  
    
    <div class="col-sm">
    <form method='POST'>

<div class="mySlides fade" href="ragistarpage.php">
<div class="numbertext">3 / 3</div>
<img src="./image/3.jfif" style="width:120px; height:100px">
<div class="text"><input type='text' name='two' value='Product 2' ></div>
<button name='btn2' type="submit">payment</button>

</div>

<div class="col-sm">
    <form method='POST'>

<div class="mySlides fade" href="ragistarpage.php">
<div class="numbertext">7 / 3</div>
<img src="./image/7.jpg" style="width:120px; height:100px">
<div class="text"><input type='text' name='two' value='Product 2' ></div>
<button name='btn2' type="submit">payment</button>

</div>


<div class="col-sm">
    <form method='POST'>

<div class="mySlides fade" href="ragistarpage.php">
<div class="numbertext">8 / 3</div>
<img src="./image/6.jfif" style="width:120px; height:100px;margin-right:500px;">
<div class="text"><input type='text' name='two' value='Product 2' ></div>
<button name='btn2' type="submit">payment</button></form>

</div>


<div class="col-sm">
    <form method='POST'>

<div class="mySlides fade" href="ragistarpage.php">
<div class="numbertext">9 / 3</div>
<img src="./image/5.jpg" style="width:120px; height:100px;margin-left:50%;top: -626px;position:relative;
   right: -10px;"><br>
<br><div class="text"><input type='text' name='two' value='Product 2'style="margin-left:50%;  position: relative;
   top: -646px;
   right: -10px;" ></div><br>
<button name='btn2' type="submit" style="margin-left:50%;margin-bottom:60px; top: -646px;
   right: -10px;position:relative;">payment</button>

</div> -->
<!-- 
    </form> 
     </div> -->
    
     <div class="grid-container">
  <div class="grid-item">
    <img src="./image/2.jfif" alt="Product 1" height="150" width="100">
    <div class="product-info">
      <h3>Product 1</h3>
      <p>500000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>

  <div class="grid-item">
    <img src="./image/3.jfif" alt="Product 2" height="150" width="100">
    <div class="product-info">
      <h3>Product 2</h3>
      <p>40000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <div class="grid-item">
    <img src="./image/4.jfif" alt="Product 3" height="150" width="100">
    <div class="product-info">
      <h3>Product 3</h3>
      <p>30000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <div class="grid-item">
    <img src="./image/5.jpg" alt="Product 4" height="150" width="100">
    <div class="product-info">
      <h3>Product 4</h3>
      <p>2000000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <div class="grid-item">
    <img src="./image/6.jfif" alt="Product 5" height="150" width="100">
    <div class="product-info">
      <h3>Product 5</h3>
      <p>700000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <form action="" method="POST">

  <div class="grid-item">
    <img src="./image/7.jpg" alt="Product 6" height="150" width="100">
    <div class="product-info">
      <h3>Product 6</h3>
      <p>60000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
</form>
  <form action="" method="POST">
    <div class="grid-item">
      <img src="./image/7.jpg" alt="Product 6" height="150" width="100">
      <div class="product-info">
        <h3>Product 7</h3>
        <p>4000</p>
      </div>
      <a href="../payment/pay2.php"><button>Buy Now</button></a>
    </div>
  </form>

  <div class="grid-item">
    <img src="./image/8.jpg" alt="Product 5" height="150" width="100">
    <div class="product-info">
      <h3>Product 5</h3>
      <p>500000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <form action="" method="POST">

  <div class="grid-item">
    <img src="./image/9.jpg" alt="Product 5" height="150" width="100">
    <div class="product-info">
      <h3>Product 5</h3>
      <p>100000</p>
    </div>
    <a href="../payment/pay2.php"><button>Buy Now</button></a>
  </div>
  <form action="" method="POST">



</div>
</div>
</div>
     

    </body>
    
    </html>