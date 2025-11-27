<?php
require __DIR__ . '/connect.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$a = $stmt->fetch();
if (!$a) { http_response_code(404); exit('Artikel tidak ditemukan'); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($a['title']) ?> - Artikel</title>
  <style>
    body {
      font-family: "Segoe UI", Roboto, system-ui, sans-serif;
      margin: 0;
      background: #f9fafb;
      color: #111827;
      line-height: 1.6;
    }
    .wrap {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 16px;
    }
    .btn {
      display: inline-block;
      padding: 8px 14px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      text-decoration: none;
      color: #374151;
      background: #fff;
      transition: all 0.2s ease;
    }
    .btn:hover {
      background: #f3f4f6;
      border-color: #9ca3af;
    }
    h1 {
      margin: 20px 0 8px;
      font-size: 2rem;
      font-weight: 700;
      color: #1f2937;
      text-align: center;
    }
    .muted {
      color: #6b7280;
      margin-bottom: 20px;
      font-size: 0.95rem;
    }
    img.article-img {
      max-width: 50%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      margin-bottom: 24px;
      margin-left: 250px;
      text-align: center;
      justify-content: center;
    }
    article.content {
      font-size: 1.05rem;
      color: #374151;
    }
    article.content p {
      margin-bottom: 1em;
    }
    article.content h2,
    article.content h3 {
      margin-top: 1.4em;
      margin-bottom: 0.6em;
      font-weight: 600;
      color: #111827;
    }
    article.content ul {
      padding-left: 20px;
      margin: 1em 0;
    }
    article.content li {
      margin-bottom: 6px;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a class="btn" href="manageartikel.php">← Kembali</a>
    <h1><?= htmlspecialchars($a['title']) ?></h1>
    <div class="muted"><?= date('d F Y', strtotime($a['date'])) ?></div>
    <?php if ($a['image_url']): ?>
      <p><img class="article-img" src="<?= htmlspecialchars($a['image_url']) ?>" alt=""></p>
    <?php endif; ?>
    <article class="content">
      <?= $a['content'] /* sengaja tidak pakai htmlspecialchars biar HTML dari editor tampil */ ?>
    </article>
  </div>
</body>
</html>
