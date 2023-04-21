<?php
//including connect file
// include('./includes/connect.php');
//getting products
function getproducts(){
    global $con;
    //  condition  to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

    

    $select_query="select * from `products` order by rand() LIMIT 0,9"; //product_tittle for alphabetically we can search by product_tittles . if we want to apply limit that only 6 or 9 products can visible in the screen   so  we can write as rand() limit0,9
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_tittle'];
    while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
     $product_id=$row['product_id'];
     $product_tittle=$row['product_tittle'];
     $product_description=$row['product_description'];
     
     $product_image1=$row['product_image1'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];
     
     echo " <div class='col-md-4 mb-2'>
     <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
       <div class='card-body'>
         <h5 class='card-title'>$product_tittle</h5>
         <p class='card-text'>$product_description</p>
         <p class='card-text'>Price:$product_price/-</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>

       </div>
     </div>
     
      </div> ";

    
    }
 }
}
}

// getting all products
function get_all_products(){
    global $con;
    //  condition  to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

    

    $select_query="select * from `products` order by rand() "; //product_tittle for alphabetically we can search by product_tittles . if we want to apply limit that only 6 or 9 products can visible in the screen   so  we can write as rand() limit0,9
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_tittle'];
    while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
     $product_id=$row['product_id'];
     $product_tittle=$row['product_tittle'];
     $product_description=$row['product_description'];
     
     $product_image1=$row['product_image1'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];
     $product_id=$row['product_id'];
     echo " <div class='col-md-4 mb-2'>
     <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
       <div class='card-body'>
         <h5 class='card-title'>$product_tittle</h5>
         <p class='card-text'>$product_description</p>
         <p class='card-text'>Price:$product_price/-</p>
         <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>

       </div>
     </div>
     
      </div> ";

    
    }
 }
}

}

// getting unique categories

function get_unique_categories(){
    global $con;
    //  condition  to check isset or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        
   $select_query="select * from `products`where category_id=$category_id"; //product_tittle for alphabetically we can search by product_tittles . if we want to apply limit that only 6 or 9 products can visible in the screen   so  we can write as rand() limit0,9
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>No Stock for this Category</h2>";
    }

    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_tittle'];
    while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
     $product_id=$row['product_id'];
     $product_tittle=$row['product_tittle'];
     $product_description=$row['product_description'];
     
     $product_image1=$row['product_image1'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];
     $product_id=$row['product_id'];
     echo " <div class='col-md-4 mb-2'>
     <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
       <div class='card-body'>
         <h5 class='card-title'>$product_tittle</h5>
         <p class='card-text'>$product_description</p>
         <p class='card-text'>Price:$product_price/-</p>
         <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>

       </div>
     </div>
     
      </div> ";

    
    }
 }
}

// getting unique brands

function get_unique_brands(){
    global $con;
    //  condition  to check isset or not
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
        
   $select_query="select * from `products`where brand_id=$brand_id"; //product_tittle for alphabetically we can search by product_tittles . if we want to apply limit that only 6 or 9 products can visible in the screen   so  we can write as rand() limit0,9
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>This brand is available for service</h2>";
    }

    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_tittle'];
    while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
     $product_id=$row['product_id'];
     $product_tittle=$row['product_tittle'];
     $product_description=$row['product_description'];
     
     $product_image1=$row['product_image1'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];
     $product_id=$row['product_id'];
     echo " <div class='col-md-4 mb-2'>
     <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
       <div class='card-body'>
         <h5 class='card-title'>$product_tittle</h5>
         <p class='card-text'>$product_description</p>
         <p class='card-text'>Price:$product_price/-</p>
         <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>

       </div>
     </div>
     
      </div> ";

    
    }
 }
}


// displaying brands in sidenav
function getbrands(){
    global $con;
    $select_brands="select * from `brands`";
    // (connection variable , query variable)
$result_brands=mysqli_query($con,$select_brands);
//  $row_data=mysqli_fetch_assoc($result_brands);
//  echo $row_data['brand_tittle'];
while($row_data=mysqli_fetch_assoc($result_brands)){
$brand_tittle=$row_data['brand_tittle'];
$brand_id=$row_data['brand_id'];
// echo $brand_tittle;
echo "<li class='nav-item'>
<a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_tittle</a>
</li>";
}
}

