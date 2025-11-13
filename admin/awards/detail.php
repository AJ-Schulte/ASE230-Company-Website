<?php
require_once __DIR__ . '/../../data/classes/Award.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$award = Award::find($id);
if (!$award) die("Award not found.");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Award Details</title>
</head>
<body>
    <a href="index.php">← Back</a>
    <h1>Award Details</h1>
    <p><strong>Year:</strong> <?= htmlspecialchars($award->year) ?></p>
    <p><strong>Award:</strong><br><?= nl2br(htmlspecialchars($award->award)) ?></p>
    <a href="edit.php?id=<?= $id ?>">Edit</a> |
    <a href="delete.php?id=<?= $id ?>" onclick="return confirm('Delete this award?');">Delete</a>
</body>
</html>
