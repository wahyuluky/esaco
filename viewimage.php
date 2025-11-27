<?php
include 'connect.php';

$id = (int)$_GET['id'];
$stmt = $pdo->prepare("SELECT g.*, c.name as category_name FROM gallery g 
                       JOIN categories c ON g.category_id=c.id 
                       WHERE g.id=?");
$stmt->execute([$id]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$image) die("Gambar tidak ditemukan");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Lihat Gambar</title>
  <style>
    body { font-family: Arial; background:#f3f4f6; padding:40px; text-align:center; }
    img { max-width:80%; border-radius:8px; margin-bottom:20px; }
  </style>
</head>
<body>
  <h2><?= htmlspecialchars($image['alt_text']) ?> (<?= htmlspecialchars($image['category_name']) ?>)</h2>
  <img src="uploads/<?= htmlspecialchars($image['image_url']) ?>" alt="">
</body>
</html>
