<?php 

include("login_admin.php");
include("dbconnect.php");
if(isset($_POST["add_product"])){
$name = $_POST["name"];
$ingredients = $_POST["ingredients"];
$allergens = $_POST["allergens"];
$price = $_POST["price"];
$categoryid = $_POST["categoryid"];
$supplierid = $_POST["supplierid"];

try{
$query= "INSERT INTO product (prodcutname, ingredients, allergens, price, categoryid, supplierid) VALUES (:prodcutname, :ingredients, :allergens, :price, :categoryid, :supplierid) ";
$query_run = $db_connection->prepare($query);

$producten = [
    ":name"=>$name,
    ":ingredients"=>$ingredients,
    ":allergens"=>$allergens,
    ":price"=>$price,
    ":categoryid"=>$categoryid,
    ":supplierid"=>$supplierid
    
];
$query_execute = $query_run->execute($producten);
}
catch(PDOException $e){
    echo $e->getMessage();
}

}


?>;