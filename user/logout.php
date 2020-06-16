<?php
// $_SESSION array leegmaken.
unset($_SESSION["email"]);

// session bestand verwijderen.
session_destroy();

header("Location: ./index.php?content=home");
?>