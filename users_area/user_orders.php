
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $username=$_SESSION['username'];
        $get_user="Select * from `user_table` where username='$username'";
        $result=mysqli_query($con,$get_user);
        $row_fetch=mysqli_fetch_assoc($result);
        $user_id=$row_fetch['user_id'];
        //echo $user_id;
    ?>
    <h3 class="text-success text-center">All my Orders</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
        <tr>
            <th>Serial no.</th>
            <th>Amount Due</th>
            <th>Total products</th>
            <th>Invoice Number</th>
            <th>Date</th>
            <th>Complete/Incomplete</th>
            <th>Payment Status</th>
            <th>Order Status</th>
        </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
                $get_order_details="Select * from `user_orders` where user_id=$user_id";
                $result_orders=mysqli_query($con,$get_order_details);
                $number=1; // para magiterate serial number
                while($row_orders=mysqli_fetch_assoc($result_orders)){
                    $order_id=$row_orders['order_id'];
                    $amount_due=$row_orders['amount_due'];
                    $total_products=$row_orders['total_products'];
                    $invoice_number=$row_orders['invoice_number'];
                    $order_status=$row_orders['order_status'];
                    if($order_status=='pending'){
                        $order_status='Incomplete';
                    }else{
                        $order_status='Complete';
                    }
                    $order_date=$row_orders['order_date'];
                    
                    echo "<tr>
                    <td>$number</td>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                    <td>$invoice_number</td>
                    <td>$order_date</td>
                    <td>$order_status</td>";
                    ?>
                    <?php
                        if($order_status=='Complete'){
                            echo "<td>Confirmed</td>";
                        }else{
                            echo "<td><a href='confirm_payment.php?order_id=$order_id' class='text-light bg-info text-decoration-none rounded-pill p-2'>Confirm</a></td>
                            </tr>";
                        }
                $number++;
                    if($order_status=='Incomplete'){
                        echo '';
                    }else{
                        echo "<td><a href='order_status.php?order_id=$order_id'><i class='fa fa-eye'></i></a></td>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>