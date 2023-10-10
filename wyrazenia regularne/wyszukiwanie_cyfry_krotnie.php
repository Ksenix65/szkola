<?php
$wzorzec = '/\d{5}/';
$tekst = "numer: 123456789";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono cyfre";
else
    echo "nie znaleziono cyfry";
?>