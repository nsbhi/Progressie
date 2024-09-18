<?php

echo "wie zit er in de klas?" . PHP_EOL;

$naam = readline() . PHP_EOL;

echo "de studenten in de klas zijn" . PHP_EOL;

$array = explode(" ", $naam);

foreach ($array as $naam) {
    echo $naam . PHP_EOL;
}

?>