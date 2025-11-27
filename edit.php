<?php
require __DIR__ . '/connect.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$a = $stmt->fetch();
if (!$a) { http_response_code(404); exit('Artikel tidak ditemukan'); }

$err = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = trim($_POST['title'] ?? '');
  $description = trim($_POST['description'] ?? '');
  $date = $_POST['date'] ?? date('Y-m-d');
  $image_url = trim($_POST['image_url'] ?? '');
  $content = trim($_POST['content'] ?? '');

  if ($title === '' || $description === '') {
    $err = 'Judul dan description wajib diisi.';
  } else {
    $stmt = $pdo->prepare("UPDATE articles SET title=?, description=?, image_url=?, date=?, content=? WHERE id=?");
    // $stmt->execute([$title, $description, $image_url, $content ?: null, $date, $id]);
    // $stmt = $pdo->prepare("UPDATE articles SET title=?, description=?, image_url=?, date=?, content=? WHERE id=?");
    $stmt->execute([$title, $description, $image_url, $date, $content ?: null, $id]);

    header('Location: manageartikel.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Artikel</title>
<style>body{font-family:system-ui;margin:0} .wrap{max-width:820px;margin:40px auto;padding:0 16px}
h1{margin:0 0 16px} form{display:grid;gap:12px} input,textarea{width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px}
.btn{padding:10px 16px;border-radius:8px;background:#2563eb;color:#fff;border:none;cursor:pointer} .link{margin-left:8px}
.msg{padding:10px;border-radius:8px;background:#fee2e2}
</style></head><body>
<div class="wrap">
  <h1>Edit Artikel</h1>
  <?php if ($err): ?><div class="msg"><?= ($err) ?></div><?php endif; ?>
  <form method="post">
    <label>Judul <input name="title" required value="<?= ($a['title']) ?>"></label>
    <label>Gambar URL (opsional) <input name="image_url" value="<?= ($a['image_url']) ?>"></label>
    <label>Tanggal <input type="date" name="date" value="<?= ($a['date']) ?>"></label>
    <label>Deskripsi <textarea name="description" rows="2" required><?= ($a['description']) ?></textarea></label>
    <label>Konten <textarea name="content" rows="18" id="konten"><?= ($a['content']) ?></textarea></label>
    <div>
      <button class="btn" type="submit">Simpan</button>
      <a class="link" href="manageartikel.php">Batal</a>
    </div>
  </form>
</div>

<script src="https://cdn.tiny.cloud/1/90zatw4wuxr6fo2lqbr3wbe73rdohcctheabm5pk5ofmdc6g/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#konten',
      height: 500,
      menubar: true,
      plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | removeformat | preview code fullscreen',
      toolbar_mode: 'sliding',
      branding: false,
      // Opsional: batasi elemen/atribut yang diizinkan
      valid_elements: '*[*]'
    });
  </script>

</body>
</html>
