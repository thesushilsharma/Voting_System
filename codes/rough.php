<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.php');
}

?>
    <!doctype html>
    <html>

    <head>
        <title>SRC</title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script>
            var limit = 2;
            $(document).ready(function() {
                $('input[type=checkbox]').on('change', function(evt) {
                    if ($("input[name='gm']:checked").length > limit) {
                        this.checked = false;
                        alert("allowed only 2");
                    }
                });   
            });
        </script>
    </head>

    <body>
        <h1>Voting Page</h1>
        <form method='post' action="">
        <li style="float:right">
             <input type="submit" value="Logout" name="logout">
             </li>
        </form>
        <form action="/action_page.php">
            <fieldset>
                <legend>Choose a Slate:</legend>
                <input type="radio" id="Slate1" name="slate" value="Slate1">
                <label for="Slate1"> Slate 1</label>
                <br>
                <input type="radio" id="Slate2" name="slate" value="Slate2">
                <label for="Slate2"> Slate 2</label>
                <br>
                <input type="radio" id="Slate3" name="slate" value="Slate3">
                <label for="Slate3"> Slate 3</label>
                <br>
            </fieldset>
            <fieldset>
                <legend>Choose a General Member:</legend>
                <input type="checkbox" id="Candidate1" name="gm" value="Candidate1">
                <label for="Candidate1"> Name 1</label>
                <br>
                <input type="checkbox" id="Candidate2" name="gm" value="Candidate2">
                <label for="Candidate2"> Name 2</label>
                <br>
                <input type="checkbox" id="Candidate3" name="gm" value="Candidate3">
                <label for="Candidate3"> Name 3</label>
                <br>
                <input type="checkbox" id="Candidate4" name="gm" value="Candidate4">
                <label for="Candidate4"> Name 4</label>
                <br>
            </fieldset>
            <fieldset>
                <legend>Choose a General Member:</legend>
                <span>Choose a Sports Representative</span>
                <br>
                <input type="radio" id="sports1" name="sports" value="sports1">
                <label for="sports1"> Candidate 1</label>
                <br>
                <input type="radio" id="sports2" name="sports" value="sports2">
                <label for="sports2"> candidate 2</label>
                <br>
                <input type="radio" id="sports3" name="sports" value="sports3">
                <label for="sports2"> Candidate 3</label>
                <br>
            </fieldset>
            <br>
        </form>
        <input type="submit" value="Submit">

        
    </body>

    </html>