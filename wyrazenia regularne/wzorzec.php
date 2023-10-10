<?php
$wzorzec = '/byc/';
$tekst = "byc albo nie byc";
if( preg_match( $wzorzec, $tekst))
    echo "znaleziono wrzozec <br>";
else
    echo "nie znaleziono wzorca";
echo "znaleziono: " .preg_match_all( $wzorzec, $tekst);
?>