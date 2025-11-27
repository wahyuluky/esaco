<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Gallery - ESACO</title>
    <style>
  /* RESET */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body, h1, h2, ul, li, p, button {
    margin: 0;
    padding: 0;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f3f4f6;
    color: #1f2937;
    line-height: 1.4;
    min-height: 100vh;
    display: flex;
  }

  /* Sidebar */
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            padding: 20px 0;
            position: fixed;
            height: 100vh;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 0 20px 30px;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .logo img {
            height: 60px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 14px;
        }


        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 5px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            text-decoration: none;
            color: #666;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            background-color: #f0f7ff;
            color: #4285f4;
            border-right: 3px solid #4285f4;
        }

        .nav-icon{
            margin-right: 10px;
            font-size: 16px;
        }

        .nav-section {
            color: #999;
            font-size: 12px;
            text-transform: uppercase;
            padding: 20px 20px 10px;
            font-weight: 600;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
        }

        .logout a {
            display: flex;
            align-items: center;
            padding: 12px 0;
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .logout a:hover {
            color: #333;
        }

  /* MAIN CONTENT */
  main.content-area {
    flex: 1;
    display: flex;
    flex-direction: column;
    background: #fff;
  }

  /* Header */
  header.page-header {
  background: #2c65d9;
  color: white;
  padding: 20px; 
  border-radius: 0 0 50px 0;
  display: flex;
  justify-content: space-between;
  align-items: center; /* biar tombol sejajar vertikal */
  }
  header.page-header h1 {
  font-size: 32px;
  font-weight: 700;
  padding-left: 250px;
  }
  .upload-btn {
    background: white;
    color: #2563eb;
    border: none;
    border-radius: 6px;
    padding: 10px 20px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 3px 6px rgb(37 99 235 / 0.4);
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
    text-decoration: none;
  }
  .upload-btn:hover,
  .upload-btn:focus {
    background-color: #e0e7ff;
    box-shadow: 0 6px 10px rgb(37 99 235 / 0.6);
    outline: none;
  }
  .upload-btn svg {
    width: 16px;
    height: 16px;
    stroke: #2563eb;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .toggle-btn {
  background: #007bff;
  color: white;
  padding: 8px 14px;
  border: none;
  /* border-radius: 6px; */
  cursor: pointer;
  margin-bottom: 10px;
  width: 150px;
  margin-left: 250px;
}

  .filter-box {
  background: white;
  padding: 10px;
  margin-bottom: 20px;
  margin-left: 250px;
}

.hidden {
  display: none;
}


  /* Gallery container */
  section.gallery-container {
    padding: 32px 40px 48px 280px;
    overflow-y: auto;
  }

  /* Gallery category */
  .gallery-category {
    margin-bottom: 40px;
  }
  .gallery-category h2 {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 14px;
    user-select:none;
  }

  /* Cards grid */
  .cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(220px,1fr));
    gap: 20px;
  }

  /* Card */
  .card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }
  .card img {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
  }
  .card-footer {
    background: #fafafa;
    padding: 8px 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.84rem;
    user-select:none;
  }

  /* Buttons in card footer */
  .card-footer button {
    display: flex;
    align-items: center;
    gap: 6px;
    background: none;
    border: none;
    font-family: inherit;
    cursor: pointer;
    color: #6b7280;
    font-size: 0.9rem;
    transition: color 0.2s ease;
  }
  .card-footer button:hover,
  .card-footer button:focus {
    color: #ef4444;
    outline: none;
  }
  .btn-view svg {
    width: 18px;
    height: 18px;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linejoin: round;
    stroke-linecap: round;
    fill: none;
  }
  .btn-delete {
    color: #ef4444;
  }
  .btn-delete svg {
    width: 18px;
    height: 18px;
    stroke: currentColor;
    stroke-width: 1.8;
    stroke-linejoin: round;
    stroke-linecap: round;
    fill: none;
  }

  .btn-edit {
  color: #2563eb;
  text-decoration: none;
  font-size: 0.9rem;
  margin: 0 8px;
}
.btn-edit:hover {
  color: #1d4ed8;
}


  /* Scrollbar for gallery */
  section.gallery-container::-webkit-scrollbar {
    width: 6px;
  }
  section.gallery-container::-webkit-scrollbar-thumb {
    background-color: #a5b4fc;
    border-radius: 20px;
  }
  section.gallery-container::-webkit-scrollbar-track {
    background: transparent;
  }

  /* Responsive adjustments */
  @media (max-width: 980px) {
    .sidebar {
      width: 230px;
    }
    .content-area {
      padding: 0 15px;
    }
    section.gallery-container {
      padding: 24px 16px 40px 16px;
    }
  }
  @media (max-width: 670px) {
    body {
      flex-direction: column;
    }
    .sidebar {
      width: 100%;
      height: 70px;
      flex-direction: row;
      border-right: none;
      border-bottom: 1px solid #e5e7eb;
      box-shadow: none;
      align-items: center;
      padding: 0 20px;
      justify-content: start;
      gap: 24px;
    }
    .sidebar-header {
      padding: 9px 0 11px 0;
      flex: 0 0 auto;
      margin-right: 12px;
      border-bottom: none;
      border-right: 1px solid #eaeafa;
      height: 70px;
      align-items: center;
    }
    nav.sidebar-nav {
      padding-left: 0;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 18px;
      font-size: 0.8rem;
      align-items: center;
      margin-top: 0;
      margin-bottom: 0;
    }
    nav .section-label {
      display: none;
    }
    nav a.nav-item {
      margin-bottom: 0;
      gap: 6px;
    }
    nav a.nav-item svg {
      width: 16px;
      height: 16px;
    }
    .logout {
      align-self: center;
      margin-left: auto;
      margin-right: 0;
    }
    main.content-area {
      padding: 20px;
    }
    header.page-header {
      border-radius: 0;
      padding: 16px 20px;
      flex-wrap: wrap;
      gap: 12px;
      align-items: flex-start;
    }
  }
    </style>
