<?php

include 'connect.php';

// Ambil ID artikel dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM articles WHERE id = $id LIMIT 1";
$result = $conn->query($sql);

$article = null;
if ($result && $result->num_rows > 0) {
    $article = $result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $article ? htmlspecialchars($article['title']) : "Article Not Found"; ?> | ESACO</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    main { padding: 20px; max-width: 900px; margin: 0 auto; }
    .article-image { width: 50%; height: auto; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; top: 0; right: 0;}
    .article-title { font-size: 2rem; color: #2b379e; margin-bottom: 10px; }
    .article-date { font-size: 0.9rem; color: gray; margin-bottom: 20px; display: block; }
    .article-content p { margin-bottom: 1.2rem; line-height: 1.6; font-size: 1rem; color: #333; }
    .cta-section { background: #3267ff; color: #fff; text-align: center; padding: 40px 20px; margin-top: 50px;}
    .cta-btn { background: #fff; color: #3267ff; padding: 12px 25px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
    .cta-btn:hover { background: #f1f1f1; }
  </style>
</head>
<body>
<?php include 'header.php'; ?>

  <main>
    <?php if ($article): ?>
      <img src="<?= htmlspecialchars($article['image_url']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" class="article-image">
      <h1 class="article-title"><?= htmlspecialchars($article['title']) ?></h1>
      <span class="article-date"><?= date("F j, Y", strtotime($article['date'])) ?></span>
      <article class="content">
        <?= $article['content'] /* sengaja tidak pakai htmlspecialchars biar HTML dari editor tampil */ ?>
      </article>
    <?php else: ?>
      <h2>Article not found.</h2>
    <?php endif; ?>
  </main>
<?php include 'footer.php'; ?> 
</body>
</html>
