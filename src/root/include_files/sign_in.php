<?php
    require("DBConn.php");
        
    #User entered data
    $username = $_POST['user'];
    $pass_word = $_POST['pwd'];

    #Prep sql statments
    $sth = $dbh->prepare('SELECT * FROM user_info WHERE username = ?');
    $sth->execute(array($username));

    $usercheck = $sth->fetchAll(\PDO::FETCH_ASSOC);

    #Check if username exists in database
    if ($usercheck[0]['username'] == $username) {

        #Check if password is correct
        if($usercheck[0]['pass_word'] == $pass_word){
            
            #Sign in
            echo "<td> If there were a website to sign into, you wouldve signed in! Congrats ig?! </td>";
        } else {
            echo "<td> Your passsword is incorrect.. </td>";
        }
    } else {
        echo "<td> That username does not exist.. </td>";
    }
?>