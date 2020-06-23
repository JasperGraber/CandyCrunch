<?php
    // Verbinding maken met de database.
    define("SERVERNAME", "localhost:3308");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASENAME", "candycrunch");

    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
?>