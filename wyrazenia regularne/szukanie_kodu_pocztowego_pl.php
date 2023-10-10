<?php
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "poczta 34-200 Sucha Beskidzka";
if( preg_match( $wzorzec, $tekst, $matches))
    echo "znaleziono obrazek <br>";
else
    echo "nie znaleziono obrazka";
?>