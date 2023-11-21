<h3 class="text-center text-success">Inventory</h3>
<table class="table table-bordered mt-5 m-auto">
    <thead>
        <th>S1.no</th>
        <th>Product</th>
        <th>Stock quantity</th>
        <th>Add quantity</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        $get_product="Select * from `products`";
        $result=mysqli_query($con, $get_product);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $product_title=$row['product_title'];
            $stock=$row['stock'];
            $number++;
        ?>
        <tr>
            <td><?php echo $number ?></td>
            <td> <?php echo $product_title ?></td>
            <td><?php echo $stock ?></td>
            <td><input type="text" name="qty" class="form-input w-50"></td>
            <td>
            <input type="submit" value="Update quantity" class="bg-info px-3 py-2 border-0 m-auto" name="update_qty">
            </td>"
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>