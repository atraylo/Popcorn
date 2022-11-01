<!DOCTYPE html>
<html>

<head>
    <title>Select your preferred generes!</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
</head>


<body>

    <h1>What kinds of movies do you like?</h1>
    <h2>Select at least 3 of your favorite genres of movies to watch</h2>
    <form action="../include_files/profile_ins.php">
        <input type="checkbox" id="checkbox" name="Action" value="Action">
        <label for="Action"> Action</label><br>

        <input type="checkbox" id="checkbox" name="Adventure" value="Adventure">
        <label for="Adventure"> Adventure</label><br>

        <input type="checkbox" id="checkbox" name="Animation" value="Animation">
        <label for="Animation">Animation</label><br>

        <input type="checkbox" id="checkbox" name="Biography" value="Biography">
        <label for="Biography">Biography</label><br>

        <input type="checkbox" id="checkbox" name="Comedy" value="Comedy">
        <label for="Comedy">Comedy</label><br>

        <input type="checkbox" id="checkbox" name="Crime" value="Crime">
        <label for="Crime">Crime</label><br>

        <input type="checkbox" id="checkbox" name="Documentary" value="Documentary">
        <label for="Documentary">Documentary</label><br>

        <input type="checkbox" id="checkbox" name="Drama" value="Drama">
        <label for="Drama">Drama</label><br>

        <input type="checkbox" id="checkbox" name="Family" value="Family">
        <label for="Family">Family</label><br>

        <input type="checkbox" id="checkbox" name="Fantasy" value="Fantasy">
        <label for="Fantasy">Fantasy</label><br>

        <input type="checkbox" id="checkbox" name="Film-Noir" value="Film-Noir">
        <label for="Film-Noir">Film-Noir</label><br>

        <input type="checkbox" id="checkbox" name="History" value="History">
        <label for="History">History</label><br>

        <input type="checkbox" id="checkbox" name="Horror" value="Horror">
        <label for="Horror">Horror</label><br>

        <input type="checkbox" id="checkbox" name="Music" value="Music">
        <label for="Music">Music</label><br>

        <input type="checkbox" id="checkbox" name="Musical" value="Musical">
        <label for="Musical">Musical</label><br>

        <input type="checkbox" id="checkbox" name="Mystery" value="Mystery">
        <label for="Mystery">Mystery</label><br>

        <input type="checkbox" id="checkbox" name="Romance" value="Romance">
        <label for="Romance">Romance</label><br>

        <input type="checkbox" id="checkbox" name="Sci-Fi" value="Sci-Fi">
        <label for="Sci-Fi">Sci-Fi</label><br>

        <input type="checkbox" id="checkbox" name="Sport" value="Sport">
        <label for="Sport">Sport</label><br>

        <input type="checkbox" id="checkbox" name="Thriller" value="Thriller">
        <label for="Thriller">Thriller</label><br>

        <input type="checkbox" id="checkbox" name="War" value="War">
        <label for="War">War</label><br>

        <input type="checkbox" id="checkbox" name="Western" value="Western">
        <label for="Western">Western</label><br>

        <input type="submit" id="subBtn" value="Submit" disabled="true">
    </form>

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