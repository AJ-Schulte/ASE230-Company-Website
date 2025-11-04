<?php
require_once __DIR__ . '/../../data/classes/Page.php';
$title = $_GET['title'] ?? '';
Page::delete($title);
header("Location: index.php");
exit;
?>
