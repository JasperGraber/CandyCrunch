<?php
    // Functie om een array schoon te maken.
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }

    // Functie om te kijken of de gebruiker goed is ingelogd.
    function is_authorized($userrole) {
        if (!isset($_SESSION["email"])) {
            // Niet ingelogd.
            return header("Location: ./index.php?content=message&alert=auth-error");
        } elseif (!in_array($_SESSION["userrole"], $userrole)) {
            // Geen goede userrole.
            return header("Location: ./index.php?content=message&alert=auth-error-user");
        } else {
            // Wel goed ingelogd.
            return true;
        }
    }
?>
