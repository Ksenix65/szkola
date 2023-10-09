<?php
$_COOKIE_name = "user";
$_COOKIE_value = "John Doe";
setcookie($_COOKIE_name, $_COOKIE_value, time() + (24*60*60));

if (!isset($_COOKIE[$_COOKIE_name])){
    echo "Cookie named '" . $_COOKIE_name . "'is not set!";
} else {
    echo "Cookie named '" . $_COOKIE_name . "'is set!<br>";
    echo " Value is: " . $_COOKIE[$_COOKIE_name];
}
?>