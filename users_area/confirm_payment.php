<?php
    include('../includes/connect.php');
    session_start();
    $user_session_name=$_SESSION['username'];
        $select_query="Select * from `user_table` where username='$user_session_name'";
        $result_query=mysqli_query($con,$select_query);
        $row_fetch=mysqli_fetch_assoc($result_query);
        $user_address=$row_fetch['user_address'];
        $user_mobile=$row_fetch['user_mobile'];

    if(isset($_GET['order_id'])){
        $order_id=$_GET['order_id'];
        //echo $order_id;
        $select_data="Select * from `user_orders` where order_id=$order_id";
        $result=mysqli_query($con,$select_data);
        $row_fetch=mysqli_fetch_assoc($result);
        $invoice_number=$row_fetch['invoice_number'];
        $amount_due=$row_fetch['amount_due'];
    }
     // store to confirm payment table
    if(isset($_POST['confirm_payment'])){
        $invoice_number=$_POST['invoice_number'];
        $amount=$_POST['amount'];
        $payment_mode=$_POST['payment_mode'];
        $insert_query="Insert into `user_payments` (order_id,invoice_number,amount,delivery_address,contact,payment_mode) values ($order_id,$invoice_number,$amount,'$user_address',$user_mobile,'$payment_mode')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            echo "<h3 class='text-center text-light'>Successfully completed the payment</h3>";
            echo "<script>window.open('profile.php?my_orders','_self')</script>"; 
        }
        $update_orders="Update `user_orders` set order_status='Complete' where order_id=$order_id";
        $result_orders=mysqli_query($con,$update_orders);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body class="bg-secondary">
    <h1 class="text-center text-light">Confirm Payment</h1>
    <div class="container my-5">
        <form action="" method="post">
        <div class="form-outline my-4 text-center w-50 m-auto">
            <div class="form-outline my-4 text-center w-50 m-auto">
            <label for="" class="text-light">Invoice Number</label>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>Select Payment mode</option>
                    <option>Gcash</option>
                    <option>Cash on delivery</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Delivery address</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $user_address ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Contact Number</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $user_mobile ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="text-light">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-info py-2 px-3 border-0" value="Confirm" name="confirm_payment">
            </div>
        </form>
    </div>
</body>
</html>