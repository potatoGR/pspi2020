<!doctype html>
<?php
require("config.php");
require("gen_elements.php");
session_start();
if (isset($_COOKIE["ActionCallUser"]) && isset($_COOKIE["ActionCallUserEmail"]) && isset($_COOKIE["ActionCallUserState"]))
{
    $_SESSION["loggedin"] = true;
    $_SESSION["email"] = $_COOKIE["ActionCallUserEmail"];
    $_SESSION["username"] = $_COOKIE["ActionCallUser"];
}
/*if (!isset($_SESSION["username"]))
{
    header("Location: index.php");
}*/
?>
<html>
  <head>
    <script src="js/gen_elements.js"></script>
    <script>header_gen();</script>
    <title>ActionCall - Create Post</title>
    <script type="text/javascript" src="../jquery-1.7.2.min.js"></script>
  </head>

    <body>
    <script>navbar_gen();</script>
        <div class="container content">
            <div class="container">
                <h1>Κάντε μία ανάρτηση</h1>
            </div>
            <div class="container" >
                <form class="needs-validation">
                    <div class="form-group">
                        <label for="name">Πόλη/Μέρος</label>
                        <input type="text"  class="form-control" id="exampleName" placeholder="Θεσσαλονίκη" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Ημερομηνία</label>
                        <input type="date" class="form-control" id="eventDate" required>
                        <label for="hour">Ώρα</label>
                        <input type="time" class="form-control" id="eventTime" min="1:00" max ="24:00" required>
                        <label for="repeat">Επαναλαμβανόμενο</label>
                        <input type="checkbox" id="rep" name="repeated_event" value="isRepeated">
                    </div>
                
                    <div class="form-group">
                        <label for="inputText">Περιεχόμενο</label>
                        <textarea id="editor" class="form-control" placeholder="Συμπληρώστε το μήνυμα σας εδώ..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary center-block">Αποστολή</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <script>footer_gen();</script>
        <!-- ./Footer -->
    </body>
</html>