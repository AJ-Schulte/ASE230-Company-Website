<?php
require_once __DIR__ . '/../../data/classes/Award.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
Award::delete($id);
header("Location: index.php");
exit;
?>
