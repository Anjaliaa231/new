<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_brand'])){
    // $category_tittle is a variable  such that any input given in insert category can add to database.
    $brand_tittle=$_POST['$brand_tittle'];
    // select data from database
    $select_query="select * from `brands`where brand_tittle='$brand_tittle' ";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
if($number>0){
    echo"<script>alert('This brand is present inside the database')</script>";
    
} 
else{

    $insert_query="insert into `brands` (brand_tittle) values ('$brand_tittle')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo"<script>alert('Brand name  has been inserted successfully')</script>";
       
    }
    }
  }
?>
<h2 class="text-center">Insert Brands</h2>

<form action="" method="post"class="mb-2">
    <div class="input-group w-90 mb-2">

  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control"name="$brand_tittle" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">


<input type="Submit" class="bg-info  border-0 p-2 my-3"name="insert_brand"value="Insert Brands" >

</div>
   
</form>