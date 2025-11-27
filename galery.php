<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ESACO - Services</title>
  <link rel="stylesheet" href="style.css">

  <style>
  /* --- Pindahkan ke styles.css kalau mau --- */

  /* Popup fullscreen */
.popup-gallery {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(0,0,0,0.5);
  width: 80%;
  height: 80%;
  overflow-y: auto;
  position: relative;
  }
  .popup-content { padding: 1rem; position: relative; }
  .popup-close {
    position: absolute;
    top: 10px; right: 20px;
    font-size: 28px; cursor: pointer;
  }
  .popup-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(200px,1fr));
    gap: 1rem;
    margin-top: 1rem;
  }
  .popup-grid img {
    width: 100%; height: 150px; object-fit: cover;
    border-radius: 8px; cursor: pointer;
  }

    .popup-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.4);   /* gelap transparan */
  backdrop-filter: blur(6px);    /* efek blur background */
  display: none;                 /* default hidden */
  justify-content: center;
  align-items: center;
  z-index: 1000;
}


  /* Lightbox */
  .lightbox {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.85);
    z-index: 2000;
    justify-content: center;
    align-items: center;
  }
  .lightbox img {
    max-width: 80%;
    max-height: 80%;
    border-radius: 8px;
  }
  .lightbox-close {
    position: absolute;
    top: 20px; right: 40px;
    font-size: 35px; color: #fff;
    cursor: pointer;
  }
  .lightbox-nav span {
    position: absolute;
    top: 50%;
    font-size: 40px;
    color: #fff;
    cursor: pointer;
    padding: 10px;
    user-select: none;
  }
  #lightbox-prev { left: 20px; }
  #lightbox-next { right: 20px; }
  </style>
</head>
<body>
  <header>

<section class="gallery-section" aria-labelledby="gallery-title">
  <h2 id="gallery-title" tabindex="0">Gallery Company</h2>

  <!-- Kategori -->
  <div class="categories" aria-label="Gallery categories">
    <label data-category="all">ALL</label>
    <label data-category="kebakaran">KEBAKARAN</label>
    <label data-category="ketinggian">KETINGGIAN</label>
    <label data-category="listrik">LISTRIK</label>
    <label data-category="pesawat angkat & angkut">PESAWAT ANGKAT & ANGKUT</label>
    <label data-category="pesawat tenaga & produksi">PESAWAT TENAGA & PRODUKSI</label>
    <label data-category="manajemen k3">MANAJEMEN K3</label>
  </div>

  <!-- Carousel radios -->
  <input type="radio" name="carousel-radio" id="slide1" checked />
  <input type="radio" name="carousel-radio" id="slide2" />
  <input type="radio" name="carousel-radio" id="slide3" />

  <!-- Carousel container -->
  <div class="carousel-container">
    <div class="carousel" aria-label="Gallery image carousel">
      <div class="carousel-inner" id="gallery-images"></div>
    </div>

    <!-- Pagination dots -->
    <div id="carousel-dots" class="pagination-dots" role="tablist" aria-label="Gallery navigation dots"></div>
  </div>
</section>

<!-- ===== POPUP & LIGHTBOX DIPINDAH KE LUAR .carousel-container ===== -->
 <div id="popup-overlay" class="popup-overlay">
<div id="popup-gallery" class="popup-gallery" aria-modal="true" role="dialog">
  <div class="popup-content">
    <span class="popup-close" aria-label="Close">&times;</span>
    <h3 id="popup-title">Gallery</h3>
    <div class="popup-grid" id="popup-grid"></div>
  </div>
</div>
 </div>

<div id="lightbox" class="lightbox" aria-modal="true" role="dialog">
  <span class="lightbox-close" aria-label="Close">&times;</span>
  <img id="lightbox-img" src="" alt="Preview">
  <div class="lightbox-nav">
    <span id="lightbox-prev" aria-label="Previous">&#10094;</span>
    <span id="lightbox-next" aria-label="Next">&#10095;</span>
  </div>
</div>
<!-- ================================================================ -->