// function for categories
function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
    // (connection variable , query variable)
$result_categories=mysqli_query($con,$select_categories);
//  $row_data=mysqli_fetch_assoc($result_brands);
//  echo $row_data['brand_tittle'];
while($row_data=mysqli_fetch_assoc($result_categories)){
$category_tittle=$row_data['category_tittle'];
$category_id=$row_data['category_id'];
// echo $brand_tittle;
echo "<li class='nav-item'>
<a href='index.php?category=$category_id' class='nav-link text-light'>$category_tittle</a>
</li>";
}
}

// searching products function 

function search_product(){
    global $con;
    if(isset($_GET['search_data_products'])){
        $search_data_value=$_GET['search_data'];
    
   
    $search_query="select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>No result match. No products found on this category</h2>";
    }
    while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
     $product_id=$row['product_id'];
     $product_tittle=$row['product_tittle'];
     $product_description=$row['product_description'];
     
     $product_image1=$row['product_image1'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];
     $product_id=$row['product_id'];
     echo " <div class='col-md-4 mb-2'>
     <div class='card'>
      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
       <div class='card-body'>
         <h5 class='card-title'>$product_tittle</h5>
         <p class='card-text'>$product_description</p>
         <p class='card-text'>Price:$product_price/-</p>
         <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>

       </div>
     </div>
     
      </div> ";

    
    }
 }
}

// view details function
function view_details(){
  global $con;
  //  condition  to check isset or not
  if(isset($_GET['product_id'])){
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];

  $select_query="select * from `products`where product_id= $product_id"; 
  $result_query=mysqli_query($con,$select_query);
  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_tittle'];
  while($row=mysqli_fetch_assoc($result_query)){//accessing front page products
   $product_id=$row['product_id'];
   $product_tittle=$row['product_tittle'];
   $product_description=$row['product_description'];
   $product_image1=$row['product_image1'];
   $product_image2=$row['product_image2'];
   $product_image3=$row['product_image3'];

   $product_price=$row['product_price'];
   $category_id=$row['category_id'];
   $brand_id=$row['brand_id'];
   $product_id=$row['product_id'];
   echo " <div class='col-md-4 mb-2'>
   <div class='card'>
    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_tittle'>
     <div class='card-body'>
       <h5 class='card-title'>$product_tittle</h5>
       <p class='card-text'>$product_description</p>
       <p class='card-text'>$product_price</p>
       <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
      <a href='index.php' class='btn btn-secondary'>Go home</a>

     </div>
   </div>
   
    </div>
    <div class='col-md-8'>
            
              <div class='row'>
                <div class='col-md-12'>
                  <h4 class='text-center text-info mb-5'>Related Products</h4>
                </div>
                <div class='col-md-6'>
                <img src='./admin/product_images/$product_image2' class='card-img-top' alt='$product_tittle'>
                </div>
                <div class='col-md-6'>
                <img src='./admin/product_images/$product_image3' class='card-img-top' alt='$product_tittle'> 
                  </div>
              </div>

          </div> ";

  
  }
}
}
}
}
// grt ip address function
function getIPAddress() {  
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
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo"<script>alert('This item is already present inside the cart')</script>";
    echo"<script>window.open('index.php','_self')</script>";
  }else{
    $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($con,$insert_query);
    echo"<script>alert('Item is added to cart')</script>";
    echo"<script>window.open('index.php','_self')</script>";
  }

}
}


//function to get cart items number
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();
    
    $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
   
    }else{
      global $con;
      $get_ip_add = getIPAddress();
      
      $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($con,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    }

    echo $count_cart_items;
  
  }
//  total price function
function total_cart_price(){
  global $con;
  $get_ip_add = getIPAddress();
  $total_price=0;
  $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
  $result=mysqli_query($con,$cart_query);
  while($row=mysqli_fetch_array($result)){

    $product_id=$row['product_id'];
    $select_products="select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
     $product_price=array($row_product_price['product_price']);
     $product_values=array_sum($product_price);
     $total_price+=$product_values;

    }
  
  }
  echo $total_price;

}

?>