<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inloggen</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
    <?php
    session_start();
    include "nav.php";
    ?>

    <div class="loginterface">
        <form action="login_process.php" method="post">

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>

            <div class="form-group">
                <label for="password">wachtwoord</label>
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>

            <div class="form-btn">
                <input type="submit" name="login" value="inloggen" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>

</html>