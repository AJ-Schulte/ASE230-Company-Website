<?php
$jsonPath = __DIR__ . '/../../data/services.json';
$products = json_decode(file_get_contents($jsonPath), true);

// Get JSON key from URL
$key = $_GET['title'] ?? '';
$isEdit = !empty($key) && isset($products[$key]);

// Pre-fill form values
$item = $isEdit ? $products[$key] : [
    'name' => '',
    'description' => '',
    'apps' => []
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newKey = trim($_POST['key']); // JSON key
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    // Handle apps
    $apps = [];
    if (!empty($_POST['apps'])) {
        foreach ($_POST['apps']['title'] as $i => $appTitle) {
            $appDesc = $_POST['apps']['desc'][$i] ?? '';
            if ($appTitle) {
                $apps[$appTitle] = $appDesc;
            }
        }
    }

    // Build product array
    $newItem = [
        'name' => $name,
        'description' => $description,
        'apps' => $apps
    ];

    // Remove old key if editing and key changed
    if ($isEdit && $newKey !== $key) {
        unset($products[$key]);
    }

    // Save the product
    $products[$newKey] = $newItem;
    file_put_contents($jsonPath, json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Redirect back to detail page for the product
    header("Location: detail.php?title=" . urlencode($newKey));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $isEdit ? "Edit" : "Create" ?> Product</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        input, textarea { width: 100%; padding: 6px; margin-bottom: 10px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        .app-block { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; background: #fff; }
        button { padding: 8px 12px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1><?= $isEdit ? "Edit" : "Create" ?> Product</h1>

    <form method="post">
        <label>JSON Key (unique, lowercase, no spaces)</label>
        <input type="text" name="key" value="<?= htmlspecialchars($isEdit ? $key : '') ?>" required>

        <label>Product Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>

        <label>Description</label>
        <textarea name="description" rows="4"><?= htmlspecialchars($item['description']) ?></textarea>

        <h3>Applications</h3>
        <div id="apps-container">
            <?php if (!empty($item['apps'])): ?>
                <?php foreach ($item['apps'] as $appTitle => $appDesc): ?>
                    <div class="app-block">
                        <label>App Title</label>
                        <input type="text" name="apps[title][]" value="<?= htmlspecialchars($appTitle) ?>">
                        <label>App Description</label>
                        <textarea name="apps[desc][]"><?= htmlspecialchars($appDesc) ?></textarea>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" onclick="addApp()">+ Add App</button>
        <br><br>
        <button type="submit"><?= $isEdit ? "Save Changes" : "Create Product" ?></button>
    </form>

    <script>
        function addApp() {
            const container = document.getElementById('apps-container');
            const div = document.createElement('div');
            div.className = 'app-block';
            div.innerHTML = `
                <label>App Title</label>
                <input type="text" name="apps[title][]">
                <label>App Description</label>
                <textarea name="apps[desc][]"></textarea>
            `;
            container.appendChild(div);
        }
    </script>
</body>
</html>
