<?php
require_once(__DIR__ . '/../../data/classes/JSONHelper.php');
require_once(__DIR__ . '/../../data/classes/Team.php');
$jsonPath = __DIR__ . '/../../data/team.json';
$teams = json_decode(file_get_contents($jsonPath), true);

// Pre-fill empty member
$member = [
    'name' => '',
    'title' => '',
    'description' => '',
    'img' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = trim($_POST['key']); // unique JSON key
    $name = trim($_POST['name']);
    $titleText = trim($_POST['title']);
    $description = trim($_POST['description']);
    $img = trim($_POST['img']);

    // Create the Team object
    $member = new Team($key, $name, $titleText, $description, $img);

    // Convert to associative array
    $dataArray = [
        'name' => $member->getName(),
        'title' => $member->getTitle(),
        'description' => $member->getDescription(),
        'img' => $member->getImage()
    ];

    // Add to JSON using the helper
    JSONHelper::add($jsonPath, $key, $dataArray);

    header("Location: detail.php?title=" . urlencode($key));
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Team Member</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        input, textarea { width: 100%; padding: 6px; margin-bottom: 10px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        button { padding: 8px 12px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .error { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Create Team Member</h1>

    <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post">
        <label>JSON Key (unique, lowercase, no spaces)</label>
        <input type="text" name="key" value="<?= htmlspecialchars($member['key'] ?? '') ?>" required>

        <label>Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($member['name']) ?>" required>

        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($member['title']) ?>" required>

        <label>Description</label>
        <textarea name="description" rows="4"><?= htmlspecialchars($member['description']) ?></textarea>

        <label>Image URL</label>
        <input type="text" name="img" value="<?= htmlspecialchars($member['img']) ?>">

        <button type="submit">Create Member</button>
    </form>
</body>
</html>
