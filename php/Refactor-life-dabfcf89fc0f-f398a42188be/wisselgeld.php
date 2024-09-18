<?php

define('EENHEDEN', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5]);
function validateInput($argc)
{
    if ($argc == 1) {
        return "Je krijgt geen wisselgeld";
    }
    return "";
} 

function calculateChange($aantal)
{
    $ruil = round(floatval($aantal) * 20) * 5;
    if ($ruil <= 0) {
        return "Je krijgt geen wisselgeld";
    }
    $ruilbreakdown = [];

    foreach (EENHEDEN as $een) {
        if ($ruil >= $een) {
            $count = floor($ruil / $een);
            if ($een >= 100) {
                $ruilbreakdown[] = "$count x " . $een / 100 . " euro";
            } else {
                $ruilbreakdown[] = "$count x " . $een . " cents";
            }
            $ruil = $ruil % $een;
        }
    }

    return implode("\n", $ruilbreakdown);
}
function main($argc, $argv)
{
    $input = validateInput($argc);
    if ($input) {
        echo $input;
        exit;
    }
    echo calculateChange($argv[1]);
}
main($argc, $argv);
?>