<?php

$plans = json_decode(file_get_contents('C:\xampp\htdocs\ASE230-Company-Website\data\pricing.json'), true);

$var = null;

function readJSON($planName){
    global $plans;

    if(isset($plans[$planName])){
        return $plans[$planName];
    }
}
?>

