<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy login beheer</title>
</head>
<body>
    <?php
      require_once("..\\dbconnect.php");
      session_start();
      $_SESSION["YouHere"] = true;
      $_SESSION["WhatNumberIsThis"] = 108;
      $_SESSION["WhoAreYou"] = "Egan Bernette";
      $_SESSION["TypeOfAcces"] = "Beheer"
    ?>
</body>
</html>