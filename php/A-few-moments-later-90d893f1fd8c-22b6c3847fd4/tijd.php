<?php

$totale = 0;

for ($i = 1; $i < $argc; $i++) {
    $tijd = $argv[$i];

    $type = substr($tijd, -1);

    $waarde = (int)substr($tijd, 0, -1);

    switch ($type) {
        case 'd':
            $totale += $waarde * 24 * 60 * 60;
            break;
        case 'u':
            $totale += $waarde * 60 * 60;
            break;
        case 'm':
            $totale += $waarde * 60;
            break;
        case 's':
            $totale += $waarde;
            break;
        default:
            echo "Ongeldig type tijdsduur: $tijd" . PHP_EOL;
    }
}

if (empty($type)) {
    echo "Geen tijd meegegeven" . PHP_EOL;
} else {
    echo "De totale tijd is $totale seconden." . PHP_EOL;
}


?>