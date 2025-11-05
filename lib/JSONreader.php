<?php
$servicesLink = __DIR__.'/../data/services.json';
$teamLink = __DIR__.'/../data/team.json';

$services = json_decode(file_get_contents($servicesLink), true);
$team = json_decode(file_get_contents($teamLink), true);


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