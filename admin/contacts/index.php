<?php
$csvFile = __DIR__ . '/../../data/contact_requests.csv';
$rows = [];

if (($handle = fopen($csvFile, "r")) !== FALSE) {
    $headers = fgetcsv($handle);
    while (($data = fgetcsv($handle)) !== FALSE) {
        $rows[] = array_combine($headers, $data);
    }
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Requests</title>
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
    <h1>Contact Requests</h1>
    <table>
        <tr>
            <th>Email</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php foreach ($rows as $index => $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['Email']); ?></td>
                <td><?= htmlspecialchars($row['Title']); ?></td>
                <td><a class="button" href="detail.php?id=<?= $index; ?>">View Details</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
