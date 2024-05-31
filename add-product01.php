<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>producten toevoegen</title>
</head>
<body>
    <?php
    include("login_admin.php");?>
    <form action="add-product02.php" method="POST">
        <label for="name">naam product</label>
        <input type="text" id="name" name="name">
        <label for="ingredients">ingredienten</label>
        <input type="text" id="ingredients" name="ingredients">

        <label for="allergens">allergieen</label>
        <input type="text" id="allergens" name="allergens">

        <label for="price"> prijs</label>
        <input type="text" id="price" name="price">

        <label for="categoryid"> categoryid</label>
        <input type="number" id="categoryid" name="categoryid">

        <label for="supplierid"> supplierid</label>
        <input type="number" id="supplierid" name="supplierid">


        <input type="submit" name="add_product" value="voeg product toe">

    </form>
</body>
</html>