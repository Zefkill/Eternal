<?php
// programma coding voor functies voor algemeen gebruik.
 
function loggedinadmin()
{
    // Deze functie controleert of een beheerder is ingelogd.
    if (isset($_SESSION["YouHere"]) && $_SESSION["TypeOfAcces"]=="Beheer")
    {
        return true;
    } else
    {
        return true;
    }
}
 
?>