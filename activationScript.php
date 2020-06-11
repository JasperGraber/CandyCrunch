<?php
// Controle tegen hackers.
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))) {
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
<input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">

<?php
// Connectie en functies toevoegen.
include("./connectDB.php");
include("./functions.php");

// Arrays schoonmaken.
$id = sanitize($_GET["id"]);
$pwh = sanitize($_GET["pwh"]);

$sql = "SELECT * FROM `customer_information` WHERE `customer_id` = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    $record = mysqli_fetch_assoc($result);

    if ($record["active"]) {
        // Al actief
        header("Location: ./index.php?content=login");
    } else {

        $sql = "UPDATE  `customer_information` 
                                    SET     `active` = 1
                                    WHERE   `customer_id` = $id
                                    AND     `password` = '$pwh'";

        if (mysqli_query($conn, $sql)) {
            // Naar login pagina 
            header("Location: ./index.php?content=login");
        } else {
            // Error
            header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
        }
    }
}
