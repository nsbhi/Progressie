<?php

$array = array();
echo "Hoeveel vrienden zal ik vragen om hun droom" . PHP_EOL;
$a = readline();

if (is_numeric($a)) {
    for ($x = 1; $x <= $a; $x++) {
        echo "Wat is jouw naam?" . PHP_EOL;
        $c = readline();
        echo "Wat is jouw droom?" . PHP_EOL;
        $droom = readline();
        $array[$c] = $droom;
    }
    foreach ($array as $c => $droom) {
        echo "$c heeft dit als droom: $droom" . PHP_EOL;
    }
} else {
    echo "$a is geen geldig getal, probeer het opnieuw" . PHP_EOL;
}
