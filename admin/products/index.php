<?php
$products = json_decode(file_get_contents(__DIR__ . '/../../data/services.json'), true);


$indexArr=array_keys($products);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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
    <h1>Products</h1>
    <a class="button" href="create.php">+ Create New Product</a>
    <br><br>

    <table>
        <tr>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php foreach ($indexArr as $i): 
            $key = $i;
            $name = $products[$key]['name'];
        ?>
            <tr>
                <td><?= htmlspecialchars($name) ?></td>
                <td><a class="button" href="detail.php?title=<?= urlencode($key) ?>">View</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>