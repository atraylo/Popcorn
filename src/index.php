<!DOCTYPE html>

<head>
    <title>Welcome to Popcorn!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <style>
        body {
            background-color: rgb(255, 200, 40);
        }
        
        .navbar .main a {
            color: #ffc828;
        }

        .main {
            width: 1200px;
            margin: 0 auto;
        }

        .navbar .main {
            display: flex;
            padding: 15px 0;
        }

        .navbar .main a {
            font-size: 22px;
        }

        .container-fluid {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .d-flex form button {
            margin-left: 10px;
            border-radius: 15px;
            border: 2px solid #ffc828;
            background-color: #ffc828;
            color: #fff;
            padding: 0 10px;
        }

        .d-flex form:nth-child(2) button {
            background-color: transparent;
            color: #ffc828;
        }

        .main img {
            width: 100%;
            border-radius: 20px;
            margin: 20px 0 0;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, .8);
            border-radius: 15px;
            text-align: center;
        }

        .w3-center {
            color: #fff;
        }

        .container h4 {
            color: rgba(255, 255, 255, .6);
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar / Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="main">
            <div class="container-fluid">
                <a id="Popcorn!" href="#">POPCORN</a>
                <div class="d-flex align-items-center">
                    <form action="pages/sign_in_page.php">
                        <button id="sign_in">Sign in</button>
                    </form>
                    <form action="pages/create_account.php">
                        <button id="create_acc">Create an Account!</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation Bar / Header -->

    <div class="main container">
        <h1 class="w3-center">Welcome to Popcorn!</h1>
        <h4>
            Popcorn is a website that allows you to keep track of movies you either want to or
            have already watched across many popular streaming services such as HBO max, Disney+
            and Netflix! If you are already familiar with our site, just click the sign in button.
            Otherwise, create an acccount and get started! Both buttons are in the top right corner
            of this page.
        </h4>
    </div>

    <div class="main">
        <img id="logo" src="images/movie.jpg">
    </div>

</body>

</html>