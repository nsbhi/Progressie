<?php

if (isset($argv[1])) {
    $prijs = floatval($argv[1]);

    if ($prijs >= 1) {
        $wisselgeld = wisselgeld($prijs);
        echo $wisselgeld;
    } else {
        echo "geen wisselgeld" . PHP_EOL;
    }
} else {
    echo "geen wisselgeld" . PHP_EOL;
}

function wisselgeld($prijs)
{
    $munten = floor($prijs);

    $tien = floor($munten / 10);
    $munten %= 10;

    $vijf = floor($munten / 5);
    $munten %= 5;

    $twee = floor($munten / 2);
    $munten %= 2;

    $een = $munten;

    $resultaat = '';

    if ($tien > 0) {
        $resultaat .= "$tien x 10 euro" . PHP_EOL;
    }

    if ($vijf > 0) {
        $resultaat .= "$vijf x 5 euro" . PHP_EOL;
    }

    if ($twee > 0) {
        $resultaat .= "$twee x 2 euro" . PHP_EOL;
    }

    if ($een > 0) {
        $resultaat .= "$een x 1 euro" . PHP_EOL;
    }


    return $resultaat . PHP_EOL;
}

?>