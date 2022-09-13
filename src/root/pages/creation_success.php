<html>
    <body>
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