<script>
document.addEventListener('DOMContentLoaded', function () {
  // ====== STATE (satu tempat) ======
  let allImages = [];
  let currentIndex = 0;
  let autoSlide;
  let currentPopupImages = [];
  let currentLightboxIndex = 0;

  // ====== ELEMEN DOM ======
  const gallery = document.getElementById('gallery-images');
  const dotsContainer = document.getElementById('carousel-dots');
  const categoryLabels = document.querySelectorAll('.categories label');

  const popup = document.getElementById('popup-gallery');
  const popupGrid = document.getElementById('popup-grid');
  const popupTitle = document.getElementById('popup-title');
  const popupClose = document.querySelector('.popup-close');
  const popupOverlay = document.getElementById('popup-overlay');

  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxClose = document.querySelector('.lightbox-close');
  const prevBtn = document.getElementById('lightbox-prev');
  const nextBtn = document.getElementById('lightbox-next');

  // ====== UTIL ======
  function shuffle(array) {
    return array.sort(() => Math.random() - 0.5);
  }

  function buildDots(totalDots = 3) {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalDots; i++) {
      const dot = document.createElement('span');
      dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
      dot.addEventListener('click', () => {
        currentIndex = i;
        updateCarousel();
        startAutoSlide();
      });
      dotsContainer.appendChild(dot);
    }
  }

// Daftar kategori yang valid sesuai label hardcode
const validCategories = [
  "kebakaran",
  "ketinggian",
  "listrik",
  "pesawat angkat & angkut",
  "pesawat tenaga & produksi",
  "manajemen k3"
];

const excludedFromAll = ["asset", "partner"]; // daftar kategori yang disembunyikan

function filterImages(category) {
    let filtered;
    if (category === 'all') {
        filtered = allImages.filter(img => !excludedFromAll.includes(img.category));
    } else {
        filtered = allImages.filter(img => (img.category || '').toLowerCase() === category.toLowerCase());
    }

    renderImages(filtered);
}



//   function filterImages(category) {
//     const filtered = category === 'all'
//         ? allImages
//         : allImages.filter(img => (img.category || '').toLowerCase() === category.toLowerCase());

//     renderImages(filtered);
// }


  function loadImages(filterKategori = '') {
    gallery.innerHTML = '';
    let filtered = filterKategori === 'all'
      ? shuffle([...allImages]) // acak semua gambar
      : (filterKategori
          ? allImages.filter(img => (img.category || '').toLowerCase() === filterKategori.toLowerCase())
          : allImages);

    if (filtered.length === 0) {
      gallery.innerHTML = "<p style='text-align:center;margin:1rem 0;'>Tidak ada gambar</p>";
      dotsContainer.innerHTML = '';
      return;
    }

    // Render item carousel (1 gambar per slide versi kamu)
    filtered.forEach((img, index) => {
      const item = document.createElement('div');
      item.className = 'carousel-item' + (index === 0 ? ' active' : '');
      item.innerHTML = `<img src="${img.image_url}" alt="${img.category || 'gallery'}" loading="lazy">`;
      gallery.appendChild(item);
    });

    currentIndex = 0;
    updateCarousel();

    // Tetap 3 dot seperti logic kamu
    buildDots(3);
    startAutoSlide();
  }

  function updateCarousel() {
    const items = gallery.querySelectorAll('.carousel-item');
    const totalItems = items.length;
    if (!totalItems) return;

    const offset = -(currentIndex * 100);
    gallery.style.transform = `translateX(${offset}%)`;

    const dots = dotsContainer.querySelectorAll('.carousel-dot');
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIndex);
    });
  }

  function nextSlide() {
    const totalDots = 3; // tetap 3
    currentIndex = (currentIndex + 1) % totalDots;
    updateCarousel();
  }

  function startAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(nextSlide, 3000);
  }

  // ====== POPUP ======
  function openPopup(category, images) {
    popupGrid.innerHTML = '';
    popupTitle.textContent = (category || 'Gallery').toUpperCase();
    currentPopupImages = images;

    images.forEach((img, i) => {
      const el = document.createElement('img');
      el.src = img.image_url;
      el.alt = img.category || 'gallery';
      el.addEventListener('click', () => openLightbox(i));
      popupGrid.appendChild(el);
    });

    popupOverlay.style.display = 'flex';
  }

  function closePopup() {
    popupOverlay.style.display = 'none';
  }

  popupClose.addEventListener('click', closePopup);
  popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) closePopup(); // klik area luar
  });

  // ====== LIGHTBOX ======
  function openLightbox(index) {
    currentLightboxIndex = index;
    lightboxImg.src = currentPopupImages[index].image_url;
    lightbox.style.display = 'flex';
  }

  function closeLightbox() {
    lightbox.style.display = 'none';
  }

  prevBtn.addEventListener('click', () => {
    currentLightboxIndex = (currentLightboxIndex - 1 + currentPopupImages.length) % currentPopupImages.length;
    lightboxImg.src = currentPopupImages[currentLightboxIndex].image_url;
  });
  nextBtn.addEventListener('click', () => {
    currentLightboxIndex = (currentLightboxIndex + 1) % currentPopupImages.length;
    lightboxImg.src = currentPopupImages[currentLightboxIndex].image_url;
  });
  lightboxClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox(); // klik area luar
  });

  // ESC untuk menutup
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeLightbox();
      closePopup();
    }
  });

  // ====== EVENT KATEGORI ======
 // Klik sekali: buka popup (grid semua gambar)
categoryLabels.forEach(label => {
  label.addEventListener('click', function (e) {
    e.preventDefault();

    // tetap jalanin filter carousel
    categoryLabels.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
    const category = this.dataset.category || ''; 

    // lalu buka popup grid
    const filtered = (category === 'all')
      ? allImages
      : allImages.filter(img => (img.category || '').toLowerCase() === category.toLowerCase());
    openPopup(category, filtered);
  });
});


  // ====== FETCH DATA ======
  fetch('api.php')
    .then(res => res.json())
    .then(data => {
        // Filter hanya yang kategorinya ada di daftar
        allImages = (Array.isArray(data) ? data : []).filter(img => 
          validCategories.includes((img.category || '').toLowerCase())
        );

        loadImages('all'); // default tampilkan
      })
      .catch(err => console.error('[API] gagal:', err));
    });
</script>
</body>
</html>
