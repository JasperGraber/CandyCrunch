<?php
// $_SESSION array leegmaken.
unset($_SESSION["email"]);

// session bestand verwijderen.
session_destroy();

// Terug naar home pagina.
header("Location: ./index.php?content=home");
?>