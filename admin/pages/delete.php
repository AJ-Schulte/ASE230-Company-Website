<?php
$pagesDir = __DIR__ . '/../../data/pages';
$title = $_GET['title'] ?? '';
$file = $pagesDir . '/' . basename($title) . '.txt';

if (file_exists($file)) {
    unlink($file);
}

header("Location: index.php");
exit;
?>
