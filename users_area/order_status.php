<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body class="bg-secondary">
    <h1 class="text-center text-light">Order Status</h1>
    <div class="container-fluid">
        <div class='col-md-4 mt-5 m-auto'>
            <?php
            if(isset($_GET['order_id'])){
                $order_id=$_GET['order_id'];

                // fetch product id
                $select_item="select * from `order_item` where order_id=$order_id";
                $result_item=mysqli_query($con,$select_item);
                $row_item=mysqli_fetch_assoc($result_item);
                $product_id=$row_item['product_id'];

                // fetch product title
                $select_product="Select * from `products` where product_id=$product_id";
                $result_product=mysqli_query($con,$select_product);
                $row_product=mysqli_fetch_assoc($result_product);
                $product_title=$row_product['product_title'];

                // fetch payment
                $select="SELECT * FROM `user_payments` WHERE order_id=$order_id";
                $result=mysqli_query($con,$select);
                $row=mysqli_fetch_assoc($result);
                $amount=$row['amount'];
                $address=$row['delivery_address'];
                $contact=$row['contact'];
                $status=$row['order_payment_status'];
                
                if($status=='On the Way'){
                    $statusClass = 'bg-info rounded-pill text-center text-light';
                } elseif($status=='Pending'){
                    $statusClass = 'bg-warning rounded-pill text-center text-light';
                } elseif($status=='Cancelled'){
                    $statusClass = 'bg-danger rounded-pill text-center text-light';
                } elseif($status=='Delivered'){
                    $statusClass = 'bg-success rounded-pill text-center text-light';
                } else{
                    $statusClass = 'text-info';
                }

                echo "<div class='card'>
                        <div class='card-body m-auto'>
                            <h5 class='card-title'>Item: $product_title</h5>
                            <p class='card-text'>Amount: $amount</p>
                            <p class='card-text'>Delivery Address: $address</p>
                            <p class='card-text'>Contact: $contact</p>
                            <p class='card-text $statusClass'>$status</p>
                            <a href='profile.php?my_orders' class='btn btn-info'>Go Back</a>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
