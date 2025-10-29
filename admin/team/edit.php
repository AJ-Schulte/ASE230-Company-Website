<?php
$jsonPath = __DIR__ . '/../../data/team.json';
$teams = json_decode(file_get_contents($jsonPath), true);

$key = $_GET['title'] ?? '';
$isEdit = !empty($key) && isset($teams[$key]);

$member = $isEdit ? $teams[$key] : [
    'name' => '',
    'title' => '',
    'description' => '',
    'img' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newKey = trim($_POST['key']);
    $name = trim($_POST['name']);
    $titleText = trim($_POST['title']);
    $description = trim($_POST['description']);
    $img = trim($_POST['img']);

    $newMember = [
        'name' => $name,
        'title' => $titleText,
        'description' => $description,
        'img' => $img
    ];

    if ($isEdit && $newKey !== $key) {
        unset($teams[$key]);
    }

    $teams[$newKey] = $newMember;
    file_put_contents($jsonPath, json_encode($teams, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    header("Location: detail.php?title=" . urlencode($newKey));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $isEdit ? "Edit" : "Create" ?> Team Member</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        input, textarea { width: 100%; padding: 6px; margin-bottom: 10px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        button { padding: 8px 12px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1><?= $isEdit ? "Edit" : "Create" ?> Team Member</h1>
    <form method="post">
        <label>JSON Key (unique, lowercase, no spaces)</label>
        <input type="text" name="key" value="<?= htmlspecialchars($isEdit ? $key : '') ?>" required>

        <label>Name</label>
        <input type="text" name="name" value="<?= htmlspecialchars($member['name']) ?>" required>

        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($member['title']) ?>" required>

        <label>Description</label>
        <textarea name="description" rows="4"><?= htmlspecialchars($member['description']) ?></textarea>

        <label>Image URL</label>
        <input type="text" name="img" value="<?= htmlspecialchars($member['img']) ?>">

        <button type="submit"><?= $isEdit ? "Save Changes" : "Create Member" ?></button>
    </form>
</body>
</html>
