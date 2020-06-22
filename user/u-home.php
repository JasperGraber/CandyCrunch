<?php
// functies toevoegen.
include("./functions.php");

// Kijken of de gebruiker goed is ingelogd.
$userrole = ["user"];
is_authorized(["user"])
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welkom terug <?php echo $_SESSION["firstname"] . ' ' . $_SESSION["infix"] . ' ' . $_SESSION["lastname"];?>!</h1>
                </div>
            </div>
        </div>
        <div class="col-6">
            
        </div>
    </div>
</div>