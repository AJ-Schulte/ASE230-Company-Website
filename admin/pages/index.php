<?php
require_once __DIR__ . '/../../data/classes/Page.php';
$pages = Page::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pages</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #f0f0f0; }
        a.button {
            padding: 6px 10px;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }
        a.button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>Pages</h1>
    <a class="button" href="create.php">+ Create New Page</a>
    <br><br>
    <table>
        <tr>
            <th>Title</th>
            <th>Last Modified</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= htmlspecialchars($page->title) ?></td>
                <td><?= htmlspecialchars($page->lastModified()) ?></td>
                <td><a class="button" href="detail.php?title=<?= urlencode($page->title) ?>">View</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
