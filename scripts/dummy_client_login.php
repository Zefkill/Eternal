<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy login klant</title>
</head>
<body>
    <?php
      require_once("..\\dbconnect.php");
      session_start();
      $_SESSION["YouHere"] = true;
      $_SESSION["WhatNumberIsThis"] = 84;
      $_SESSION["WhoAreYou"] = "Sofia Jachimczak";
      $_SESSION["TypeOfAcces"] = "Klant"
    ?>
</body>
</html>