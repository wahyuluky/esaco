<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ESACO - Services</title>

  <style> 
    .partners-section {
  background-color: #325aafff; /* or any color that fits your design */ 
  padding: 1rem 0;
  text-align: center;
}
.partners-grid {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}
.partners-grid img {
  max-width: 150px; /* or preferred width */
  height: auto;
}
.partners-carousel {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  max-width: 90%;
  margin: 0 auto;
}

.partners-wrapper {
  overflow: hidden;
  width: 100%;
}

.partners-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1.5rem;
  justify-items: center;
  align-items: center;
  transition: transform 0.3s ease-in-out;
}

.partners-grid img {
  width: 200px;
  height: 130px;
  object-fit: contain;
  padding: 12px;
  border-radius: 10px; 
}

.partners-btn {
  background: rgba(255,255,255,0.2);
  border: none;
  color: #fff;
  font-size: 2rem;
  cursor: pointer;
  padding: 0.5rem 1rem;
  border-radius: 50%;   /* <-- bikin lingkaran */
  transition: background 0.3s;
  z-index: 10;
}

.partners-btn:hover {
  background: rgba(255,255,255,0.4);
}
  </style>
</head>
<body>

<?php include 'connect.php' ?>

<section class="partners-section" aria-labelledby="partners-title">
  <h2 id="partners-title" tabindex="0" style="color: #fff;">Our Partners</h2>
  <p style="color: #fff";>We are proud to collaborate with trusted partners who support our mutual success.</p>
  <div class="partners-carousel">
    <button id="partners-prev" class="partners-btn">&#10094;</button>
    <div class="partners-wrapper">
      <div class="partners-grid" id="partners-grid"></div>
    </div>
    <button id="partners-next" class="partners-btn">&#10095;</button>
  </div>
</section>

<script>

function initPartnersCarousel() {
  const grid = document.getElementById("partners-grid");
  const prevBtn = document.getElementById("partners-prev");
  const nextBtn = document.getElementById("partners-next");

  let currentPage = 0;
  const itemsPerPage = 5;

  function renderPage() {
    grid.innerHTML = "";
    const start = currentPage * itemsPerPage;
    const end = start + itemsPerPage;
    const pageItems = partnerImages.slice(start, end);

    pageItems.forEach(img => {
      const el = document.createElement("img");
      el.src = img.image_url;
      el.alt = "Partner logo";
      grid.appendChild(el);
    });

    // Disable button kalau sudah mentok
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = end >= partnerImages.length;
  }

  prevBtn.addEventListener("click", () => {
    if (currentPage > 0) {
      currentPage--;
      renderPage();
    }
  });

  nextBtn.addEventListener("click", () => {
    if ((currentPage + 1) * itemsPerPage < partnerImages.length) {
      currentPage++;
      renderPage();
    }
  });

  renderPage();
}


function loadPartners() {
  const partnersGrid = document.getElementById('partners-grid');
  partnersGrid.innerHTML = ""; // clear dulu

  partnerImages.forEach((img) => {
    // pastikan hanya category_id = 13 yang di-render
    if (img.category_id == 13) {
      const el = document.createElement('img');
      el.src = img.image_url;   // sesuai API
      el.alt = img.category_id; 
      partnersGrid.appendChild(el);
    }
  });
}

// ====== FETCH DATA KHUSUS PARTNER ======
fetch('api-partner.php?category_id=13')
  .then(res => res.json())
  .then(data => {
    partnerImages = Array.isArray(data) ? data : [];
    loadPartners();
    initPartnersCarousel(); // fungsi navigasi carousel
  })
  .catch(err => console.error('[API] gagal:', err));

</script>

</body>
</html>
</script>
</body>
</html>
