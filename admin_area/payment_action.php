<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Action</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- user defined css -->
    <link rel="stylesheet" href="../userdefinedstyle.css">
</head>
<body>
    <h3 class="text-center text-success">Order Action</h3>
<div class="container my-5">
<?php
if(isset($_GET['payment_id'])){
    $payment_id=$_GET['payment_id'];
    $get_order_payment_details="Select * from `user_payments` where payment_id=$payment_id";
    $result=mysqli_query($con,$get_order_payment_details);
    $row=mysqli_fetch_assoc($result);
        $invoice_number=$row['invoice_number'];
        $user_address=$row['delivery_address'];
        $user_mobile=$row['contact'];
        $amount_due=$row['amount'];
        echo "<form action='' method='post'>
        <div class='form-outline my-4 text-center w-50 m-auto'>
            <div class='form-outline my-4 text-center w-50 m-auto'>
            <label for='' class='text-light'>Invoice Number</label>
                <input type='text' class='form-control w-50 m-auto' name='invoice_number' value='$invoice_number'>
            </div>
            <div class='form-outline my-4 text-center w-50 m-auto'>
                <label for='' class='text-light'>Delivery address</label>
                <input type='text' class='form-control w-50 m-auto' name='address' value='$user_address'>
            </div>
            <div class='form-outline my-4 text-center w-50 m-auto'>
                <label for='' class='text-light'>Contact Number</label>
                <input type='text' class='form-control w-50 m-auto' name='contact' value='$user_mobile'>
            </div>
            <div class='form-outline my-4 text-center w-50 m-auto'>
                <label for='' class='text-light'>Amount</label>
                <input type='text' class='form-control w-50 m-auto' name='amount' value='$amount_due'>
            </div>
            <div class='form-outline my-4 text-center w-50 m-auto'>
                <select name='action_mode' class='form-select w-50 m-auto'>
                    <option>Select Order Status</option>
                    <option>Pending</option>
                    <option>On the Way</option>
                    <option>Cancelled</option>
                    <option>Delivered</option>
                </select>
            </div>
            <div class='form-outline my-4 text-center w-50 m-auto'>
                <input type='submit' class='bg-info py-2 px-3 border-0' value='Confirm Order Delivery' name='confirm_order'>
            </div>
        </form>";
}
        ?>
    </div>
</body>
</html>
<?php
    if(isset($_POST['confirm_order'])){
        $action_mode=$_POST['action_mode'];
        $insert_query = "UPDATE `user_payments` SET order_payment_status = '$action_mode' WHERE payment_id = $payment_id";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            echo "<script>alert('Successfully Updated')</script>";
            echo "<script>window.open('index.php?list_payments','_self')</script>";
        } else {
            // Handle the case where the query fails
            echo "<script>alert('Update failed.')</script>";
        }
    }
?>
