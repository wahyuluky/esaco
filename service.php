<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ESACO - Services</title>
  <style>
    /* Reset & base */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #fff;
      color: #222;
      line-height: 1.5;
      font-size: 15px;
    }
    a {
      color: #2561f0;
      text-decoration: none;
      cursor: pointer;
    }
    a:hover, a:focus {
      outline: none;
    }
    img {
      display: block;
      max-width: 100%;
      height: auto;
    }
    button {
      cursor: pointer;
      font-family: inherit;
    }

    /* Container */
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Header & Navigation */
header {
    background-color: #fff;
    box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    max-width: 1200px;
    margin: 0 auto;
}
.logo {
  display: flex;
  align-items: center;
  font-weight: 700;
  font-size: 1.3rem;
  color: #14264c;
  user-select: none;
}
.logo img {
  width: 150px;
  margin-right: 0.5rem;
  cursor: pointer;
}
nav {
  display: flex;
  gap: 1.7rem;
}
nav a {
  font-size: 1rem;
  padding: 0.3rem 0.2rem;
  color: #14264c;
  font-weight: 600;
  transition: color 0.3s ease;
  white-space: nowrap;
}
nav a:hover,
nav a.active {
  color: #2563eb;
  border-bottom: 2px solid #2563eb;
  padding-bottom: 0.25rem;
}
.btn-contact {
  background-color: #2563eb;
  color: white;
  padding: 10px 20px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.9rem;
  box-shadow: 0 4px 8px rgb(37 99 235 / 0.4);
  transition: box-shadow 0.3s ease;
  border: none;
}


.btn-contact:hover,
.btn-contact:focus {
  box-shadow: 0 6px 14px rgb(37 99 235 / 0.65);
  outline: none;
}

    /* Hero Section (video thumbnail with play icon) */
    .hero-video {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      margin: 20px 5% 50px 5%;
      user-select:none;
      max-height: 500px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }
    .hero-video img {
      width: 100%;
      display: block;
      border-radius: 12px;
      /* filter: brightness(0.75); */
      user-select:none;
    }
    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(255 255 255 / 0.9);
      border-radius: 50%;
      width: 64px;
      height: 64px;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background-color 0.3s ease;
      cursor: pointer;
      user-select:none;
    }
    .play-button:hover,
    .play-button:focus {
      background-color: #2561f0;
      outline: none;
    }
    .play-button svg {
      width: 28px;
      height: 28px;
      fill: #2561f0;
      transition: fill 0.3s ease;
    }
    .play-button:hover svg,
    .play-button:focus svg {
      fill: white;
    }

    /* Section header */
    section h2.section-header {
      text-align: center;
      font-size: 1.75rem;
      font-weight: 700;
      color: #1e2a72;
      margin-bottom: 0.2rem;
      user-select:none;
    }
    section p.section-subheader {
      font-size: 1rem;
      text-align: center;
      margin-top: 0;
      margin-bottom: 3rem;
      color: #222;
      user-select:none;
    }

    /* Services Cards */
    .services-cards {
      max-width: 1200px;
      margin: 0 auto 50px auto;
      display: flex;
      justify-content: center;
      gap: 24px;
      flex-wrap: wrap;
      padding: 0 15px;
      user-select:none;
    }
    .service-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 5px 10px rgb(0 0 0 / 0.05);
      flex: 1 1 280px;
      max-width: 320px;
      padding: 28px 24px 24px 24px;
      display: flex;
      flex-direction: column;
      gap: 18px;
      color: #1e2a72;
      transition: box-shadow 0.3s ease;
    }
    .service-card:hover,
    .service-card:focus-within {
      box-shadow: 0 10px 20px rgb(37 97 240 / 0.24);
      outline: none;
    }
    .service-card-icon {
      width: 38px;
      height: 38px;
      fill: #1e2a72;
      user-select:none;
    }
    .service-card-title {
      font-weight: 700;
      font-size: 1.1rem;
    }
    .service-card-desc {
      font-weight: 400;
      font-size: 0.9rem;
      color: #333;
      line-height: 1.3rem;
    }

    /* Services detail horiz sections */
    .service-details {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto 60px auto;
      padding: 0 15px;
      user-select:none;
    }
    .service-row {
      display: flex;
      gap: 24px;
      margin-bottom: 50px;
      flex-wrap: wrap;
      align-items: center;
      user-select:none;
    }
    .service-row:nth-child(even) {
      flex-direction: row-reverse;
      align-items: center;
      display: flex;
      justify-content: center;
    }
    .service-row-title {
      flex: 1 1 260px; 
      font-weight: 700;
      font-size: 1.25rem;
      color: #1e2a72;
      user-select:none;
      min-width: 200px;

      display: flex;
      align-items: center;
      justify-content: center;
    }

   #training-label {
    display: flex;
    align-items: center;
    justify-content: center; /* atau flex-end untuk agak kanan */
}

    .service-texts {
      background-color: #e9f0ff;
      flex: 3 1 600px;
      display: flex;
      padding: 24px 20px;
      gap: 36px;
      border-radius: 10px;
      box-shadow: 0 0 5px rgb(37 97 240 / 0.15);
      flex-wrap: wrap;
    }
    .service-text {
      flex: 1 1 250px;
      font-size: 0.9rem;
      line-height: 1.15rem;
      color: #222;
      user-select:none;
    }


    /* Responsive */
    @media (max-width: 900px) {
      /* .service-row {
        flex-direction: column !important;
      }
      .service-row:nth-child(even) {
        flex-direction: column !important;
      }
      .service-row-title {
        margin-bottom: 12px;
      } */
      .filter-buttons button {
        margin: 10px;
      }
    }
    @media (max-width: 640px) {
      header {
        flex-wrap: wrap;
        justify-content: center;
        gap: 18px;
      }
      nav {
        gap: 16px;
      }
      .gallery-cards {
        gap: 16px;
      }
      .gallery-card {
        min-width: 140px;
      }
      .filter-buttons button {
        margin: 10px;
      }
    }

    @media (max-width: 480px) {
    /* Services Cards */
    .services-cards {
      margin: 0;
    }

      .filter-buttons button {
        margin: 10px;
      }
    }

