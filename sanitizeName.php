<?php
function sanitizeName($name){
    if(strpos($name,"<script>")!==false){
        $name='';
    }
    $explodedNames = explode(" ", $name);
    $correctNames = array_map("subSanitizeName", $explodedNames);
    $implodedNames = implode(" ", $correctNames);
    $trimmedName = trim($implodedNames, " ");
    $noSpaceName = preg_replace('/\B /m','',$trimmedName);

    return  $noSpaceName;
}

function subSanitizeName($name){
    $noTagName = filter_var($name, FILTER_SANITIZE_STRING);

    $filteredName = preg_replace('/[^a-z,.]+/mi','',$noTagName);

    $nameLowerCase = strtolower($filteredName);
    $uppercaseName = ucfirst($nameLowerCase);

    return $uppercaseName;
}