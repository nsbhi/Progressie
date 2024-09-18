<?php

$albums = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New eyes" => 5,
    "Strange trails" => 10
);

$total = array_sum($albums);

$gemiddeld = $total / count($albums);

echo "Het albumoverzicht:\n";
foreach ($albums as $album => $prijs) {
    echo "$album: $" . number_format($prijs, 2) . "\n";
}

echo "Het totaalbedrag van alle albums €" . number_format($total, 2) . "\n";
echo "De gemiddelde prijs van alle albums is €" . number_format($gemiddeld, 2) . "\n";
?>