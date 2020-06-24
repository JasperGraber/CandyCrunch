<?php
if (empty($_POST["email"]) || empty($_POST["zipcode"]) || empty($_POST["address"])) {
    header("Location: ./index.php?content=message&alert=empty-info");
} else {
    // Verbinding maken met de database.
    include("./connectDB.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $zipcode = sanitize($_POST["zipcode"]);
    $address = sanitize($_POST["address"]);
    $id = $_SESSION["id"];

    $sql = "SELECT * FROM `customer_information` WHERE `customer_id` = $id";

    if (mysqli_query($conn, $sql)) {
        $sql = "UPDATE  `customer_information` 
            SET     `zipcode` = '" . $zipcode . "', `address` = '" . $address . "', `email` = '" . $email . "'
            WHERE   `customer_id` = $id";      
        if (mysqli_query($conn, $sql)) {
            header("Location: ./index.php?content=message&alert=change-info");
        } else {
            header("Location: ./index.php?content=message&alert=error-info");
        }
    }
}
