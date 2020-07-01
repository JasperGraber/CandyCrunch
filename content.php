<?php
    // Navigeren via content. 
    if (isset($_GET["content"])) {
        include("./" . $_GET["content"] . ".php");
    } else {
        // Als standaard home.php. 
        include("./home.php");
    }
?>