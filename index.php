<!-- connect file-->
<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRE8</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- userdefinedstyle css --> 
    <link rel="stylesheet" href="userdefinedstyle.css">
</head>
<body>
    <!-- nav bar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./img/C100.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price:100/-</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <!-- second child -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
  </nav>

  <!-- third child -->
  <div class="bg-light">
    <h3 class="text-center">CRE8</h3>
    <p class="text-center">Where Style Meets Confidence!</p>
  </div>

  <!-- fourth child -->
  <div class="row">
    <div class="col-md-10">
      <!-- products -->
      <div class="row">
  <!-- fetching products -->
      <?php
  $select_query="Select * from `products` order by rand() LIMIT 0,9";
  $result_query=mysqli_query($con, $select_query);
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while( $row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    echo "<div class='col-md-4 mb-2'>
    <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-info'>Add to Cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
              </div>
      </div>
    </div>";
  }
      ?>

<!-- row end -->
</div>
<!-- col end -->
</div>
    <div class="col-md-2 bg-secondary p-0">
      <!-- brands -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="navlink text-light"><h4>BRANDS</h4></a>
        </li>
        <?php

$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='navlink text-light'>$brand_title</a>
</li>";
}
        ?>
      </ul>
      <!-- categories -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="navlink text-light"><h4>CATEGORIES</h4></a>
        </li>
        <?php

$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='navlink text-light'>$category_title</a>
</li>";
}
        ?>
        
      </ul>
    </div>
    <!-- side nav -->
  </div>

  <!-- last child -->
  <div class="bg-info p-3 text-center">
    <p>All rights reserved | CRUD 2023</p>
  </div>
  
    </div>
</body>
    <!-- javascript link -->
    <script src="js/bootstrap.js"></script>
</html>