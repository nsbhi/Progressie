<?php

echo "Hoeveel activiteiten wil je toevoegen?" . PHP_EOL;
$a = readline();
$d = "Wat wil je toevoegen aan je bucket list?" . PHP_EOL;

$bucketlist = [];

if (is_numeric($a)) {
    for ($x = 1; $x <= $a; $x++) {
        echo $d;
        $c = readline();
        $bucketlist[] = $c;
    }
} else {
    echo "'$a' is geen getal probeer het opnieuw";
    exit;
}

echo "Op jouw bucket list staat: " . PHP_EOL;

foreach ($bucketlist as $resultaat) {
    echo $resultaat . PHP_EOL;
}
?>