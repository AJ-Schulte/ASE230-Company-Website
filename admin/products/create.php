<?php

$jsonPath = __DIR__ . '/../../data/services.json';


$products = json_decode(file_get_contents($jsonPath), true) ?? [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = strtolower(trim($_POST['key'])); 
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($key === '' || $name === '') {
        die('Key and Name are required.');
    }

    // Check for duplicate key
    if (isset($products[$key])) {
        die('A product with this key already exists.');
    }

    // Add new product
    $products[$key] = [
        'name' => $name,
        'description' => $description,
        'apps'=> (object)[] // optional, can add nested apps later
    ];

    // Save back to JSON
    file_put_contents($jsonPath, json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Redirect to product list
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
</head>
<body>
    <p><a href="index.php">← Back to Product List</a></p>
    <h1>Create New Product</h1>
    <form method="POST">
        <label>Product Key (used in URL):<br>
            <input type="text" name="key" required>
        </label><br><br>

        <label>Name:<br>
            <input type="text" name="name" required>
        </label><br><br>

        <label>Description:<br>
            <textarea name="description" rows="5" cols="50"></textarea>
        </label><br><br>

        <button type="submit">Create Product</button>
    </form>

</body>
</html>
