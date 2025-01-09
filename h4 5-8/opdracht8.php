<?php
$jaar = 16;
$true = true;
$false = false;

if($jaar >= 16){
    echo"Je mag praktijkexamen doen voor je scooterrijbewijs doen. <br>";
}else if($jaar >= 18){
    echo"Je Mag stemmen";
}else if($jaar == 16){
    echo"Het is niet toegestaan om te stemmen, zelfs al ben je 18 of ouder.<br>";
}

echo"heb je stemkaart al ontvangen? = {$false}";