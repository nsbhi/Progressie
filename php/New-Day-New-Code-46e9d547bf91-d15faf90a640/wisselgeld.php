<?php

if (isset($argv[1])) {
    $bedrag = floatval($argv[1]);

    if ($bedrag >= 1) {
        $wisselgeld = wisselgeld($bedrag);
        echo $wisselgeld;
    } else {
        echo "geen wisselgeld" . PHP_EOL;
    }
} else {
    echo "geen wisselgeld" . PHP_EOL;
}

function wisselgeld($bedrag)
{
    define('MONEY_UNITS', [50, 20, 10, 5, 2, 1]);

    $restbedrag = $bedrag;
    $resultaat = '';

    foreach (MONEY_UNITS as $geldeenheid) {
        if ($restbedrag >= $geldeenheid) {
            $aantal = floor($restbedrag / $geldeenheid);
            
           
            $restbedrag %= $geldeenheid;

            
            $resultaat .= "$aantal x $geldeenheid euro" . PHP_EOL;
        }
    }

    return $resultaat . PHP_EOL;
}

?>
