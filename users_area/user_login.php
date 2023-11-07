<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
     <!-- bootstrap css link -->
     <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- userdefinedstyle css --> 
    <link rel="stylesheet" href="../userdefinedstyle.css">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
                    </div>
                    
                    <!-- password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
                    </div>
                    
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>