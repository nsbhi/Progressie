<?php

function processNumber($getal) 
{
    if ($getal < 0 || $getal > 10) {
        $errormelding = "error getal: $getal \n";
        error_log($errormelding, 3, "errors.log");
        trigger_error($errormelding);
    } else {
        return "getal: $getal";
    }
}
processNumber(5);
processNumber(15);
processNumber(-3); 

?>