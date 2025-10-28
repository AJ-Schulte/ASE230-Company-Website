<?php
$pagesDir = __DIR__ . '/../../data/pages';
$title = $_GET['title'] ?? '';
$file = $pagesDir . '/' . basename($title) . '.txt';

if (!file_exists($file)) {
    die("Page not found.");
}

$content = file_get_contents($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        .card { background: white; padding: 20px; border-radius: 8px; max-width: 700px; }
        a.button {
            padding: 6px 10px;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 10px;
        }
        a.button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <a href="index.php">← Back to Pages</a>
    <h1><?= htmlspecialchars($title) ?></h1>

    <div class="card">
        <pre style="white-space: pre-wrap;"><?= htmlspecialchars($content) ?></pre>
    </div>

    <br>
    <a class="button" href="edit.php?title=<?= urlencode($title) ?>">Edit</a>
    <a class="button" style="background:red;" href="delete.php?title=<?= urlencode($title) ?>" onclick="return confirm('Are you sure you want to delete this page?');">Delete</a>
</body>
</html>
