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

$id = $_GET['id'] ?? null;
$request = ($id !== null && isset($rows[$id])) ? $rows[$id] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        .label { font-weight: bold; margin-top: 10px; display: block; }
        a { text-decoration: none; color: #007BFF; }
    </style>
</head>
<body>
    <a href="index.php">← Back to List</a>
    <h1>Request Details</h1>

    <?php if ($request): ?>
        <div class="card">
            <span class="label">Email:</span>
            <div><?= htmlspecialchars($request['Email']); ?></div>

            <span class="label">Title:</span>
            <div><?= htmlspecialchars($request['Title']); ?></div>

            <span class="label">Content:</span>
            <div><?= nl2br(htmlspecialchars($request['Content'])); ?></div>
        </div>
    <?php else: ?>
        <p>Request not found.</p>
    <?php endif; ?>
</body>
</html>
