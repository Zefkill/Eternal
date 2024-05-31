<?php
session_start();

// Dummy login gegevens voor testdoeleinden
$_SESSION["loggedIn"] = true;
$_SESSION["sessionId"] = 84;
$_SESSION["userName"] = "Sofia Jachimczak";
$_SESSION["userRole"] = "Beheer";

// Database verbinding
require_once ("dbconnect.php");

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["userRole"] != "Beheer") {
    echo "U bent niet ingelogd";
    header("refresh:3;url=index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voeg category toe</title>
    <link rel="stylesheet" href="company.css">
</head>

<body>
    <header>
        <h1>Welkom bij de Bread Company</h1>
        <?php include "nav.php"; ?>
    </header>

    <?php
    echo "<br>" . "Welkom " . $_SESSION["userName"];
    ?>

    <h2> land toevoegen</h2>
    <form action="add-country02.php" method="post">
        <label for="idcountry">idcountry</label>
        <input type="number" name="idcountry" id="idcountry" required><br><br>

        <label for="name">naam:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="code">code:</label>
        <input type="text" id="code" name="code" required><br><br>

        <input type="submit" name="submitcountry" value="Toevoegen">
    </form>

</body>

</html>