</head>
<body>
    <?php 
    include 'connect.php'; // Include database connection 
    include 'sidebar.php';

    // Ambil data gambar + kategori
    $sql = "SELECT g.*, c.name AS category_name 
            FROM gallery g 
            JOIN categories c ON g.category_id = c.id 
            ORDER BY c.name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Kelompokkan berdasarkan kategori
    $grouped = [];
    foreach ($images as $img) {
        $grouped[$img['category_name']][] = $img;
    }
    
    ?>

    <main class="content-area">
        <header class="page-header">
            <h1>Manage Gallery</h1>
            <a href="upload_gambar.php" class="upload-btn" aria-label="Upload new images">Upload</a>
        </header>

        <!-- Tombol Toggle -->
        <button id="toggleFilter" class="toggle-btn">☰ Filter by Category</button>

        <!-- Filter Kategori -->
        <aside class="filter-box hidden" id="filterBox">
            <h3>Filter by Category</h3>
            <?php foreach (array_keys($grouped) as $category): ?>
                <label>
                    <input type="checkbox" class="filter-checkbox" value="<?= htmlspecialchars($category) ?>">
                    <?= htmlspecialchars($category) ?>
                </label><br>
            <?php endforeach; ?>
        </aside>

        <section class="gallery-container" aria-label="Image gallery">
        <?php foreach ($grouped as $category => $imgs): ?>
            <div class="gallery-category" data-category="<?= htmlspecialchars($category) ?>">
                <h2><?= htmlspecialchars($category) ?></h2>
                <div class="cards-grid">
                    <?php foreach ($imgs as $image): ?>
                        <div class="card">
                            <img src="uploads/<?= htmlspecialchars($image['image_url']) ?>" 
                                alt="<?= htmlspecialchars($image['alt_text']) ?>" 
                                onerror="this.style.display='none'" />
                            <div class="card-footer">
                                <button class="btn-view" onclick="window.open('viewimage.php?id=<?= $image['id'] ?>','_blank')">
                                    Lihat
                                </button>
                                <a href="editimage.php?id=<?= $image['id'] ?>" class="btn-edit">Edit</a>
                                <form class="btn-delete" method="POST" action="deleteimage.php" onsubmit="return confirm('Yakin hapus gambar ini?')">
                                    <input type="hidden" name="id" value="<?php echo $image['id']; ?>">
                                    <button type="submit" class="delete-btn">Delete</button>
                                </form>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        </section>
    </main>

    <script>

      const checkboxes = document.querySelectorAll(".filter-checkbox");
      const categories = document.querySelectorAll(".gallery-category");

      checkboxes.forEach(cb => {
        cb.addEventListener("change", () => {
          // ambil semua kategori yang dicentang
          const selected = Array.from(checkboxes)
                            .filter(c => c.checked)
                            .map(c => c.value);

          categories.forEach(cat => {
            if (selected.length === 0 || selected.includes(cat.dataset.category)) {
              cat.style.display = "block";
            } else {
              cat.style.display = "none";
            }
          });
        });
      });

      document.getElementById("toggleFilter").addEventListener("click", function() {
      const filterBox = document.getElementById("filterBox");
      filterBox.classList.toggle("hidden"); // show/hide

      // Optional: ganti teks tombol
      if (filterBox.classList.contains("hidden")) {
          this.textContent = "☰ Show Filter";
      } else {
          this.textContent = "✖ Hide Filter";
      }
  });

        function deleteImage(id) {
            if(confirm("Are you sure you want to delete this image?")) {
                window.location.href = 'deleteimage.php?id=' + id;
            }
        }

    </script>
</body>
</html>
