<?php
require_once __DIR__ . '/../../data/classes/Page.php';
$title = $_GET['title'] ?? '';
$page = Page::find($title);
if (!$page) die("Page not found.");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($page->title) ?></title>
</head>
<body>
    <a href="index.php">← Back</a>
    <h1><?= htmlspecialchars($page->title) ?></h1>
    <pre style="white-space: pre-wrap;"><?= htmlspecialchars($page->content) ?></pre>
    <p><small>Last Modified: <?= htmlspecialchars($page->lastModified()) ?></small></p>
    <a href="edit.php?title=<?= urlencode($page->title) ?>">Edit</a> |
    <a href="delete.php?title=<?= urlencode($page->title) ?>" onclick="return confirm('Delete this page?');">Delete</a>
</body>
</html>
