<?php

if (isset($argv[1])) {
    $prijs = intval($argv[1]);

    if ($prijs < 1) {
        echo "geen wisselgeld" . PHP_EOL;
    } else {
        $wisselgeld = wisselgeld($prijs);
        echo "€$prijs x 1 euro" . PHP_EOL;
    }
} else {
    echo "geen wisselgeld" . PHP_EOL;
}


function wisselgeld($prijs)
{
    $munt = floor($prijs);
    return $munt;
}

?>