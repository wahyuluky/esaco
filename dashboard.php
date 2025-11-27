<?php
include 'connect.php';

// Fetch article counts
$articleCount = $pdo->query("SELECT COUNT(*) FROM articles")->fetchColumn();
$mediaCount = $pdo->query("SELECT COUNT(*) FROM gallery")->fetchColumn();
$articles = $pdo->query("SELECT * FROM articles ORDER BY date DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
$media = $pdo->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ESACO Dashboard</title>
    <style>
         /* Reset some default styles */
    * {
      box-sizing: border-box;
    }
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #ffff;
      color: #222;
      height: 100vh;
      overflow-x: hidden;
    }


    /* --- Main content area --- */
    .main-content {
      margin-left: 250px;
      /* padding: 30px 36px 48px; */
      background: #ffff;
      min-height: 100vh;
      position: relative;
      z-index: 0;
    }

    /* Top blue header with curved bottom shape */
    .header-blue {
      background: #2c65d9;
      color: white;
      position: relative;
      padding: 20px;
      /* border-bottom-left-radius: 56px; */
      border-bottom-right-radius: 45px;
      box-shadow: 0 4px 8px rgba(44, 101, 217, 0.35);
      margin-bottom: 40px;
      height: 150px;
    }
    .header-blue h1 {
      margin: 0;
      font-size: 30px;
      font-weight: 700;
      user-select: none;
      letter-spacing: 0.03em;
      padding: 10px 50px 0 50px;
    }

    /* Top dashboard cards container and cards */
    .dashboard-cards {
      display: flex;
      gap: 25px;
      /* margin-top: 5px; */
      flex-wrap: wrap;
      padding: 26px 66px 0 66px;
      margin-bottom: 50px;
    }
    .dashboard-card {
      background: white;
      flex-grow: 1;
      min-width: 190px;
      max-width: 280px;
      padding: 20px 28px 32px 28px;
      border-radius: 24px;
      box-shadow: 0 2px 10px rgb(0 0 0 / 0.15);
      transition: box-shadow 0.3s ease;
      cursor: default;
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      font-weight: 600;
      font-size: 26px;
      color: #222;
      position: relative;
      margin-bottom: -70px;
    }
    .dashboard-card:hover {
      box-shadow: 0 6px 18px rgba(44, 101, 217, 0.45);
    }
    .dashboard-card small {
      font-weight: 400;
      font-style: italic;
      font-size: 14px;
      margin-top: 6px;
      color: #999;
      user-select: text;
    }

    /* Section headings for Artikel and Media */
    section.category-section {
      /* margin-bottom: 20px; */
      margin-top: 80px;
      padding: 26px 66px;
      background-color: white;
      position: relative;
      width: 100%;
      overflow: hidden;
    }
    section.category-section h2 {
      font-style: italic;
      font-weight: 700;
      font-size: 22px;
      margin: 0 0 16px 6px;
      color: #222;
      user-select: none;
      letter-spacing: 0.03em;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Cards container for Artikel and Media */
    .cards-grid {
      display: flex;
      gap: 24px;
      flex-wrap: wrap;
    }
    .cards-grid .card {
      background: white;
      border-radius: 14px;
      box-shadow: 0 2px 10px rgb(0 0 0 / 0.10);
      min-width: 240px;
      max-width: 280px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      cursor: default;
      user-select: none;
      transition: box-shadow 0.3s ease;
    }
    .cards-grid .card:hover {
      box-shadow: 0 8px 25px rgba(44, 101, 217, 0.35);
    }

    /* Card image container */
    .card-image {
      width: 100%;
      height: 140px;
      overflow: hidden;
      border-top-left-radius: 14px;
      border-top-right-radius: 14px;
      background: #ddd;
      flex-shrink: 0;
      position: relative;
    }
    .card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      transition: transform 0.3s ease;
    }
    .card:hover .card-image img {
      transform: scale(1.05);
    }

    /* Card text content */
    .card-content {
      padding: 14px 18px 18px 18px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card-content strong {
      color: #25287b;
      font-weight: 700;
      font-size: 14px;
      user-select: text;
      margin-bottom: 8px;
      display: inline-block;
      text-decoration: none;
      outline: none;
    }
    .card-content p {
      font-size: 14px;
      font-weight: 400;
      line-height: 1.4;
      color: #222;
      margin: 0 0 12px 0;
      user-select: text;
    }
    .card-content time {
      font-size: 12px;
      font-weight: 400;
      color: #999;
      font-style: normal;
      user-select: text;
      text-align: right;
      display: block;
    }

    .category-section {
  position: relative;
  max-width: 100%;
  overflow: hidden;
}

.cards-wrapper {
  overflow-x: auto;
  scroll-behavior: smooth;
}

    .cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* 4 kolom sama besar */
      gap: 20px;
    }

