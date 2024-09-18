<?php

class Custom extends Exception
{
    public function errorMessage()
    {
        $error = "Er is iets fout gegaan.";
        return $error;
    }
}

$email = "583711@edu.rocmn.nl";

try {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        throw new Custom($email);
    }
} catch (Custom $a) {
    error_log($a->errorMessage(), 3, "errors.log");
}