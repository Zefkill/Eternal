<?php
include("dbconnect.php");

if(isset($_POST["add-admin01"])) {


    $email = $_POST["email"];
    
    
    

try{
    // als je admin wil verweideren is het enigste wat je hoeft te doen van deze 1 een 0 te maken
$query = "UPDATE client SET isadmin = 1 WHERE email = :email";
$query_run = $db_connection->prepare($query);
$adminemail=[
':email' => $email


];
$query_execute = $query_run->execute($adminemail);

if($query_execute){
echo "admin Toegevoegd!";
header("location: ./add-admin01.php");
exit(0); 
}else { 
    echo "het is niet gelukt!";
    header("location: ./add-admin01.php");
    exit(1);
}

} catch (PDOException $e){
    echo $e->getMessage();
} 
}
?>