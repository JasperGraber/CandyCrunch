<?php
    // Verbinding maken met de database.
    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASENAME", "candycrunch");

    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
?>