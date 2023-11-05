<!-- connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRE8 | cart details</title>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- calling cart function -->
  <?php
  cart();
  ?>
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

  <!-- fourth child-table -->
    <div class="container">
        <div class="row">
            <table class="table table-bordered text-centered">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dress</td>
                        <td><img src="./img/dress.jpg" alt=""></td>
                        <td><input type="text"></td>
                        <td>300</td>
                        <td><input type="checkbox"></td>
                        <td>
                            <p>Update</p>
                            <p>Remove</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- subtotal -->
            <div class="d-flex mb-5">
                <h4 class="px-3">Subtotal:<strong class="text-info">300</strong></h4>
                <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue Shopping</button></a>
                <a href="#"><button class="bg-secondary px-3 py-2 border-0 text-light">Checkout</button></a>
            </div>
        </div>
    </div>

  <!-- last child -->
  <!-- include footer -->
  <?php include("./includes/footer.php")?>  
    </div>
</body>
    <!-- javascript link -->
    <script src="js/bootstrap.js"></script>
</html>