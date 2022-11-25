<?php
# Check if user isnt logged in or hasnt done profile_gen

session_start();
if (!isset($_SESSION['username'])) {
    header("Location:sign_in_page.php");
}

if ($_SESSION['profilebool']) {
    header("Location:homepage.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Select your preferred generes!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../css/profile_gen.css" rel="stylesheet">

</head>


<body>
    <h2>What kinds of movies do you like?</h2>
    <h3>Select at least 3 of your favorite genres of movies to watch.</h3>

    <div class="checkcon d-flex
            justify-content-center
            align-items-center
            flex-column">

        <!-- Error text box -->
        <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-warning" role="alert">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>

        <?php } ?>

        <!-- Form -->
        <form class="form-check form-check-inline" action="../include_files/profile_ins.php">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Action">
                <label class="form-check-label" for="Action"> Action</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Adventure">
                <label class="form-check-label" for="Adventure"> Adventure</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Animation">
                <label class="form-check-label" for="Animation">Animation</label><br>
            </div>

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Biography">
                <label class="form-check-label" for="Biography">Biography</label><br>
            </div> -->

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Comedy">
                <label class="form-check-label" for="Comedy">Comedy</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Crime">
                <label class="form-check-label" for="Crime">Crime</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Documentary">
                <label class="form-check-label" for="Documentary">Documentary</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Drama">
                <label class="form-check-label" for="Drama">Drama</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Family">
                <label class="form-check-label" for="Family">Family</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Fantasy">
                <label class="form-check-label" for="Fantasy">Fantasy</label><br>
            </div>

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Film-Noir">
                <label class="form-check-label" for="Film-Noir">Film-Noir</label><br>
            </div> -->

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="History">
                <label class="form-check-label" for="History">History</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Horror">
                <label class="form-check-label" for="Horror">Horror</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Music">
                <label class="form-check-label" for="Music">Music</label><br>
            </div>

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Musical">
                <label class="form-check-label" for="Musical">Musical</label><br>
            </div> -->

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Mystery">
                <label class="form-check-label" for="Mystery">Mystery</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Romance">
                <label class="form-check-label" for="Romance">Romance</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Sci-Fi">
                <label class="form-check-label" for="Sci-Fi">Sci-Fi</label><br>
            </div>

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Sport">
                <label class="form-check-label" for="Sport">Sport</label><br>
            </div> -->

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Thriller">
                <label class="form-check-label" for="Thriller">Thriller</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="War">
                <label class="form-check-label" for="War">War</label><br>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkbox" name="check[]" value="Western">
                <label class="form-check-label" for="Western">Western</label><br>
            </div>

            <input type="submit" id="subBtn" value="Submit" disabled="true">
        </form>
    </div>
    <!-- Script to check amount of checked checkboxes-->
    <script>
        $(document).ready(function() {

            $("input[type=checkbox]").change(function() {
                checked = $("input[type=checkbox]:checked").length;

                if (checked => 3) {
                    $('#subBtn').prop("disabled", false);
                }
                if (checked < 3) {
                    $('#subBtn').prop("disabled", true);
                }

            });
        });
    </script>

</body>

</html>