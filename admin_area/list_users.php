<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5 m-auto">
    <thead class="bg-info">
        <?php
            $get_user="Select * from `user_table`";
            $result=mysqli_query($con,$get_user);
            $row_count=mysqli_num_rows($result);
            

    if($row_count==0){
        echo "<h2 class='bg-danger text-center mt-5'>No users yet</h2>";
    }else{
        echo "<tr class='m-auto'>
            <th>S1. no</th>
            <th>Username</th>
            <th>User email</th>
            <th>User Image</th>
            <th>User address</th>
            <th>User Mobile</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $user_id=$row_data['user_id'];
            $username=$row_data['username'];
            $user_email=$row_data['user_email'];
            $user_image=$row_data['user_image'];
            $user_address=$row_data['user_address'];
            $user_mobile=$row_data['user_mobile'];
            $number++;
            echo "<tr class='m-auto'>
            <td>$number</td>
            <td>$username</td>
            <td>$user_email</td>
            <td><img src='../users_area/user_images/$user_image' alt='$username' class='product_img'></td> 
            <td>$user_address</td>
            <td>$user_mobile</td>
        </tr>";
        }
    }
        ?>
        
    </tbody>
</table>