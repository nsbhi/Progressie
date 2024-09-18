<?php

$x = 1;

while ($x <= 50) {
    $y = 1;
    while ($y <= $x) {
        echo"*";
        $y++;      
    }
    echo PHP_EOL;
    $x++;
}

?>