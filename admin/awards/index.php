<?php
require_once __DIR__ . '/../../data/classes/Award.php';
$awards = Award::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awards</title>
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
    <h1>Awards</h1>
    <a class="button" href="create.php">+ Add New Award</a>
    <br><br>
    <table>
        <tr>
            <th>Year</th>
            <th>Award</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($awards as $i => $award): ?>
            <tr>
                <td><?= htmlspecialchars($award->year) ?></td>
                <td><?= htmlspecialchars(mb_strimwidth($award->award, 0, 60, '...')) ?></td>
                <td>
                    <a class="button" href="detail.php?id=<?= $i ?>">View</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
