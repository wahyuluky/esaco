<?php
include 'connect.php';

// Ambil data gambar
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM gallery WHERE id=?");
$stmt->execute([$id]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$image) {
    die("Gambar tidak ditemukan!");
}

// Ambil kategori
$cats = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);

// Update jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alt = $_POST['alt_text'];
    $cat = $_POST['category_id'];

    // Jika user upload file baru
    if (!empty($_FILES['new_image']['name'])) {
        $targetDir = "uploads/";
        $filename = time() . "_" . basename($_FILES["new_image"]["name"]);
        $targetFile = $targetDir . $filename;

        if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $targetFile)) {
            // update termasuk gambar baru
            $sql = "UPDATE gallery SET alt_text=?, category_id=?, image_url=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$alt, $cat, $filename, $id]);
        }
    } else {
        // update tanpa ubah file
        $sql = "UPDATE gallery SET alt_text=?, category_id=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$alt, $cat, $id]);
    }

    header("Location: managegambar.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Gambar</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f3f4f6; padding:40px; }
    .form-box { background:white; padding:20px; max-width:500px; margin:auto; border-radius:8px; }
    img { max-width:100%; margin-bottom:20px; border-radius:6px; }
    label { display:block; margin:10px 0 5px; font-weight:600; }
    input[type="text"], select {
      width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;
    }
    button { margin-top:15px; padding:10px 16px; background:#2563eb; color:white; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#1d4ed8; }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Edit Gambar</h2>
    <img src="uploads/<?= htmlspecialchars($image['image_url']) ?>" alt="">
    <form method="POST" enctype="multipart/form-data">
      <label>Nama / Alt Text</label>
      <input type="text" name="alt_text" value="<?= htmlspecialchars($image['alt_text']) ?>">

      <label>Kategori</label>
      <select name="category_id">
        <?php foreach($cats as $c): ?>
          <option value="<?= $c['id'] ?>" <?= $c['id']==$image['category_id'] ? 'selected':'' ?>>
            <?= htmlspecialchars($c['name']) ?>
          </option>
        <?php endforeach; ?>
      </select>

      <label>Ganti Gambar (opsional)</label>
      <input type="file" name="new_image" accept="image/*">

      <button type="submit">Simpan Perubahan</button>
    </form>
  </div>
</body>
</html>
