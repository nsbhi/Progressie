<?php

echo "Hoeveel stapels wil je hebben" . PHP_EOL;
$a = readline("");
$ster = "*";
$x = 0;

while ($x <= $a) {
    echo $ster . PHP_EOL;
    $ster .= '*';
    $x++;
}

?>