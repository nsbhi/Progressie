<?php

$vrienden = readline("Hoeveel vrienden zal ik vragen om hun dromen? ");


$dromen = array();


for ($i = 1; $i <= $vrienden; $i++) {
    echo "Vriend $i\n";
    $naam = readline("Wat is je naam? ");
    $dromen = readline("Hoeveel dromen ga je opgeven? ");


    $vrienddroom = array();


    for ($j = 1; $j <= $dromen; $j++) {
        $droom = readline("Wat is jouw droom $j, $naam? ");

        $vrienddroom [] = $droom;
    }
    $DromenLijst[$naam] = $vrienddroom;
}

foreach ($DromenLijst as $naam => $vrienddroom) {
    foreach ($vrienddroom as $DromenVanger => $droom) {
        echo "$naam heeft dit als droom: $droom" . PHP_EOL;
    }
}

?>  