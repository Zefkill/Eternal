<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen product</title>
</head>
<body>
    <?php
        session_start();
        include("functions-all.php");
        require_once("dbconnect.php");
        if (!loggedinadmin())
        {
            header("Refresh: 3, url=index.php");
            echo "<h1>FOUT</h1>";
            echo "<p>Je hoort hier niet zo te komen!</p>";
            exit;
        }
 
        // ophalen van alle brouwers
        $qrybrewers = $dbconn->prepare("select * from brouwer");
        $qrybrewers->execute();
        $allbrewers = $qrybrewers->fetchAll(PDO::FETCH_ASSOC);
 
    ?>
    <form action="add-beer02.php" method="POST">
        <label for="naam">Biernaam</label>
        <input type="text" name="naam" required><br>
        <label for="soort">Biersoort</label>
        <input type="text" name="soort" required><br>
        <label for="stijl">Bierstijl</label>
        <input type="text" name="stijl" required><br>
        <label for="alcohol">Percentage</label>
        <input type="number" name="alcohol" required
                min=0 max=30 step=0.01><br>
        <label for="brouwer">Brouwer</label>
        <select name="brouwer" required>
            <?php
            $startOpt = "<option value=";
            $endOpt = "</option>";
            foreach ($allbrewers as $singleBrewer)
            {
                echo $startOpt . $singleBrewer["brouwcode"] . ">" .
                        $singleBrewer["naam"] .
                        "&nbsp;&nbsp;&nbsp;&nbsp;" .
                        $singleBrewer["land"] . $endOpt;
            }
            ?>
        </select><br>
        <input type="submit" value="Annuleer" name="annul-addbeer01">
        <input type="submit" value="Sla op" name="proces-addbeer01">
    </form>
</body>
</html>