.pagination-dots .carousel-dot {
  display: inline-block;
  width: 9px;
  height: 9px;
  background-color: #a3bffa;
  border-radius: 50%;
  margin: 0 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
.pagination-dots .carousel-dot.active {
  background-color: #3b82f6;
}
.categories label.active {
  background-color: #1e40af;
}

  </style>
</head>
<body>
<?php 
    include 'header.php';

    $sql = "SELECT * FROM gallery WHERE id IN (15)";
    $result = $conn->query($sql);

    $images = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $images[$row['id']] = $row; // simpan per id
        }
    }
?>

  <main>
    <section class="hero-video" aria-label="Workers in factory video preview">
      <!-- <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7e2b4344-62e1-4a6e-8586-e05334046ac9.png" alt="Three factory workers in blue uniforms and yellow helmets in an industrial workshop with background blurred" /> -->
       <img
        src="uploads/<?php echo $images[15]['image_url']; ?>"
        alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
        onerror="this.style.display='none'"
      />
    </section>

    <section aria-labelledby="services-header" class="container">
      <h2 id="services-header" class="section-header">What Services We Offer For You</h2>
      <p class="section-subheader">Landasan yang membimbing setiap langkah dan keputusan bisnis kami</p>


      <section aria-label="Service details" class="service-details">
        <article class="service-row" tabindex="0" aria-labelledby="consulting-label">
          <h3 id="consulting-label" class="service-row-title">Consulting</h3>
          <div class="service-texts">
            <p class="service-text"> 
                Membantu client dalam memecahkan masalah yang ada di perusahaan 
                atau pada organisasi mereka merupakan tujuan utama kami dalam 
                memberikan layanan.
            </p>
            <p class="service-text">
                Sehingga client dapat memenuhi persyaratan yang 
                diminta oleh customer maupun partner bisnis dalam menjalankan kegiatan 
                usaha.
            </p>
          </div>
        </article>
        <article class="service-row" tabindex="0" aria-labelledby="training-label">
          <h3 id="training-label" class="service-row-title">Training</h3>
          <div class="service-texts">
            <p class="service-text">
                Dalam upaya memberikan layanan berupa Pelatihan, ESACO merupakan 
                suatu wadah (training center) dimana seorang praktisi/professional dapat 
                mentransfer ilmu pengetahuan yang ada.
            </p>
            <p class="service-text">
                Pelatihan yang ada dapat berupa 
                softskill maupun kompetensi, adapun pelatihan yang ada terbagi menjadi 
                beberapa konsentrasi.
            </p>
          </div>
        </article>
        <article class="service-row" tabindex="0" aria-labelledby="assessment-label">
          <h3 id="assessment-label" class="service-row-title">Assessment</h3>
          <div class="service-texts">
            <p class="service-text">
                Layanan Assessment kami membantu perusahaan melakukan evaluasi menyeluruh, mulai dari Risk Assessment untuk mengidentifikasi potensi risiko bisnis, Vendor/Supplier Assessment untuk memastikan keandalan rantai pasok,
            <p class="service-text">
                hingga Assessment SDM dalam menilai kompetensi dan kinerja karyawan. Dengan pendekatan ini, perusahaan dapat mengambil keputusan yang lebih tepat, strategis, dan berorientasi pada pertumbuhan berkelanjutan.
            </p>
          </div>
        </article>
      </section>
    </section>

