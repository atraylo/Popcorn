<!DOCTYPE html>
<html>

<head>
    <title> Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        width: 100%;
        min-height: 100vh;
        background: url('../images/bg.jpg') no-repeat;
        background-size: cover;
    }
        .login {
            border-radius: 15px;
            background: rgba(0,0,0,.7);
            padding: 15px 20px;
            text-align: center;
            color: #fff;
        }
        .fs-1 {
            color: #fff;
        }
        
        .form-label {
            margin-bottom: 0;
        }
        .form-group input {
            border-radius: 0;
            border: none;
            outline-style: none;
            color: #fff;
            padding-left: 10px;
            background-color: transparent;
            border-bottom: 2px solid #fff;
        }
        
        .form-group {
            display: flex;
            align-items: center;
            margin: 20px 0;
            justify-content:center;
        }
        
        .form-group label {
            width: 150px;
        }
        
        .form-group input {
            width: 70%;
        }
        
        .form-group1 input {
            background-color: #0400ff;
            border: none;
            color: #fff;
            border-radius: 10px;
            padding: 10px 15px;
        }
         
.form-group1 input {
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
        <h1>Create Your Account</h1>
    <p>Enter your email, then create a username and password. Then you will be redirected to the sign in page.</p>

    <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-warning" role="alert">
            <?php echo htmlspecialchars($_GET['error']); ?>
        </div>

    <?php } ?>

    <form action="../include_files/acc_create.php" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" name="email" type="email" placeholder="Enter email" required />
        </div>
        <div class="form-group">
            <label for="user">Username:</label>
            <input class="form-control" name="user" type="text" placeholder="Enter username" required />
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input class="form-control" name="pwd" type="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase, one lowercase letter, and 8 or more characters" required />
        </div>
        <div class="form-group1">
            <input type="submit" value="Create Account" name="Submit">
        </div>
    </form>
    
    <p>Already have an account? <a href="sign_in_page.php" style="color:#ffc828;">sign in here!</a></p>
    </div>
</body>

</html>