<?php
$key = $_GET['title'] ?? '';
$teams = json_decode(file_get_contents(__DIR__ . '/../../data/team.json'), true);

if (!isset($teams[$key])) {
    die('Team member not found.');
}

$member = $teams[$key];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($member['name']) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        .card { background: white; padding: 20px; border-radius: 8px; max-width: 700px; }
        img { max-width: 150px; border-radius: 50%; margin-bottom: 20px; }
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
    <a href="index.php">← Back to Team</a>
    <h1><?= htmlspecialchars($member['name']) ?></h1>
    <div class="card">
        <img src="/ASE230-Company-Website/<?= htmlspecialchars( $member['img']) ?>" alt="<?= htmlspecialchars($member['name']) ?>">
        <p><strong>Title:</strong> <?= htmlspecialchars($member['title']) ?></p>
        <p><strong>Description:</strong> <?= htmlspecialchars($member['description']) ?></p>
    </div>
    <br>
    <a class="button" href="edit.php?title=<?= urlencode($key) ?>">Edit</a>
    <a class="button delete" href="delete.php?title=<?= urlencode($key) ?>" onclick="return confirm('Delete this member?');">Delete</a>
</body>
</html>

