<?php
$jsonPath=__DIR__ . '/../../data/team.json';
$team = json_decode(file_get_contents($jsonPath), true);

$key = $_GET['title'] ?? '';

if ($key && isset($team[$key])) {
    unset($team[$key]);
    file_put_contents($jsonPath, json_encode($team, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

header('Location: index.php');

exit;
