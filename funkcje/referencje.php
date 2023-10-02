<?php
function add_some_extra(&$string){
    $string .= 'add something extra,';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;
?>