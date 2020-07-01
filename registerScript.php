<?php
// Check of er een emailadres is ingevuld.
if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} else {
    // Maak contact met de database.
    include("./connectDB.php");
    include("./functions.php");

    // Array schoonmaken.
    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    // Kijken of email al bestaat.
    $sql = "SELECT * FROM `customer_information` WHERE `email` = '{$email}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
    } else {
        // Password hash maken.
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Database query.
        $sql = "INSERT INTO `customer_information` (`customer_id`, `firstname`, `infix`, `lastname`, `email`, `password`, `address`, `zipcode`, `bmi`, `active`, `userrole`) VALUES (NULL, '{$firstname}', '{$infix}', '{$lastname}', '{$email}', '{$password_hash}', NULL, NULL, NULL, 0, 'user')";
        mysqli_query($conn, $sql);

        // Registratie mail versturen.
        $id = mysqli_insert_id($conn);
        $to = $email;
        $name = $firstname . ' ' . $infix . ' ' . $lastname;
        $subject = "Activatiemail Candy Crunch";
        $message = '<!doctype html>
        <html lang="en">
        <head>
            <style>
            body {
                background-color:
            }

            .box {
                background-color: #ffcccd;
                border: 3px solid #ff5758;
                text-align: center;
            }

            .title{
                    margin-top: 100px;
                    font-family: bukhari script, calibri, sans-serif;
                    font-weight: normal;
                    font-size: 40px;
                    color: white;
                    text-shadow: -2px -2px 0 #ff5758, 2px -2px 0 #ff5758, 2px 2px 0 #ff5758, -2px 2px 0 #ff5758;
            }

            p {
                font-family: roundo, calibri, sans-serif;
                color: #ff5758;
                font-weight: bold;
            }

            a {
                font-family: roundo, calibri, sans-serif;
                color: #ff5758;
                font-weight: bold;
            }

            a:hover {
                color: #ffcccd;
            }
            </style>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Document</title>
        </head>
        <body>
        <div class="box">
                <h1 class="title">Candy Crunch</h1>

                <p>Beste '. $name . ',</p>
                <p>Bedankt voor het registreren.</p>

                <a href="http://www.candycrunch.nl/index.php?content=activationScript&id=' . $id . '&pwh=' . $password_hash . '">Activeer uw account</a>
        </div>
        </body>';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8\r\n";
        $headers .= "From: no-replyn@candycrunch.nl\r\n";

        mail($to, $subject, $message, $headers);

        // Naar login pagina 
        header("Location: ./index.php?content=home");
    }
}