<?php include 'galery.php'; ?>


<?php include 'footer.php'; ?>

<script>
    (async() => {
      const response = await fetch("get_gallery.php");
      const data = await response.json();
      const galleryItems = data.gallery;
      const categories = data.categories;
      
      const galleryContainer = document.querySelector('.gallery-container');
      const filterButtonsContainer = document.querySelector('.filter-buttons');

      // Render tombol filter
      filterButtonsContainer.innerHTML = `
        <button class="filter-btn active" data-filter="semua" type="button">ALL</button>
      `;
      categories.forEach(cat => {
        const btn = document.createElement("button");
        btn.className = "filter-btn";
        btn.type = "button";
        btn.setAttribute("data-filter", cat.name.toLowerCase());
        btn.textContent = cat.name.toUpperCase();
        filterButtonsContainer.appendChild(btn);
      });

      const paginationDotsContainer = document.querySelector('.pagination-dots');

      // Pagination setup - 4 items, show all on one page as per image, dots shown as 3
      // We'll mimic the dots but only one page since items are 4 (like example)
      // For scalability, implement pagination logic, but here just one page.

      // Render gallery
    function renderGallery(filter = 'semua') {
    galleryContainer.innerHTML = '';

    const filteredItems =
      filter === 'semua'
        ? galleryItems
        : galleryItems.filter(item => item.category.toLowerCase() === filter);

    filteredItems.forEach(item => {
      const div = document.createElement('div');
      div.className = 'gallery-item';

      const img = document.createElement('img');
      img.src = "uploads/" + item.image_url;
      img.alt = item.alt ?? '';
      img.onerror = function() {
        this.src = 'fallback.png';
      };


          div.appendChild(img);
          galleryContainer.appendChild(div);
        });

        // If no results show a hint
        if (filteredItems.length === 0) {
          const noResults = document.createElement('p');
          noResults.textContent = 'Tidak ada gambar pada kategori ini.';
          noResults.style.color = '#999';
          noResults.style.fontStyle = 'italic';
          galleryContainer.appendChild(noResults);
        }
      }

      // Pagination dots render - as example, show three dots with first active
      // Provide click events on dots (pagination not implemented as items <4)
      function renderPaginationDots(activeIndex = 0) {
        paginationDotsContainer.innerHTML = '';
        const dotsCount = 3;
        for (let i = 0; i < dotsCount; i++) {
          let dot = document.createElement('button');
          dot.type = 'button';
          dot.className = 'dot';
          dot.setAttribute('aria-label', `Goto page ${i + 1}`);
          if (i === activeIndex) {
            dot.classList.add('active');
            dot.setAttribute('aria-current', 'true');
          }
          // Dot click can highlight dot only since no pagination needed for 4 items
          dot.addEventListener('click', () => {
            const dots = paginationDotsContainer.querySelectorAll('.dot');
            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');
          });
          paginationDotsContainer.appendChild(dot);
        }
      }

    // Event tombol filter
      filterButtonsContainer.addEventListener("click", e => {
        if (e.target.classList.contains("filter-btn")) {
          document.querySelectorAll(".filter-btn").forEach(btn => btn.classList.remove("active"));
          e.target.classList.add("active");
          renderGallery(e.target.getAttribute("data-filter"));
        }
      });

      

      // Initial render all images and dots
      renderGallery('semua');
      renderPaginationDots(0);
    })();

</script>

</html>