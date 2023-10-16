<?php
$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst = "www.google.com";
if( preg_match( $wzorzec, $tekst, $matches))
    echo "znaleziono strone " .$matches[0];
else
    echo "nie znaleziono strony";

    // \bhttp adres moze zaczynac sie od http
    // s? moze byc w wersji https, dlatego opckonalne (s?)
    // : zykly znak
    // \/\/ po frazie http wystepuja 2 ukosniki // ale ukosnik oznacza koniec wyrazenia regularnego aby zapisac ukosnik we wzorcu nalezy poprzedzic go znakiem \
    // ()|() kreska pionowa oznacza, ze moze wystapic jedno za wyrazen umieszczonych miedzy nawiasami
    // \bwww adres moze zaczynac sie od www
    // /. po www wystepuje kropka
    // \S* dowolna liczba znakow roznych od odstepu
 
?>