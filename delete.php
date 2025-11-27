<?php
require __DIR__ . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  exit('Method Not Allowed');
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
$stmt->execute([$id]);

header('Location: manageartikel.php');
exit;
