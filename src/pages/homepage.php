<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:sign_in_page.php");
}

if (!$_SESSION['profilebool']) {
    header("Location:profile_gen.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <!-- ajax JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="../images/img_avatar2.png" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="user/profile.php">My Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="user/watch_list.php">Watch List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="user/fav_list.php">Favorites List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../include_files/log_out.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="heading">HOMEPAGE. Welcome <?php echo $_SESSION['username']; ?></h1>

    <div>
        <!-- Error text boxes -->
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php } ?>

        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo htmlspecialchars($_GET['succ']); ?>
            </div>
        <?php } ?>
    </div>

    <div class="plat-select container">

        <select class="form-select form-select-lg mb-3" id="genre" name="genre">
            <option value='' selected>Genre</option>
            <option value='1'>Action</option>
            <option value='2'>Adventure</option>
            <option value='3'>Animation</option>
            <option value='4'>Comedy</option>
            <option value='5'>Crime</option>
            <option value='6'>Documentary</option>
            <option value='7'>Drama</option>
            <option value='8'>Family</option>
            <option value='9'>Fantasy</option>
            <option value='10'>History</option>
            <option value='11'>Horror</option>
            <option value='12'>Music</option>
            <option value='13'>Mystery</option>
            <option value='14'>Romance</option>
            <option value='15'>Science Fiction</option>
            <option value='17'>Thriller</option>
            <option value='18'>War</option>
            <option value='19'>Western</option>
        </select>
        <select class="form-select form-select-lg mb-3" id="platform" name="platform">
            <option value='' selected>Streaming Service</option>
            <option value='203'>Netflix</option>
            <option value='157'>Hulu</option>
            <option value='26'>Amazon Prime Video</option>
            <option value='387'>HBO Max</option>
            <option value='372'>Disney Plus</option>
            <option value='232'>STARZ</option>
            <option value='444'>Paramount Plus</option>
            <option value='389'>Peacock</option>
            <option value='371'>Apple Tv Plus</option>
        </select>

        <button id="submit-btn">Submit</button>
    </div>

    <div id="movies">

    </div>

    <script src="../include_files/script.js"></script>
    <script>
        $(document).ready(function() {
            $('#submit-btn').click(function() {
                $('#movies').html("loading..");
                if (
                    ($('#genre').val() != "") &&
                    ($('#platform').val() != '')
                ) {
                    $.post('watchmode_test.php', // url
                        {
                            genre: $('#genre').val(),
                            platform: $('#platform').val()
                        }, // data to be submit
                        function(data, status, jqXHR) { // success callback
                            $('#movies').html(data);
                        }
                    )
                }
            })

        });
    </script>

</body>

</html>