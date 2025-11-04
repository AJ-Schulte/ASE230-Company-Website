<?php
require_once __DIR__ . '/../../data/classes/Page.php';
$title = $_GET['title'] ?? '';
$page = Page::find($title);
if (!$page) die("Page not found.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $page->content = trim($_POST['content']);
    $page->save();
    header("Location: detail.php?title=" . urlencode($page->title));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
</head>
<body>
    <a href="detail.php?title=<?= urlencode($page->title) ?>">← Back</a>
    <h1>Edit: <?= htmlspecialchars($page->title) ?></h1>
    <form method="POST">
        <textarea name="content" rows="15" cols="100"><?= htmlspecialchars($page->content) ?></textarea><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
