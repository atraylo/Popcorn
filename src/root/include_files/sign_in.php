<?php
    require("DBConn.php");

    if(isset($_POST['user']) && isset($_POST['pwd'])){
            
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

                #Uncomment line below when used on actual site and comment line with header after.
                header("Location:https://pop-corn.azurewebsites.net/pages/main_page.php");

                #Uncomment line below when using XAMPP during development
                #header("Location:http://localhost/root/pages/main_page.php");
            } else {
                echo "<td> Your passsword is incorrect.. </td>";
            }
        } else {
            echo "<td> That username does not exist.. </td>";
        }
    }
?>