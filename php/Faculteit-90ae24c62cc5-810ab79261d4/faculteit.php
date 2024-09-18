<?php

echo "van welk getal wil je de faculteit weten?" . PHP_EOL;
$n = readline();
$x = 1;

for ($i = 1; $i <= $n - 1; $i++) {
    $x *= ($i + 1); 
}

echo "De faculteit van $n is $x";


?>