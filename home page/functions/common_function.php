<?php
include './connecthome1.php';

//Get Products
function getproducts(){
    global $conn;
    //Condition Isset Or Not 
    if(!isset($_GET['cat'])){    
        if(!isset($_GET['brand'])){
        $select_query="select * from `product` order by rand() LIMIT 0,6";
            $result_query=mysqli_query($conn, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='productpage.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
            }
        }   
    }
}

//Feetching Unique Category
function get_unique_categories(){
    global $conn;
    //Condition Isset Or Not 
    if(isset($_GET['cat'])){
        $category_id=$_GET['cat'];
        $select_query="select * from `product` where category_id='$category_id'";
            $result_query=mysqli_query($conn, $select_query);
            $now_of_rows=mysqli_num_rows($result_query);
            if($now_of_rows==0){
                echo"<h2 class='text-danger text-center'>No stock for this category</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='productpage.php?product_id=$product_id' class='btn btn-secondary'>View more</a>                        </div>
                    </div>
                </div>";
            }
        }   
}

//Feetching Unique Brand
function get_unique_brands(){
    global $conn;
    //Condition Isset Or Not 
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
        $select_query="select * from `product` where brand_id='$brand_id'";
            $result_query=mysqli_query($conn, $select_query);
            $now_of_rows=mysqli_num_rows($result_query);
            if($now_of_rows==0){
                echo"<h2 class='text-danger text-center'>This is brand is not available for service</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='productpage.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
            }
        }   
}



//Showing Brands
function showbrand(){
    global $conn;
    $sbrand="select * from `brands`";
    $rbrand=mysqli_query($conn, $sbrand);
    while($row_brand=mysqli_fetch_assoc($rbrand)){
        $brand_title=$row_brand['brand_title'];
        $brand_id=$row_brand['brand_id'];
        echo " <li class='nav-item'>
        <a href='home.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
        </li>";
    }
}

//Showing Category
function showcategory(){
    global $conn;
    $scat="select * from `categories`";
    $rcat=mysqli_query($conn, $scat);
    while($row_cat=mysqli_fetch_assoc($rcat)){
        $category_title=$row_cat['category_title'];
        $category_id=$row_cat['category_id'];
        echo " <li class='nav-item'>
        <a href='home.php?cat=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
    }
}


//Searching Product
function search_product(){
    global $conn;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
        $search_query="select * from `product` where product_keywords like '%$search_data_value%'";
            $result_query=mysqli_query($conn, $search_query);
            $now_of_rows=mysqli_num_rows($result_query);
            if($now_of_rows==0){
                echo"<h2 class='text-danger text-center'>No result match. No product found on this categories!</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='productpage.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
            }
    }   
}

//Display All Product
function get_all_products(){
    global $conn;
    //Condition Isset Or Not 
    if(!isset($_GET['cat'])){    
        if(!isset($_GET['brand'])){
        $select_query="select * from `product` order by rand()";
            $result_query=mysqli_query($conn, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='productpage.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
            }
        }   
    }
}


//View Details Product Function
function all_details_product_show(){
    global $conn;
    //Condition Isset Or Not 
    if(isset($_GET['product_id'])){
    if(!isset($_GET['cat'])){    
        if(!isset($_GET['brand'])){
            $product_id=$_GET['product_id'];
        $select_query="select * from `product` where product_id=$product_id";
            $result_query=mysqli_query($conn, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_image2=$row['product_image2'];
                $product_image3=$row['product_image3'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo"
                <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>Price:$product_price/-</p>
                            <a href='home.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='home.php' class='btn btn-secondary'>GO home</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-8'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h4 class='text-center text-secondary mb-5'>Releted Products</h4>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin_area/product_image/$product_image2' class='card-img-top' alt='$product_title'>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin_area/product_image/$product_image3' class='card-img-top' alt='$product_title'>
                        </div>
                    </div>
                </div>";
                }
            }   
        }
    }
}

//Get Ip Address

function getIPAddress() {  
    global $conn;
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
    else{
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;

//Cart Function
function add_cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_ip_address = getIPAddress();
        $get_product_id=$_GET['add_to_cart'];
        $select_query="select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_query=mysqli_query($conn, $select_query);
        $now_of_rows=mysqli_num_rows($result_query);
            if($now_of_rows>0){
                echo"<script>alert('This item is already in cart')</script>";
                echo"<script>window.open('home.php','_self')</script>";
            }else{
                $insert_query="insert into `cart_details` (product_id, ip_address, quantity) values ('$get_product_id', '$get_ip_address',0)";
                $result_query=mysqli_query($conn, $insert_query);
                echo"<script>alert('Item added to cart')</script>";
                echo"<script>window.open('home.php','_self')</script>";
            }
    }
}

//Function to get cart item number
function cart_item_number(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_ip_address = getIPAddress();
        $select_query="select * from `cart_details` where ip_address='$get_ip_address'";
        $result_query=mysqli_query($conn, $select_query);
        $count_cart_item=mysqli_num_rows($result_query);
    }else{
        global $conn;
        $get_ip_address = getIPAddress();
        $select_query="select * from `cart_details` where ip_address='$get_ip_address'";
        $result_query=mysqli_query($conn, $select_query);
        $count_cart_item=mysqli_num_rows($result_query);
    }
    echo $count_cart_item;
}

//Total Price Function
function total_cart_item(){
    global $conn;
    $get_ip_address = getIPAddress();
    $total=0;
    $cart_query="select * from `cart_details` where ip_address='$get_ip_address'";
    $result=mysqli_query($conn, $cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="select * from `product` where product_id='$product_id'";
        $result_products=mysqli_query($conn, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']);
            $product_values=array_sum($product_price);
            $total+=$product_values;
        }
    }
    echo $total;
}

//Remove Function
function remove_cart(){
    global $conn;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['remove_item'] as $remove_id){
            echo $remove_id;
            $delete_query="delete from `cart_details` where product_id= $remove_id ";
            $result_delete_query=mysqli_query($conn, $delete_query);
            if($result_delete_query){
                echo"<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}

?>