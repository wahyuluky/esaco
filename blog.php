<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Esaco Blog</title>
  <link rel="stylesheet" href="style.css">
  <style>
    :root {
      --blue: #2b379e;
      --blue-light: #3267ff;
      --dark-blue: #1d2c68;
      --footer-bg: #152e73;
      --banner-bg: #3267ff;
      --gray-light: #a0a0a0;
      --gray-lighter: #f7f8fc;
      --white: #fff;
      --shadow-light: rgba(0, 0, 0, 0.1);
    }

    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .page-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px 60px 20px;
      user-select: none;
    }

    /* HEADER */
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 22px 20px 22px 20px;
    }

    /* MAIN LEAD ARTICLE */
    .lead-article {
      margin-top: 25px;
      display: flex;
      background-color: #fff;
      box-shadow: 0 4px 8px var(--shadow-light);
      border-radius: 10px;
      overflow: hidden;
      gap: 24px;
      user-select: none;
    }
    .lead-article .image-container {
      flex: 1.2;
      min-width: 280px;
      max-width: 450px;
      overflow: hidden;
      border-radius: 10px;
    }
    .lead-article img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover; 
      border-radius: 10px;
      user-select: none;
    }
    .lead-article .text-content {
      flex: 2;
      padding: 24px 24px 24px 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      line-height: 1.5;
    }
    .lead-article h2 {
      color: var(--blue);
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 14px;
      user-select: text;
    }
    .lead-article p {
      font-size: 1rem;
      color: #333;
      letter-spacing: 0.01em;
      line-height: 1.5;
    }
    .lead-article .date {
      font-size: 0.8rem;
      color: var(--gray-light);
      align-self: flex-end;
      margin-top: 20px;
      user-select: text;
    }
    .lead-article .read-more {
      font-weight: 600;
      font-size: 0.95rem;
      margin-top: 24px;
      user-select: none;
      white-space: nowrap;
    }
    .read-more svg {
      width: 14px;
      height: 14px;
      margin-left: 4px;
      stroke: var(--blue);
      stroke-width: 2;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke 0.25s ease;
    }
    a.read-more:hover svg,
    a.read-more:focus svg {
      stroke: var(--blue-light);
      outline: none;
    }

    /* RECENT ARTICLES HEADING */
    .recent-articles-section {
      margin-top: 60px;
    }
    .recent-header h2 {
      color: var(--blue);
      font-size: 1.125rem;
      font-weight: 700;
      margin-bottom: 4px;
      user-select: text;
    }
    .recent-header p {
      font-size: 1rem;
      color: #111;
      user-select: text;
      margin-top: -2px;
    }

    /* RECENT ARTICLES GRID */
    .articles-grid {
      margin-top: 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 32px 22px;
      user-select: none;
    }

    /* ARTICLE CARD */
    article.card {
      box-shadow: 0 4px 8px var(--shadow-light);
      border-radius: 10px;
      background-color: #fff;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      user-select: none;
      transition: box-shadow 0.3s ease;
    }
    article.card:hover,
    article.card:focus-within {
      box-shadow: 0 8px 20px rgba(43, 55, 158, 0.3);
      outline: none;
    }

    .card-image {
      flex-shrink: 0;
      width: 100%;
      height: 158px;
      overflow: hidden;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      vertical-align: middle;
      user-select: none;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .card-content {
      padding: 15px 18px 20px 18px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }
    .card-content header {
      margin-bottom: 6px;
    }
    .card-content h4 {
      font-weight: 700;
      font-size: 1rem;
      color: var(--blue);
      margin-bottom: 6px;
      user-select: text;
    }
    .card-content p {
      font-size: 0.9rem;
      color: #222;
      line-height: 1.4;
      user-select: text;
    }
    .card-content time {
      display: block;
      font-size: 0.7rem;
      color: var(--gray-light);
      user-select: text;
      margin-top: 6px;
    }
    .card-content a.read-more-card {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      margin-top: 12px;
      color: var(--blue);
      font-weight: 600;
      font-size: 0.875rem;
      white-space: nowrap;
      user-select: none;
    }
    .card-content a.read-more-card svg {
      width: 14px;
      height: 14px;
      stroke: var(--blue);
      stroke-width: 2;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke 0.25s ease;
    }
    .card-content a.read-more-card:hover svg,
    .card-content a.read-more-card:focus svg {
      stroke: var(--blue-light);
      outline: none;
    } 
  </style>
</head>
<body>
 
<?php 

include 'connect.php';
include 'header.php'; 
?>

  <main class="page-wrapper" role="main">
  <!-- Lead article -->
  <section class="lead-article" aria-labelledby="lead-article-title">
    <div class="image-container">
      <img id="lead-article-img" src="" alt="Lead article image" />
    </div>
    <div class="text-content">
      <h2 id="lead-article-title"></h2>
      <p id="lead-article-desc"></p>
      <span class="date" id="lead-article-date"></span>
      <a href="#" id="lead-article-link" class="read-more">
        Read More
        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false">
          <path d="M4 8h8M10 4l4 4-4 4" />
        </svg>
      </a>
    </div>
  </section>

  <!-- Recent Articles -->
  <section class="recent-articles-section" aria-labelledby="recent-articles-header">
    <div class="recent-header">
      <h2 id="recent-articles-header">Our Recent Articles</h2>
      <p>Stay Informed with Our Latest Insight</p>
    </div>
    <div class="articles-grid" role="list" aria-label="Recent blog articles listing"></div>
  </section>
</main>

<?php include 'footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  fetch('fetch_articles.php')
    .then(response => response.json())
    .then(articles => {
      if (!articles || articles.length === 0) return;

      // Fungsi untuk memotong teks
      function truncateText(text, wordLimit) {
        if (!text) return "";
        const words = text.split(" ");
        if (words.length <= wordLimit) return text;
        return words.slice(0, wordLimit).join(" ") + "...";
      }

      // === Lead Article (artikel terbaru) ===
      const lead = articles[0];
      document.getElementById("lead-article-img").src = lead.image_url;
      document.getElementById("lead-article-img").alt = lead.title;
      document.getElementById("lead-article-title").textContent = lead.title;
      document.getElementById("lead-article-desc").textContent = truncateText(lead.description, 30); // batas 30 kata
      document.getElementById("lead-article-date").textContent = lead.date;
      document.getElementById("lead-article-link").href = "article.php?id=" + lead.id;

      // === Recent Articles (mulai index ke-1) ===
      const articlesGrid = document.querySelector('.articles-grid');
      articlesGrid.innerHTML = ''; // pastikan dikosongkan dulu

      articles.forEach(article => {
        const articleCard = document.createElement('article');
        articleCard.className = 'card';
        articleCard.setAttribute('role', 'listitem');
        articleCard.setAttribute('tabindex', '0');
        articleCard.setAttribute('aria-labelledby', `article${article.id}-title article${article.id}-desc`);

        articleCard.innerHTML = `
          <div class="card-image">
            <img src="${article.image_url}" alt="${article.title}" onerror="this.onerror=null;this.style.display='none';" />
          </div>
          <div class="card-content"> 
            <h4 id="article${article.id}-title">${article.title}</h4>
            <time datetime="${article.date}" aria-label="Published on ${article.date}">
              ${article.date}
            </time> 
            <p id="article${article.id}-desc">${truncateText(article.description, 15)}</p> <!-- batas 15 kata -->
            <a href="article.php?id=${article.id}" class="read-more-card" aria-label="Read more about ${article.title}">
              Read More
              <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                <path d="M4 8h8M10 4l4 4-4 4" />
              </svg>
            </a>
          </div>
        `;
        articlesGrid.appendChild(articleCard);
      });
    })
    .catch(error => console.error('Error fetching articles:', error));
});
</script>

</body>
</html>

