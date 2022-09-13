<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popcorn!: The movie referral site.</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel= "stylesheet">
    <link rel= "stylesheet" type="text/css" href="css/index_style.css">
</head>


<body class="d-flex
            justify-content-center
            align-items-center
            vh-100
            flex-column">
    <h1>Popcorn!</h1>
    <div class="w-400 p-5 shadow rounded">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="d-flex
                    justify-content-center
                    align-items-center
                    flex-column">
            <h3 class="display-4 fs-1 text-center"> SIGN IN </h3>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input name="user" type="text" placeholder="Enter username" required />
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input name="pwd" type="password" placeholder="Enter password" required />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <!--div class="container"-->
                <!--span class="pwd"> <a href="pages/forgot_pwd.php"> Forgot password?</a></span-->
            <!--/div-->
            <a href="pages/create_account.php">Create an account here!</a>
        </form>
        
        <?php include 'include_files/sign_in.php'?>
    </div>

    

</body>

</html>