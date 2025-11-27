<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upload Artikel - ESACO</title>
  <style>
    
    /* Reset some default browser styles */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      background-color: #f9fafb;
      color: #111827;
      display: flex;
      min-height: 100vh;
      line-height: 1.5;
    }
    a {
      color: inherit;
      text-decoration: none;
      cursor: pointer;
    }
    ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    /* Main content */
    .main-content {
      margin-left: 250px;
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: #fff;
    }

    /* Header */
    header {
      height: 100px;
      background-color: #2563eb; /* blue-600 */
      color: white;
      display: flex;
      align-items: center;
      padding: 0 2.5rem;
      font-size: 1rem;
      font-weight: 700;
      box-shadow: 0 2px 4px rgb(0 0 0 / 0.12);
      user-select: none;
      flex-shrink: 0;
    }

    /* Form container */
    .form-container {
      flex: 1;
      padding: 20px;
      max-width: 2000px;
      margin-left: 40px;
      margin-right: 60px;
      display: flex;
      flex-direction: column;
      justify-content: start;
      background: #ffffff;
    }
    form {
      display: grid;
      grid-template-columns: 110px 1fr;
      grid-row-gap: 1.25rem;
      grid-column-gap: 1.5rem;
      align-items: start;
    }

    label {
      font-weight: 500;
      font-size: 1rem;
      color: #374151;
      margin-top: 0.25rem;
      white-space: nowrap;
      user-select: none;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"],
    textarea {
      border: 1px solid #d1d5db;
      border-radius: 8px;
      padding: 0.5rem 1rem;
      font-size: 1rem;
      font-family: inherit;
      color: #374151;
      background-color: #f9fafb;
      transition: border-color 0.25s ease;
      width: 100%;
      box-sizing: border-box;
      resize: vertical;
    }
    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="file"]:focus,
    textarea:focus {
      outline: none;
      border-color: #2563eb;
      background-color: #fff;
      box-shadow: 0 0 0 3px rgb(59 130 246 / 0.5);
    }

    textarea {
      min-height: 260px;
      line-height: 1.4;
    }

    /* Submit button */
    .form-actions {
      grid-column: 2 / 3;
      margin-top: 1.5rem;
      display: flex;
      justify-content: flex-end;
    }
    button[type="submit"] {
      background-color: #2563eb;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 0.6rem 1.5rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      user-select: none;
    }
    button[type="submit"]:hover,
    button[type="submit"]:focus {
      background-color: #1d4ed8;
    }

    /* Responsive adjustments */
    @media (max-width: 640px) {
      .sidebar {
        width: 60px;
        padding: 1.5rem 0.5rem 1.5rem 0.5rem;
      }
      .logo-text,
      nav.sidebar-nav > ul > li span {
        display: none;
      }
      nav.sidebar-nav > ul > li {
        justify-content: center;
      }
      .main-content {
        margin-left: 60px;
      }
      form {
        grid-template-columns: 1fr;
      }
      label {
        white-space: normal;
        margin-bottom: 0.25rem;
      }
      .form-actions {
        grid-column: 1 / 2;
      }
    }
  </style>
</head>
<body>
  <?php 
  include 'connect.php';
  include 'sidebar.php';

  ?>

  <main class="main-content" role="main" aria-labelledby="page-title">
    <header>
      <h1 id="page-title">Upload Artikel</h1>
    </header>

    <section class="form-container" aria-describedby="form-description">
        <form action="upload_article.php" method="POST" enctype="multipart/form-data" novalidate>
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" placeholder="Judul" autocomplete="off" required />

            <label for="gambar">Gambar :</label>
            <input type="file" id="gambar" name="gambar" accept="image/*" aria-describedby="gambar-desc" />

            <label for="tanggal">Tanggal :</label>
            <input type="date" id="tanggal" name="tanggal" placeholder="dd/mm/yyyy" pattern="\d{4}-\d{2}-\d{2}" />

            <label for="deskripsi">Deskripsi :</label>
            <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi" autocomplete="off" />

            <label for="konten">Konten Artikel :</label>
            <textarea id="konten" name="konten_html" rows="18" placeholder="Tulis artikel lengkap di sini..."></textarea>


            <div class="form-actions">
            <button type="submit" aria-label="Upload artikel">Upload</button>
            </div>
      </form>
    </section>
  </main>

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

