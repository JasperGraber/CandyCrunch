<?php
    // Define gegevens van database.
    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASENAME", "candycrunch");

    // Verbinding maken met de database.
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
?>