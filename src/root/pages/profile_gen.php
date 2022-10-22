<!DOCTYPE html>
<html>

<head>
    <title>Select your preferred generes!</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>


<body>

    <script type="text/javascript">
        $(document).ready(function () {

            $("input[type=checkbox]").change(function() {
            checked = $("input[type=checkbox]:checked").length;
            
            if(checked => 3){
                $('#subBtn').prop("disabled", false);
            }
            if(checked < 3){
                $('#subBtn').prop("disabled", true);
            }

            });
        });
    </script>

    <h1>What kinds of movies do you like?</h1>
    <h2>Select at least 3 of your favorite genres of movies to watch</h2>
    <form action="main_page.php">
        <input type="checkbox" id="Action" name="Action" value="Action">
        <label for="Action"> Action</label><br>

        <input type="checkbox" id="Adventure" name="Adventure" value="Adventure">
        <label for="Adventure"> Adventure</label><br>

        <input type="checkbox" id="Animation" name="Animation" value="Animation">
        <label for="Animation">Animation</label><br>

        <input type="checkbox" id="Biography" name="Biography" value="Biography">
        <label for="Biography">Biography</label><br>

        <input type="checkbox" id="Comedy" name="Comedy" value="Comedy">
        <label for="Comedy">Comedy</label><br>

        <input type="checkbox" id="Crime" name="Crime" value="Crime">
        <label for="Crime">Crime</label><br>

        <input type="checkbox" id="Documentary" name="Documentary" value="Documentary">
        <label for="Documentary">Documentary</label><br>

        <input type="checkbox" id="Drama" name="Drama" value="Drama">
        <label for="Drama">Drama</label><br>

        <input type="checkbox" id="Family" name="Family" value="Family">
        <label for="Family">Family</label><br>

        <input type="checkbox" id="Fantasy" name="Fantasy" value="Fantasy">
        <label for="Fantasy">Fantasy</label><br>
        
        <input type="checkbox" id="Film-Noir" name="Film-Noir" value="Film-Noir">
        <label for="Film-Noir">Film-Noir</label><br>

        <input type="checkbox" id="History" name="History" value="History">
        <label for="History">History</label><br>

        <input type="checkbox" id="Horror" name="Horror" value="Horror">
        <label for="Horror">Horror</label><br>

        <input type="checkbox" id="Music" name="Music" value="Music">
        <label for="Music">Music</label><br>

        <input type="checkbox" id="Musical" name="Musical" value="Musical">
        <label for="Musical">Musical</label><br>

        <input type="checkbox" id="Mystery" name="Mystery" value="Mystery">
        <label for="Mystery">Mystery</label><br>

        <input type="checkbox" id="Romance" name="Romance" value="Romance">
        <label for="Romance">Romance</label><br>

        <input type="checkbox" id="Sci-Fi" name="Sci-Fi" value="Sci-Fi">
        <label for="Sci-Fi">Sci-Fi</label><br>

        <input type="checkbox" id="Sport" name="Sport" value="Sport">
        <label for="Sport">Sport</label><br>

        <input type="checkbox" id="Thriller" name="Thriller" value="Thriller">
        <label for="Thriller">Thriller</label><br>

        <input type="checkbox" id="War" name="War" value="War">
        <label for="War">War</label><br>

        <input type="checkbox" id="Western" name="Western" value="Western">
        <label for="Western">Western</label><br>

        <input type="submit" id = "subBtn" value="Submit" disabled= "true">

    </form>
</body>
</html>