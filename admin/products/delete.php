<?php
$jsonPath=__DIR__ . '/../../data/services.json';
$products = json_decode(file_get_contents($jsonPath), true);

$key = $_GET['title'] ?? '';

if ($key && isset($products[$key])) {
    unset($products[$key]);
    file_put_contents($jsonPath, json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

header('Location: index.php');


exit;
