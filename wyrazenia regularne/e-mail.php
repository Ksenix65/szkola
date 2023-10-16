<?php
$wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]+/';
$tekst = "example@gmal.com";
if( preg_match( $wzorzec, $tekst, $matches))
    echo "znaleziono mail " .$matches[0];
else
    echo "nie znaleziono mail";

    // [-\w.] myslnik dowolny znak kropka
    // + jedno lub wiecej wystapien
    // @ znak uzywany w adresach
    // [-A-z0-9] jedna litera lub cyfra
    // [-A-z0-9]+ pasuje do przynajmniej jednego wystapienia litery cyfry lub myslnika
    // \. oznacza kropke
    // ()+ odpowiada przynajmniej jednemu wystapieniu wzroca (umiesczone w nawiasie)
?>