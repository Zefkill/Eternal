<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "eternal";
try 
{ 
    $db_connection = new PDO("mysql:host=$server; dbname=$db", $username, $password); 
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{ 
    $sMsg = '<p> 
            Regelnummer: '.$e->getLine().'<br /> 
            Bestand: '.$e->getFile().'<br /> 
            Foutmelding: '.$e->getMessage().' 
        </p>'; 
     
    trigger_error($sMsg); 
} 
?> 