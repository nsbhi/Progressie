<?php

echo "Hoeveel landen ga je toevoegen? ";

$aantal = intval(fgets(STDIN));

$landenEnHoofdsteden = [];
for ($i = 0; $i < $aantal; $i++) {
    echo "Welk land wil je toevoegen " ;
    $land = trim(fgets(STDIN));

    echo "Wat is  de hoofdstad van " . $land . " in: ";
    $hoofdstad = trim(fgets(STDIN));

    $landenEnHoofdsteden[$land] = $hoofdstad;
}

echo "\nDe volgende landen en steden zitten in de database:\n";
foreach ($landenEnHoofdsteden as $land => $hoofdstad) {
    echo $land . " - " . $hoofdstad . "\n";
}
?>