<?php

define('UNIT', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5]);

function check1($argcount)
{
    if ($argcount == 1) {
        throw new Exception("Geen wisselgeld gegeven");
    }
}

function check2($change)
{
    if ($change <= 0) {
        throw new Exception("Geen positief bedrag");
    }
}

function check3($change)
{
    if (!is_numeric($change)) {
        throw new Exception("Ongeldig (moet een getal zijn)");
    }
}

function calcWisselgeld($geld)
{
    $wisselGeld = round(floatval($geld) * 20) * 5;
    return $wisselGeld;
}



function showWisselgeld($pay)
{
    foreach (UNIT as $een) {
        if ($pay >= $een) {
            $count = floor($pay / $een);
            if ($een >= 100) {
                echo "$count x " . $een / 100 . " euro\n";
            } else {
                echo "$count x " . $een . " cent\n";
            }
            $pay = $pay % $een;
        }
    }
}



check1($argc);

$pay = calcWisselgeld($argv[1]);

try {
    check2($pay);
    check3($pay);
    showWisselgeld($pay);
} catch (Exception $e) {
    echo "Fout: " . $e->getMessage();
    exit;
}

showWisselgeld($pay);

?>