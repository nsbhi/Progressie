<?php

echo 'Hoeveel stapels wil je hebben? ';
$stapel = intval(readline());

for ($i = 1; $i <= $stapel; $i++) {
    for ($k = 0; $k < $i; $k++) { 
        echo "*";
    }
    echo PHP_EOL;
}

?>