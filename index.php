<!-- connect file -->
<?php
include('./includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website</title>
    <!--bootstrap  css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style.css file link  -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php
          cart_item();
          
          ?>
          </sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php total_cart_price(); 
          ?>
        </a>
        </li>
</ul>
        <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav> 

<!-- calling cart function  -->
<?php
cart();
?>

<!-- second child  from bootstrap-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <!-- me is margin  -->
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_login.php">Login</a>
        </li>

    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">APNA VYAPAAR</h3>
    <p class="text-center">Give us opportunity to surve you </p>
</div>
<!-- fourth child -->
<div class="row px-1">
    
    <div class="col-md-10">
        <!-- products-->
         <div class="row px-3">
          <!-- fetching products -->
           <?php
          //  calling function for getting the products on the screen
          //  search_product(); 
           getproducts();
           get_unique_categories();
           get_unique_brands();
          //  $ip = getIPAddress();  
          //  echo 'User Real IP Address - '.$ip; 
          
          
           ?>

           
          </div>
     <!-- col end -->
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <!-- sidenav -->
        <!-- me(margin auto) -->
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <!-- li.nav-item.bg-info -->
            <li class="nav-item bg-info">
                <!-- a.nav-link    this is for nav link -->
                <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
            </li>
    <?php
   
     // calling getbrands() for displaying the name of brands.
     getbrands();
  


    ?>
            <!-- <li class="nav-item ">
            <a href="#" class="nav-link text-light">brand1</a>
            </li>
            <li class="nav-item ">
            <a href="#" class="nav-link text-light">brand2</a>
            </li>
            <li class="nav-item ">
             <a href="#" class="nav-link text-light">brand3</a>
            </li>
            <li class="nav-item ">
             <a href="#" class="nav-link text-light">brand4</a>
            </li>
            <li class="nav-item">
             <a href="#" class="nav-link text-light">brand5</a>
            </li> -->
        </ul>
        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            
            <li class="nav-item bg-info">
                
               <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
            <?php
            // function call for categories 

           getcategories();
       


           ?>
            <!-- <li class="nav-item ">
            <a href="#" class="nav-link text-light">category1</a>
            </li> -->
            <!-- <li class="nav-item ">
            <a href="#" class="nav-link text-light">category2</a>
            </li>
            <li class="nav-item ">
             <a href="#" class="nav-link text-light">category3</a>
            </li>
            <li class="nav-item ">
             <a href="#" class="nav-link text-light">category4</a>
            </li>
            <li class="nav-item">
             <a href="#" class="nav-link text-light">caategory5</a>
            </li> -->
        </ul>
       
    </div>
    
</div>



<!-- footer -->
<?php
include('./includes/footer.php')
?>

</div>

<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>