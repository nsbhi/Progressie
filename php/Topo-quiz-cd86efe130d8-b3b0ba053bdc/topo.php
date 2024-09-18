<?php

$hoofdsteden = [
    'Japan' => 'Tokyo',
    'Mexico' => 'Mexico-Stad',
    'de Verenigde Staten' => 'Washington D.C.',
    'India' => 'New Delhi',
    'Zuid-Korea' => 'Seoul',
    'China' => 'Peking',
    'Nigeria' => 'Abuja',
    'Argentinië' => 'Buenos Aires',
    'Egypte' => 'Cairo',
    'Engeland' => 'Londen',
];

$score = 0;

foreach ($hoofdsteden as $land => $hoofdstad) {
    echo "Wat is de hoofdstad van $land? ";
    $antwoord = readline();

    if (strtolower($antwoord) === strtolower($hoofdstad)) {
        echo "Correct! +1 punt\n";
        $score++;
    } else {
        echo "Helaas, het juiste antwoord is $hoofdstad\n";
    }
}


echo "Je hebt $score van de 10 goed vragen goed beantwoord.\n";
?>