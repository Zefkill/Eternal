<?php

 
function loggedcustomer()
{
    // Deze functie controleert of een beheerder is ingelogd.
    if (isset($_SESSION["YouHere"]) && $_SESSION["TypeOfAcces"]=="klant")
    {
        return true;
    } else
    {
        return false;
    }
}
 
?>