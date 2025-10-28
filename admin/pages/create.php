<?php
$pagesDir = __DIR__ . '/../../data/pages';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title && $content) {
        $filename = $pagesDir . '/' . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $title) . '.txt';
        file_put_contents($filename, $content);
        header("Location: index.php");
        exit;
    } else {
        $error = "Title and content are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        textarea { width: 100%; height: 200px; }
        input[type=text] { width: 100%; padding: 8px; }
        button { padding: 8px 14px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        a { color: #007BFF; text-decoration: none; }
    </style>
</head>
<body>
    <a href="index.php">← Back to Pages</a>
    <h1>Create New Page</h1>

    <?php if (!empty($error)): ?><p style="color:red;"><?= $error ?></p><?php endif; ?>

    <form method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" required></textarea><br><br>

        <button type="submit">Save Page</button>
    </form>
</body>
</html>
