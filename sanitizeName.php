<?php

function sanitizeName($name){

    $noTagName = filter_var($name, FILTER_SANITIZE_STRING);

    $filteredName = preg_replace('/[^a-z]+/mi','',$noTagName);

    $nameLowerCase = strtolower($filteredName);
    $uppercaseName = ucfirst($nameLowerCase);

    return $uppercaseName;
}