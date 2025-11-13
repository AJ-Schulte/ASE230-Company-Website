<?php
require_once __DIR__ . '/../../data/classes/Award.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$award = Award::find($id);
if (!$award) die("Award not found.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = trim($_POST['year']);
    $awardText = trim($_POST['award']);
    Award::update($id, $year, $awardText);
    header("Location: detail.php?id=" . $id);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Award</title>
</head>
<body>
    <a href="detail.php?id=<?= $id ?>">← Back</a>
    <h1>Edit Award</h1>
    <form method="POST">
        <label>Year:</label><br>
        <input type="text" name="year" value="<?= htmlspecialchars($award->year) ?>" required><br><br>
        <label>Award:</label><br>
        <textarea name="award" rows="5" cols="80" required><?= htmlspecialchars($award->award) ?></textarea><br><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
