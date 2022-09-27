<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <h1>Create Your Account</h1>
    <p>Enter your email, then create a username and password. Then you will be redirected to the sign in page.</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
        <div class="form-group">
            <input type="submit" value="Create Account" name="Submit">
        </div>
    </form>
    <p>Already have an account? <a href="../index.php">sign in here!</a></p>

    <?php
    require("../include_files/DBConn.php");

        if(isset($_POST['user']) && isset($_POST['pwd']) && isset($_POST['email'])){

            $username = $_POST['user'];
            $pass_word = $_POST['pwd'];
            $email = $_POST['email'];

            try {
                $sth = $dbh->prepare('INSERT INTO user_info (username,pass_word,email) VALUES (?,?,?)');
                $sth->execute(array($username, $pass_word, $email));

                #Uncomment line below when used on actual site and comment line with header after.
                header("Location:https://pop-corn.azurewebsites.net/pages/profile_gen.php");

                #Uncomment line below when using XAMPP during development
                #header("Location:http://localhost/root/pages/profile_gen.php");

            } catch (PDOException $e) {
                echo "This user already exists! Try signing in..";
            }

        }
    ?>

</body>

</html>