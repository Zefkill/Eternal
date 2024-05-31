<?php  
if (isset($_SESSION["benJeErAl"])&&
$_SESSION["benJeErAl"] == true )
{
    if($_SESSION["soortToegang"]=="Beheer")
    {
        include "nav-admin.html";
    }
    elseif ($_SESSION["soortToegang"]=="Klant")
    {
        include "nav-client.html";
    }
} else
{
    include "nav.html";
}
?>