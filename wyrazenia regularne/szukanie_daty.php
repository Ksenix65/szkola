<?php
$wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst = "04.10.2013";
if( preg_match( $wzorzec, $tekst, $matches))
    echo "znaleziono date " .$matches[0];
else
    echo "nie znaleziono daty";
// ([0123]?\d) - dzien - pierwsza cyfra moze miec wartosc 0, 1, 2, 3 i jest opcjonalna druga cyfra jest dowolna

// ([01]?\d) - miesiac - pierwsza cyfra moze byc 0 lub 1 i jest opcjonalna druga cyfra jest dowolna

// [-\.\/] - separator - reprezentuje myslnik ukosnik odwrocony lub kropke rozdzielajaca liczby daty

// (\d{4}) - rok - dokladnie 4 cyfry roku
?>
