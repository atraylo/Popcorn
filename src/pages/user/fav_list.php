<?php
# Check if user isnt logged in or hasnt done profile_gen

session_start();
if (!isset($_SESSION['username'])) {
    header("Location:../sign_in_page.php");
}

if (!$_SESSION['profilebool']) {
    header("Location:../profile_gen.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Favorites</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <!-- CSS -->
    <link href="../../css/list.css" rel="stylesheet">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="../../images/img_avatar2.png" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="profile.php">My Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="watch_list.php">Watch List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="fav_list.php">Favorites List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../homepage.php">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../../include_files/log_out.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <h2>Favorites List</h2>

    <!-- Error text box -->
    <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-warning" role="alert">
            <?php echo htmlspecialchars($_GET['error']); ?>
        </div>

    <?php } ?>


    <div class="table-container">
        <?php
        require("../../include_files/get_fav_list.php")
        ?>
    </div>

</body>

</html>