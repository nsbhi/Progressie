<?php

define('MONEY_UNITS', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1]);

 
$wisselgeld = round($argv[1] * 20) * 5;
 
 
if ($wisselgeld <= 0) { 
    echo "Geen wisselgeld"; 
    exit;
}
 
foreach ((MONEY_UNITS) as $geld) { 
    if ($wisselgeld >= $geld) { 
        $antwoord = floor($wisselgeld / $geld); 
        if ($geld >= 100) { 
            echo "$antwoord x " . $geld / 100 . " euro" . PHP_EOL; 
        } else { 
            echo "$antwoord x " . $geld . " cent" . PHP_EOL;
        }
        $wisselgeld = $wisselgeld % $geld; 
    }
}
 
?>

