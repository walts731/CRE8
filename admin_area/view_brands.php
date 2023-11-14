<h3 class="text-center text-success">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>S1 no.</th>
            <th>Brands Title</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
            $select_brand="Select * from `brands`";
            $result=mysqli_query($con,$select_brand);
            $number=0;
            while($row=mysqli_fetch_assoc($result)){
                $brand_id=$row['brand_id'];
                $brand_title=$row['brand_title'];
                $number++;
        ?>
        <tr>
            <td><?php echo $number ?></td>
            <td><?php echo $brand_title ?></td>
            <td><a href='index.php?edit_brands=<?php echo $brand_id ?>'><i class='fa-solid fa-pen-to-square'></i></a></td>
        </tr>
        <?php
            }
            ?>
    </tbody>
</table>