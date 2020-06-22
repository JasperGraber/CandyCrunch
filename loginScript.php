<?php
// Connectie en functies toevoegen.
include("./connectDB.php");
include("./functions.php");

// Arrays schoonmaken.
$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

if (empty($email) || empty($password)) {
    // check of de velden zijn ingevuld.
    header("Location: ./index.php?content=message&alert=loginform-empty");
} else {
    // Check of het emailadres bestaat.
    $sql = "SELECT * FROM `customer_information` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!mysqli_num_rows($result)) {
        // Email onbekend.
        header("Location: ./index.php?content=message&alert=email-unkown");
    } else {
        // Email bekend.
        $record = mysqli_fetch_assoc($result);

        if (!$record["active"]) {
            // Email niet actief.
            header("Location: ./index.php?content=message&alert=not-activated&email=$email");
        } elseif (!password_verify($password, $record["password"])) {
            // Email wel actief, geen password match.
            header("Location: ./index.php?content=message&alert=no-pw-match");
        } else {
            // Email wel actief, password match.
            $_SESSION["id"] = $record["customer_id"];
            $_SESSION["userrole"] = $record["userrole"];
            $_SESSION["email"] = $record["email"];
            $_SESSION["firstname"] = $record["firstname"];
            $_SESSION["infix"] = $record["infix"];
            $_SESSION["lastname"] = $record["lastname"];
            $_SESSION["bmi"] = $record["bmi"];
            $_SESSION["age"] = $record["age"];
            $_SESSION["height"] = $record["height"];
            $_SESSION["weight"] = $record["weight"];

            switch ($record["userrole"]) {
                case 'user':
                    header("Location: ./index.php?content=user/u-home");
                    break;
                default:
                    header("Location: ./index.php?content=home");
                    break;
            }
        }
    }
}
