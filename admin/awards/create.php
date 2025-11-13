<?php
require_once __DIR__ . '/../../data/classes/Award.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = trim($_POST['year']);
    $awardText = trim($_POST['award']);

    if ($year && $awardText) {
        $award = new Award($year, $awardText);
        $award->create();
        header("Location: index.php");
        exit;
    } else {
        $error = "Both fields are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Award</title>
</head>
<body>
    <a href="index.php">← Back to Awards</a>
    <h1>Add New Award</h1>
    <?php if (!empty($error)): ?><p style="color:red;"><?= $error ?></p><?php endif; ?>
    <form method="POST">
        <label>Year:</label><br>
        <input type="text" name="year" required><br><br>
        <label>Award Description:</label><br>
        <textarea name="award" rows="5" cols="80" required></textarea><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
