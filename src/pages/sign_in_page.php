<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popcorn!: The movie referral site.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: url('../images/bg.jpg') no-repeat;
            background-size: cover;
        }

        .login {
            border-radius: 15px;
            background: rgba(0, 0, 0, .7);
            padding: 15px;
            text-align: center;
        }

        .fs-1 {
            color: #fff;
        }

        .form-inp {
            display: flex;
            align-items: center;
            color: #fff;
            margin-bottom: 10px;
        }

        .form-inp label {
            width: 85px;
        }

        .form-label {
            margin-bottom: 0;
        }

        .form-inp input {
            /*border-radius: 15px;*/
            border: none;
            outline-style: none;
            color: #fff;
            padding-left: 10px;
            background-color: transparent;
            border-bottom: 2px solid #fff;
        }
        
        
.btn-primary {
    border: none;
    background-color: #ffc828!important;
}
    </style>
</head>

<body class="d-flex
            justify-content-center
            align-items-center
            vh-100
            flex-column">
    <div class="login">
        <h1 style="color:#fff;">POPCORN</h1>
        <div class="w-400 p-5 shadow rounded">
            <form method="POST" action="../include_files/sign_in.php">
                <div class="d-flex
                    justify-content-center
                    align-items-center
                    flex-column">
                    <h3 class="display-4 fs-1 text-center"> SIGN IN </h3>
                </div>
                <br />

                <?php if (isset($_GET['error'])) { ?>

                    <div class="alert alert-warning" role="alert">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>

                <?php } ?>

                <div class="form-inp">
                    <label for="user" class="form-label">Username</label>
                    <input name="user" type="text" placeholder="Enter username" required />
                </div>
                <div class="form-inp">
                    <label for="pwd" class="form-label">Password</label>
                    <input name="pwd" type="password" placeholder="Enter password" required />
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <br />
                <br />
                <!--div class="container"-->
                <!--span class="pwd"> <a href="pages/forgot_pwd.php"> Forgot password?</a></span-->
                <!--/div-->
                <a href="pages/create_account.php" style="color:#ffc828;">Create an account here!</a>
            </form>
        </div>
    </div>
</body>

</html>