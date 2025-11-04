<?php
require_once __DIR__ . '/../../data/classes/Page.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title && $content) {
        $page = new Page($title, $content);
        $page->save();
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
</head>
<body>
    <a href="index.php">← Back to Pages</a>
    <h1>Create New Page</h1>
    <?php if (!empty($error)): ?><p style="color:red;"><?= $error ?></p><?php endif; ?>
    <form method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>
        <label>Content:</label><br>
        <textarea name="content" rows="10" cols="80" required></textarea><br><br>
        <button type="submit">Save Page</button>
    </form>
</body>
</html>
