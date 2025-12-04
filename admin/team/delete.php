<?php
require_once(__DIR__ . '/../../data/classes/JSONHelper.php');
require_once(__DIR__ . '/../../data/classes/Team.php');
$jsonPath=__DIR__ . '/../../data/team.json';
$team = JSONHelper::read($jsonPath);

$key = $_GET['title'] ?? '';

JSONHelper::delete($jsonPath, $key);

header('Location: index.php');

exit;
