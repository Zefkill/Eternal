<?php
session_start();
include("dbconnect.php");

if (isset($_POST['login'])) { // Assuming your form button is named 'login'

    $email = $_POST['email'];
    $password = $_POST['password'];



    try {
        $query = "SELECT id, first_name, last_name, email, role, password FROM client WHERE email = :email";
        $query_run = $db->prepare($query);

        $client_info = [
            ":email" => $email

        ];

        $query_execute = $query_run->execute($client_info);
        $user = $query_run->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['loggedIn'] = true;
                $_SESSION['message'] = 'Welkom ' . $user['first_name'] . ' ' . $user['last_name'] . ', u bent ingelogd';
                if ($user['role'] == '1') {
                    $_SESSION['userRole'] = "Beheer";
                } else {
                    $_SESSION['userRole'] = "Klant";
                }
                
                
                echo "Naam:" .$_SESSION['email'];
                
                // header("Location: index.php");
                exit(0);
            } else {
                echo 'Ongeldig wachtwoord';
            }
        } else {
            $_SESSION['message'] = 'Gebruiker niet gevonden.';
            header("Location: login.php");
            exit(1);
        }
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        $_SESSION['message'] = "Database error: " . $e->getMessage();
       // header("Location: login.php");
        exit(1);
    }
}
?>