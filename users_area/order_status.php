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
                $select="SELECT * FROM `user_payments` WHERE order_id=$order_id";
                $result=mysqli_query($con,$select);
                $row=mysqli_fetch_assoc($result);
                $amount=$row['amount'];
                $address=$row['delivery_address'];
                $contact=$row['contact'];
                $status=$row['order_payment_status'];
                
                if($status=='On the Way'){
                    $statusClass = 'text-info';
                } elseif($status=='Pending'){
                    $statusClass = 'text-warning';
                } elseif($status=='Cancel'){
                    $statusClass = 'text-danger';
                } elseif($status=='Delivered'){
                    $statusClass = 'text-success';
                } else{
                    $statusClass = 'text-info';
                }

                echo "<div class='card'>
                        <div class='card-body m-auto'>
                            <h5 class='card-title'>$order_id</h5>
                            <p class='card-text'>$amount</p>
                            <p class='card-text'>$address</p>
                            <p class='card-text'>$contact</p>
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
