<?php
$jsonPath = __DIR__ . '/../../data/team.json';
$teams = json_decode(file_get_contents($jsonPath), true);
$keys = array_keys($teams);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Team Members</title>
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
    <h1>Team Members</h1>
    <a class="button" href="create.php">+ Add New Member</a>
    <br><br>
    <table>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php foreach ($keys as $key): 
            $member = $teams[$key];
        ?>
        <tr>
            <td><?= htmlspecialchars($member['name']) ?></td>
            <td><?= htmlspecialchars($member['title']) ?></td>
            <td>
                <a class="button" href="detail.php?title=<?= urlencode($key) ?>">View</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
