<?php
$filename = 'C:\Users\5INA gr1\Desktop\Aplikacje\projekty\operacje plikowe\boo.txt';

if (file_exists($filename)){
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exists";
}
?>