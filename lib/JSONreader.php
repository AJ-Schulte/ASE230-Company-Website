<?php

$services = json_decode(file_get_contents('C:\xampp\htdocs\ASE230-Company-Website\data\services.json'), true);
$team = json_decode(file_get_contents('C:\xampp\htdocs\ASE230-Company-Website\data\team.json'), true);


function readService($serviceName){
    global $services;

    if(isset($services[$serviceName])){
        return $services[$serviceName];
    }
}

function readTeam($member){
    global $team;

    if(isset($team[$member])){
        return $team[$member];
    }
}
?>