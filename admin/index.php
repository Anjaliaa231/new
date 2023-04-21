<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin_image{
         width: 100px;
         object-ft:contain;

      }
       
      .footer{
        position:absolute;
        bottom:0;
      }

    </style>
</head>
<body>
   
<div class="container-fluid p-0">
    <!-- first child -->

 <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <img src="../images/logo.png" alt="" class="logo">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-items">
                    <a href="" class="nav-link">Welcome guest</a>
                </li>

            </ul>
        </nav>
    </div>
 </nav>
 <!-- second child -->
 <div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
 </div>
 <!-- third child -->
 <div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="px-3">
        <a href="#"><img src="../images/profile1.jpg" alt="" class="admin_image"></a>
        <p class="text-light text-center ">Admin name</p>
        </div>
        <div class="button text-center">
           <!--at a time we can create 10 buttons . this is called emit  -->
        <!-- button*10>a.nav-link.text-light.bg-info.my-1 
         my(margin in top , down) -->
        <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View products</a></button>
        <!-- ?insert_category is get variable -->
        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View categories</a></button>
        <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Inset brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
    </div>
 </div>
<!-- fourth child -->
<div class="container my-3">
    <?php
    // here if insert _category is active then only insert_categories.php file will open.
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    ?>
</div>
 


<!-- footer -->
<div class=" footer bg-info p-3 text-center">
    <p>All rights reserved &copy-anjali kumari</p>
</div>
    </div>

</div>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>