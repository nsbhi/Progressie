<?php

if (isset($argv[1])) {
    $bedrag = floatval($argv[1]);

    if ($bedrag >= 0.01) {
        $bedrag = round($bedrag * 20) / 20;
        
        $wisselgeld = wisselgeld($bedrag);
        echo $wisselgeld;
    } else {
        echo "Geen wisselgeld" . PHP_EOL;
    }
} else {
    echo "Geen wisselgeld" . PHP_EOL;
}

function wisselgeld($bedrag)
{
    define('MONEY_UNITS', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1]);
 
    $centenBedrag = $bedrag * 100;

    $restbedrag = $centenBedrag;
    $resultaat = '';

    foreach (MONEY_UNITS as $geldeenheid) {
        if ($restbedrag >= $geldeenheid) {
            $aantal = floor($restbedrag / $geldeenheid);

            $restbedrag %= $geldeenheid;

            if ($geldeenheid >= 100) {
                $resultaat .= "$aantal x " . $geldeenheid / 100 . " euro" . PHP_EOL;
            } else {
                $resultaat .= "$aantal x $geldeenheid cent" . PHP_EOL;
            }
        }
    }

    return $resultaat . PHP_EOL;
}
?>