.card {
  min-width: 280px; /* ukuran minimal per card */
  flex: 0 0 auto;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  overflow: hidden;
}

.slide-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  background: rgba(0,0,0,0.5);
  color: #fff;
  font-size: 24px;
  padding: 10px 14px;
  cursor: pointer;
  z-index: 10;
  border-radius: 50%;
}

.slide-btn.left {
  left: 10px;
}

.slide-btn.right {
  right: 150px;
}


    /* Scroll bar style for sidebar - subtle */
    .sidebar::-webkit-scrollbar {
      width: 6px;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background-color: #c1c6d0;
      border-radius: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 900px) {
      .sidebar {
        width: 70px;
        padding-left: 12px;
      }
      .logo-text {
        display: none;
      }
      nav a {
        justify-content: center;
      }
      nav a span {
        display: none;
      }
      .main-content {
        margin-left: 70px;
        padding: 30px 24px 48px 24px;
      }
      .dashboard-cards {
        justify-content: center;
      }
    }
    @media (max-width: 600px) {
      .dashboard-cards {
        flex-direction: column;
        gap: 24px;
      }
      .dashboard-card {
        max-width: 100%;
      }
      .cards-grid {
        flex-direction: column;
        gap: 28px;
      }
      .cards-grid .card {
        max-width: 100%;
        min-width: auto;
      }
    }
    </style>
</head>
<body>
<?php 

include 'sidebar.php';

?>

    <main class="main-content" role="main" aria-label="Dashboard main content">
        <section class="header-blue">
            <h1>Dashboard</h1>
            <div class="dashboard-cards">
                <article class="dashboard-card" tabindex="0" aria-labelledby="artCountLabel artCountDesc">
                    <span id="artCountLabel" aria-live="polite"><?php echo $articleCount; ?></span>
                    <small id="artCountDesc">Total Artikel</small>
                </article>
                <article class="dashboard-card" tabindex="0" aria-labelledby="photoCountLabel photoCountDesc">
                    <span id="photoCountLabel" aria-live="polite"><?php echo $mediaCount; ?></span>
                    <small id="photoCountDesc">Total Foto</small>
                </article>
                <article class="dashboard-card" tabindex="0" aria-labelledby="mediaCountLabel mediaCountDesc">
                    <span id="mediaCountLabel" aria-live="polite"><?php echo $mediaCount + $articleCount; ?></span>
                    <small id="mediaCountDesc">Total Media</small>
                </article>
            </div>
        </section>

        <section class="category-section" aria-label="Artikel section">
            <h2>Artikel</h2>

            <!-- Tombol Navigasi -->
            <div class="cards-wrapper">
                <div class="cards-grid">
                    <?php foreach ($articles as $article): ?>
                    <article class="card" tabindex="0" aria-labelledby="art<?php echo $article['id']; ?>-title" aria-describedby="art<?php echo $article['id']; ?>-desc art<?php echo $article['id']; ?>-date">
                        <div class="card-image">
                            <img src="<?php echo $article['image_url']; ?>" 
                                alt="<?php echo htmlspecialchars($article['title']); ?>" 
                                onerror="this.style.display='none'" />
                        </div>
                        <div class="card-content">
                            <strong id="art<?php echo $article['id']; ?>-title">
                              <a href="view.php?id=<?php echo $article['id']; ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                              </a>
                            </strong>
                            <p id="art<?php echo $article['id']; ?>-desc">
                              <?php echo htmlspecialchars(mb_strimwidth($article['description'], 0, 100, "...")); ?>
                            </p>
                            <time id="art<?php echo $article['id']; ?>-date" datetime="<?php echo $article['date']; ?>">
                              <?php echo date('d/m/Y', strtotime($article['date'])); ?>
                            </time>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


        <section class="category-section" aria-label="Media section">
          <h2>Media</h2>
          <!-- Tombol Navigasi -->
          <div class="cards-wrapper">
            <div class="cards-grid">
              <?php foreach ($media as $item): ?>
              <article class="card" tabindex="0">
                <div class="card-image">
                  <img src="uploads/<?php echo $item['image_url']; ?>" alt="Media Image" onerror="this.style.display='none'" />
                </div>
              </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

</main>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const wrapper = document.querySelector(".cards-wrapper");
        const leftBtn = document.querySelector(".slide-btn.left");
        const rightBtn = document.querySelector(".slide-btn.right");

        const scrollAmount = 300; // jarak geser

        leftBtn.addEventListener("click", () => {
          wrapper.scrollBy({ left: -scrollAmount, behavior: "smooth" });
        });

        rightBtn.addEventListener("click", () => {
          wrapper.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
      });
    </script>

</body>
</html>
