<!-- connect file-->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- user defined css -->
    <link rel="stylesheet" href="../userdefinedstyle.css">
    <style>
        .footer{
            position: absolute;
            bottom: 0;
        }
        body{
            overflow-x: hidden;
        }
        .product_img{
            width: 50px;
            object-fit:contain;
        }
    </style>
    <!-- font awesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <div class="container-fluid">
                <img src="../img/C100.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
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
                <div class="p-3">
                    <a href="#"><img src="../img/WALTS.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center m-auto">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light
                     bg-info my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light
                     bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light
                     bg-info my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light
                     bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light
                     bg-info my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light
                     bg-info my-1">View Brands</a></button>
                     <button><a href="index.php?inventory" class="nav-link text-light
                     bg-info my-1">Inventory</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light
                     bg-info my-1">All orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light
                     bg-info my-1">All Payments</a></button>
                     <button><a href="index.php?sales" class="nav-link text-light
                     bg-info my-1">Sales</a></button>
                    <button><a href="index.php?sales" class="nav-link text-light
                     bg-info my-1">All users</a></button>
                    <button><a href="" class="nav-link text-light
                     bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }
            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            if(isset($_GET['inventory'])){
                include('inventory.php');
            }
            if(isset($_GET['sales'])){
                include('sales.php');
            }
            ?>
        </div>
         <!-- last child -->
  <!-- include footer -->
  <?php include("../includes/footer.php")?>
    </div>

    <!-- bootstrap js link -->
    <script src="../js/bootstrap.js"></script>
</body>
</html>