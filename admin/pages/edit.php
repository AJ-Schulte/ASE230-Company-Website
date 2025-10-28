<?php
$pagesDir = __DIR__ . '/../../data/pages';
$title = $_GET['title'] ?? '';
$file = $pagesDir . '/' . basename($title) . '.txt';

if (!file_exists($file)) {
    die("Page not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = trim($_POST['content']);
    file_put_contents($file, $content);
    header("Location: detail.php?title=" . urlencode($title));
    exit;
}

$content = file_get_contents($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        textarea { width: 100%; height: 300px; }
        button { padding: 8px 14px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <a href="detail.php?title=<?= urlencode($title) ?>">← Back to Details</a>
    <h1>Edit: <?= htmlspecialchars($title) ?></h1>

    <form method="POST">
        <textarea name="content"><?= htmlspecialchars($content) ?></textarea><br><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
