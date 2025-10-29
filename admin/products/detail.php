<?php
$key = $_GET['title'] ?? '';

$products = json_decode(file_get_contents(__DIR__ . '/../../data/services.json'), true);

// Check if the key exists
if (!isset($products[$key])) {
    die('Product not found.');
}

$item = $products[$key];
$itemName = $item['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($itemName) ?></title>
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
        a.button.delete { background-color: #dc3545; }
        a.button.delete:hover { background-color: #a71d2a; }
    </style>
</head>
<body>
    <a href="index.php">← Back to Products</a>
    <h1><?= htmlspecialchars($itemName) ?></h1>

    <div class="card">
        <p><strong>Description:</strong> <?= htmlspecialchars($item['description']) ?></p>

        <?php if (!empty($item['apps'])): ?>
            <h2>Applications:</h2>
            <ul>
                <?php foreach ($item['apps'] as $appName => $appDesc): ?>
                    <li><strong><?= htmlspecialchars($appName) ?>:</strong> <?= htmlspecialchars($appDesc) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p><em>No apps available for this product.</em></p>
        <?php endif; ?>
    </div>

    <br>
    <a class="button" href="edit.php?title=<?= urlencode($key) ?>">Edit</a>
    <a class="button delete" href="delete.php?title=<?= urlencode($key) ?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
</body>
</html>
