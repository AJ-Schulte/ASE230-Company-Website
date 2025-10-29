<?php
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
    $key = trim($_POST['key']); // JSON key
    $name = trim($_POST['name']);
    $titleText = trim($_POST['title']);
    $description = trim($_POST['description']);
    $img = trim($_POST['img']);

    // Check for duplicate key
    if (isset($teams[$key])) {
        $error = "A team member with this JSON key already exists.";
    } else {
        $teams[$key] = [
            'name' => $name,
            'title' => $titleText,
            'description' => $description,
            'img' => $img
        ];

        file_put_contents($jsonPath, json_encode($teams, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        header("Location: detail_team.php?title=" . urlencode($key));
        exit;
    }
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
        <div class="er
