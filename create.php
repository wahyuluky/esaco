<?php
require __DIR__ . '/connect.php';

$err = $ok = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = trim($_POST['title'] ?? '');
  $description = trim($_POST['description'] ?? '');
  $date = $_POST['date'] ?? date('Y-m-d');
  $image_url = trim($_POST['image_url'] ?? '');

  if ($title === '' || $description === '') {
    $err = 'Judul dan description wajib diisi.';
  } else {
    $stmt = $pdo->prepare("INSERT INTO articles (title, description, image_url, date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $description, $image_url ?: null, $date]);
    header('Location: index.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Upload Artikel</title>
<style>body{font-family:system-ui;margin:0} .wrap{max-width:820px;margin:40px auto;padding:0 16px}
h1{margin:0 0 16px} form{display:grid;gap:12px} input,textarea{width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px}
.btn{padding:10px 16px;border-radius:8px;background:#2563eb;color:#fff;border:none;cursor:pointer} .link{margin-left:8px}
.msg{padding:10px;border-radius:8px} .err{background:#fee2e2} .ok{background:#dcfce7}
</style></head><body>
<div class="wrap">
  <h1>Upload Artikel</h1>
  <?php if ($err): ?><div class="msg err"><?= ($err) ?></div><?php endif; ?>
  <form method="post">
    <label>Judul <input name="title" required></label>
    <label>image URL (opsional) <input name="image_url" placeholder="https://…"></label>
    <label>date <input type="date" name="date" value="<?= (date('Y-m-d')) ?>"></label>
    <label>description <textarea name="description" rows="6" required></textarea></label>
    <div>
      <button class="btn" type="submit">Simpan</button>
      <a class="link" href="index.php">Kembali</a>
    </div>
  </form>
</div>
</body></html>
