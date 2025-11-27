<?php
require __DIR__ . '/connect.php';

// Ambil semua artikel
$stmt = $pdo->query("SELECT id, title, description, image_url, date FROM articles ORDER BY id DESC");
$artikels = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Manage Artikel - ESACO</title>
<style>
      /* Reset & base */
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    background: #fff;
    color: #3f3f46;
    line-height: 1.5;
  }
  a {
    color: inherit;
    text-decoration: none;
    cursor: pointer;
  }
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  button {
    font-size: 1rem;
    font-family: inherit;
    cursor: pointer;
    border: none;
    background: none;
    padding: 0;
    margin: 0;
  }
  svg {
    display: block;
  }

  /* Layout */
  .container {
    display: flex;
    min-height: 100vh;
    flex-direction: row;
  }

  /* Main Content */

  .content {
    margin-left: 250px;
    padding: 0;
    background: white;
  }

.header {
  background: #2c65d9;
  color: white;
  padding: 20px; 
  border-radius: 0 0 50px 0;
  display: flex;
  justify-content: space-between;
  align-items: center; /* biar tombol sejajar vertikal */
}


.header h1 {
  font-size: 32px;
  font-weight: 700;
  padding-left: 32px;
}

.upload-btn {
  padding: 8px 16px;
  background-color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  color: #4285f4;
}


  /* Table Wrapper with horizontal scroll on small */
  .table-wrapper {
    overflow-x: auto;
    flex: 1;
    padding: 24px 40px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    color: #57534e;
    min-width: 720px;
  }

  /* Table headers */
  thead tr {
    background-color: #9ca3af50;
    color: #57534e;
    user-select: none;
  }
  thead th {
    padding: 10px 16px;
    text-align: left;
    font-weight: 600;
    vertical-align: middle;
  }
  thead th:nth-child(1) {
    width: 25%;
  }
  thead th:nth-child(2) {
    width: 8%;
    text-align: center;
  }
  thead th:nth-child(3) {
    width: 35%;
  }
  thead th:nth-child(4) {
    width: 12%;
  }
  thead th:nth-child(5) {
    width: 15%;
    text-align: center;
  }

  /* Table body rows */
  tbody tr {
    border-bottom: 1px solid #e5e7eb;
  }
  tbody tr:last-child {
    border-bottom: none;
  }
  tbody td {
    padding: 14px 16px;
    vertical-align: middle;
    text-align: left;
  }
  tbody td:nth-child(2) {
    text-align: center;
  }
  tbody td:nth-child(5) {
    text-align: center;
  }
  tbody td .icon-placeholder {
    display: inline-block;
    width: 24px;
    height: 24px;
    padding: 2px;
    vertical-align: middle;
  }
  tbody td .icon-placeholder svg {
    stroke: #262626;
    stroke-width: 1.5;
    width: 20px;
    height: 20px;
    display: block;
    margin: 0 auto;
  }
  /* Action icons container */
  .action-icons {
    display: flex;
    gap: 16px;
    justify-content: center;
  }
  /* Make SVG icons smaller and aligned */
  .action-icons button {
    background: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
    transition: stroke 0.25s ease;
  }
  .action-icons button svg {
    stroke: #57534e;
    width: 18px;
    height: 18px;
  }
  .action-icons button:hover svg {
    stroke: #2563eb;
  }
  .action-icons button.delete:hover svg {
    stroke: #dc2626;
  }

  /* Hover highlight row */
  tbody tr:hover {
    background-color: #f9fafb;
  }

  /* Responsive adjustments */
  @media (max-width: 720px) {
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 180px;
      z-index: 10;
      border-right: 1px solid #e5e7eb;
      background: #fff;
      padding-top: 20px;
    }
    .content {
      margin-left: 800px;
      display: flex;
      flex-direction: column;
    }
   
    .table-wrapper {
      padding: 12px 18px;
    }
    table {
      font-size: 12px;
      min-width: 600px;
    }
    thead th:nth-child(1),
    tbody td:nth-child(1) {
      width: 32%;
    }
    thead th:nth-child(2),
    tbody td:nth-child(2) {
      width: 10%;
    }
    thead th:nth-child(3),
    tbody td:nth-child(3) {
      width: 35%;
    }
    thead th:nth-child(4),
    tbody td:nth-child(4) {
      width: 13%;
    }
    thead th:nth-child(5),
    tbody td:nth-child(5) {
      width: 15%;
    }
  }
</style>
</head>
<body>
  <div class="container">

  <?php 
  include 'sidebar.php';
  
  ?>

    <main class="content" role="main" aria-label="Manage Artikel Main Content">
      <div class="header">
        <h1>Manage Artikel</h1>
        <a class="upload-btn" href="upload_artikel.php">Upload</a>
        <!-- <button class="upload-btn" aria-label="Upload Artikel">Upload</button> -->
      </div>

      <div class="table-wrapper" role="region" aria-label="Daftar artikel">
        <table>
          <thead>
            <tr>
              <th scope="col">Judul</th>
              <th scope="col">Gambar</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!$artikels): ?>
                <tr><td colspan="5" style="text-align:center;padding:24px">Belum ada data.</td></tr>
            <?php else: foreach ($artikels as $a): ?>
            <tr>
              <td><?= ($a['title']) ?></td>
              <td>
                <?php if ($a['image_url']): ?>
                  <img src="<?= ($a['image_url']) ?>" alt="" style="height:28px;border-radius:4px">
                <?php else: ?>
                  <span aria-label="Tidak ada gambar">—</span>
                <?php endif; ?>
              </td>
              <td><?= (mb_strimwidth($a['description'], 0, 90, '…', 'UTF-8')) ?></td>
              <td><?= (date('d/m/Y', strtotime($a['date']))) ?></td>
              <td>
                <div class="action-icons">
                  <a class="btn-icon" href="view.php?id=<?= (int)$a['id'] ?>">👁️ Lihat</a>
                  <a class="btn-icon" href="edit.php?id=<?= (int)$a['id'] ?>">✏️ Edit</a>
                  <form action="delete.php" method="post" onsubmit="return confirm('Hapus artikel ini?')" style="display:inline">
                    <input type="hidden" name="id" value="<?= (int)$a['id'] ?>">
                    <button class="btn-icon btn-danger" type="submit">🗑️ Hapus</button>
                  </form>
                </div>
              </td>
            </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>

