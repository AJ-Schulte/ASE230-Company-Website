<?php

$services = json_decode(file_get_contents('C:\xampp\htdocs\ASE230-Company-Website\data\services.json'), true);

$var = null;

function readService($serviceName){
    global $services;

    if(isset($services[$serviceName])){
        return $services[$serviceName];
    }
}

function readApp(){
    return $services["apps"];
}
?>