<?php
$wzorzec = '/\S*\.gif/i';
$tekst = "w pliku obrazek.gif jest ikona";
if( preg_match( $wzorzec, $tekst))
    echo "znaleziono obrazek <br>";
else
    echo "nie znaleziono obrazka";
?>