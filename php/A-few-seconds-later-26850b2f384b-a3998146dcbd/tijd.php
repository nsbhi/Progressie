<?php

$tijd = $argv[1];

$type = substr($tijd, -1);

$waarde = (int)substr($tijd, 0, -1);

switch ($type) {
    case 'd':
        $sec = $waarde * 24 * 60 * 60;
        break;
    case 'u':
        $sec = $waarde * 60 * 60;
        break;
    case 'm':
        $sec = $waarde * 60;
        break;
    case 's':
        $sec = $waarde;
}

echo "$sec seconden." . PHP_EOL;
?>