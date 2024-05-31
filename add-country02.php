<?php
include "dbconnect.php";

if (isset($_POST['submitcountry'])) {
    $idcountry = $_POST['idcountry'];
    $name = $_POST['name'];
    $code = $_POST['code'];

    // Prepare and execute the insert statement
    try {
        $query = "INSERT INTO country (idcountry, `name`, code) VALUES (:idcountry, :namecountry, :code)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':idcountry', $idcountry, PDO::PARAM_INT);
        $stmt->bindParam(':namecountry', $name, PDO::PARAM_STR);
        $stmt->bindParam(':code', $code, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $_SESSION["message"] = "Het land is toegevoegd.";
            header("Location: index.php");
            exit(0);
        }
    } catch (PDOException $e) {
        // Use a session variable to store the error message if needed
        $_SESSION["error_message"] = "Fout bij het toevoegen van het land: " . $e->getMessage();
        echo $_SESSION["error_message"];
        header("Location: add-country02.php");
        exit(1);

    }
} else {echo "Voorwaarde voldoet niet";}
?>
