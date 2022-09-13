<!DOCTYPE html>
<html>

    <head>
        <title>Create Account</title>
    </head>


    <body>
        <h1>Create Your Account</h1>
        <p>Enter your email, then create a username and password</p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name = "email" type="email" placeholder="Enter email" required />
            </div>
            <div class="form-group">
                <label for="user">Username:</label>
                <input class="form-control" name = "user" type="text" placeholder="Enter username" required/>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" name = "pwd" type="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase, one lowercase letter, and 8 or more characters" required/>
            </div>
            <div class="form-group">
                <input type="submit" value="Create Account" name = "Submit">
            </div>
        </form>
        <p>Already have an account? <a href="../index.php">sign in here!</a></p>

        <?php
            require("../include_files/DBConn.php");

            $username = $_POST['user'];
            $pass_word = $_POST['pwd'];
            $email = $_POST['email'];

            try{
                $sth = $dbh->prepare('INSERT INTO user_info (username,pass_word,email) VALUES (?,?,?)');
                $sth->execute(array($username, $pass_word, $email));
                echo 'Account Created!';
            }catch(PDOException $e){
                exit("DB Err: ".$e->getMessage());
                echo "An error has occurred. Please Try again later.";
            }

        ?>

    </body>
</html>