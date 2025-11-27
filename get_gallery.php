<?php
require __DIR__ . '/connect.php';

// Ambil gallery + join ke kategori
$stmt = $pdo->query("
  SELECT g.image_url, g.alt_text, c.name AS category
  FROM gallery g
  JOIN categories c ON g.category_id = c.id
");
$gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Ambil kategori
$stmtCat = $pdo->query("SELECT id, name FROM categories");
$categories = $stmtCat->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
  "gallery" => $gallery,
  "categories" => $categories
]);
