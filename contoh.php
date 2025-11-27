<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ESACO - Innovative Solutions for Your Business</title>
  <style>
    /* Your CSS styles here */
    /* Reset and base */
*, *::before, *::after {
    box-sizing: border-box;
}
body {
    margin: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    color: #14264c;
    background-color: #fff;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
a {
    color: #1d4ed8;
    text-decoration: none;
    cursor: pointer;
}
a:hover, a:focus {
    outline: none;
}
img {
    max-width: 100%;
    height: auto;
    display: block;
}
h1, h2, h3, h4 {
    margin: 0 0 0.5em 0;
    font-weight: 700;
}
p {
    margin: 0 0 1em 0;
}
button {
    font-family: inherit;
    cursor: pointer;
    border: none;
    border-radius: 6px;
    padding: 0.5em 1.3em;
    font-weight: 600;
    background-color: #2563eb;
    color: white;
    transition: background-color 0.3s ease;
}

btn {
  font-family: inherit;
  cursor: pointer;
  border: none;
  border-radius: 6px;
  padding: 0.5em 1.3em;
  font-weight: 600;
  background-color: #ffff;
  color: #2563eb;
  transition: background-color 0.3s ease;
}
button:hover, button:focus {
    background-color: #1e40af;
    outline: none;
}
.container {
    width: 90%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}
  
/* Hero Section */
.hero-section {
  background: linear-gradient(90deg, #2563eb 0%, #3b82f6 100%);
  color: white;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  padding: 3rem 1rem;
  gap: 2rem;
  min-height: 380px;
}
.hero-text {
  flex: 1 1 320px;
  max-width: 550px;
}
.hero-text h1 {
  font-size: 2.2rem;
  line-height: 1.2;
  margin-bottom: 1rem;
}
.hero-text p {
  font-size: 1.05rem;
  margin-bottom: 1.75rem;
  opacity: 0.85;
  font-weight: 500;
  max-width: 440px;
}
.btn-primary {
  background-color: #f97316;
  padding: 0.6rem 1.6rem;
  font-size: 1rem;
  font-weight: 700;
  box-shadow: 0 5px 10px rgb(249 115 22 / 0.4);
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  border-radius: 10px;
  user-select: none;
}
.btn-primary:hover, .btn-primary:focus {
  background-color: #ea580c;
  box-shadow: 0 7px 18px rgb(234 88 12 / 0.55);
  outline: none;
    }
    .hero-image {
      flex: 1 1 300px;
      max-width: 460px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 26px rgb(0 0 0 / 0.22);
      user-select: none;
      background-color: #1e40af;
      aspect-ratio: 4 / 3;
    }
    .hero-image img {
      object-fit: cover;
      height: 100%;
      width: 100%;
      display: block;
    }

    /* About Section */
    .about-section {
      padding: 4rem 1rem 3rem 1rem;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
      align-items: flex-start;
      color: #1e293b;
    }
    .about-left {
      flex: 1 1 100px;
      max-width: 400px;
      /* border-radius: 20px; */
      overflow: hidden;
      /* box-shadow: 0 6px 18px rgb(0 0 0 / 0.15); */
      user-select: none;
      background-color: #fff;
    }
    .about-left img {
      /* width: 100%; */
      height: 350px;
      display: block;
      object-fit: cover;
    }
    .about-right {
      flex: 2 1 500px;
      min-width: 320px;
      color: #14264c;
    }
    .about-right h2 {
      font-weight: 800;
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }
    .about-right p {
      font-weight: 500;
      line-height: 1.5;
    }

    /* Services Section */
    .services-section {
      padding: 3rem 1rem 3.5rem;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
      color: #14264c;
    }
    .services-section h2 {
      font-weight: 700;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      user-select: none;
    }
    .service-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }
    .service-card {
      background-color: #f9fafc;
      border-radius: 15px;
      box-shadow: 0 6px 14px rgb(0 0 0 / 0.08);
      padding: 2rem 1.4rem 2.3rem;
      max-width: 320px;
      flex: 1 1 280px;
      text-align: left;
      transition: box-shadow 0.3s ease;
      user-select: none;
      cursor: default;
    }
    .service-card:hover {
      box-shadow: 0 10px 30px rgb(0 0 0 / 0.14);
    }
    .service-icon {
      width: 45px;
      height: 45px;
      margin-bottom: 1rem;
      color: #1e2a72;
      fill: currentColor;
    }

      .service-card-icon {
      width: 45px;
      height: 45px;
      fill: #1e2a72;
      user-select:none;
      margin-bottom: 1rem;
    }

    .service-card h3 {
      font-weight: 700;
      margin-bottom: 0.7rem;
      font-size: 1.15rem;
    }
    .service-card p {
      font-size: 0.9rem;
      color: #334155;
      line-height: 1.4;
      margin-bottom: 1.1rem;
    }
    .service-card a {
      font-weight: 600;
      font-size: 0.9rem;
      color: #2563eb;
      display: inline-flex;
      align-items: center;
    }
    .service-card a::after {
      content: "→";
      margin-left: 0.3rem;
      font-weight: 700;
      transition: margin-left 0.3s ease;
    }
    .service-card a:hover::after,
    .service-card a:focus::after {
      margin-left: 0.7rem;
      outline: none;
    }

    /* Vision and Mission Section */

        /* About Company Section */
    .about-company {
      max-width: 1200px;
      margin: 2rem auto 0;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 0 1rem;
      align-items: center;
      justify-content: center;
    }
    .about-img {
      flex: 1 1 320px;
      max-width: 300px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgb(0 0 0 / 0.1);
    }
    .about-img img {
      border-radius: 16px;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }
    .about-text {
      flex: 1 1 400px;
      background: white;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgb(0 0 0 / 0.1);
      padding: 1rem;
      font-size: 1rem;
      color: #3b4371;
      line-height: 1.5;
      user-select: none;
      position: relative;
      min-width: 280px;
    }
    .about-text h3 {
      color: #1e2a5a;
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .about-text p {
      margin-bottom: 1.5rem;
    }


    /* Align Costs Section */
    .align-costs {
      max-width: 1200px;
      margin: 4rem auto 4rem;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 0 1rem;
      align-items: center;
      justify-content: center;
    }
    .align-text {
      flex: 1 1 400px;
      background: white;
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgb(0 0 0 / 0.1);
      font-size: 1rem;
      color: #3b4371;
      line-height: 1.5;
      user-select: none;
      min-width: 280px;
    }
    .align-text h3 {
      color: #1e2a5a;
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .align-text p {
      margin-bottom: 1.5rem;
    }
    .align-img {
      flex: 1 1 320px;
      max-width: 600px;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgb(0 0 0 / 0.1);
    }
    .align-img img {
      border-radius: 16px;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .vision-mission-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 1rem 0.2rem 1rem;
      color: #14264c;
      text-align: center;
    }
    .vision-mission-section h2 {
      font-weight: 700;
      margin-bottom: 0.2rem;
      user-select: none;
    }
    .vision-mission-section p.lead {
      font-weight: 500;
      color: #475569;
      margin-bottom: 50px;
      font-size: 1.1rem;
      user-select: none;
    }
    
    /* Articles Section */
    .articles-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 3rem 1rem 4rem;
      color: #14264c;
      text-align: center;
    }
    .articles-section h2 {
      font-weight: 700;
      margin-bottom: 2rem;
      user-select: none;
    }
    .article-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }
    .article-card {
      background-color: #fff;
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.08);
      border-radius: 12px;
      max-width: 320px;
      flex: 1 1 300px;
      padding: 0.7rem;
      text-align: left;
      user-select: none;
      display: flex;
      flex-direction: column;
    }
    .article-card img {
      border-radius: 12px;
      margin-bottom: 1rem;
      object-fit: cover;
      width: 100%;
      height: 170px;
      user-select: none;
      pointer-events: none;
    }
    .article-title {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.15rem;
      color: #2563eb;
    }
    .article-date {
      font-size: 0.8rem;
      color: #64748b;
      margin-bottom: 0.7rem;
    }
    .article-description {
      font-weight: 500;
      line-height: 1.3;
      flex-grow: 1;
      margin-bottom: 1rem;
      color: #334155;
    }
    .article-readmore {
      font-weight: 600;
      font-size: 0.9rem;
      color: #2563eb;
      cursor: pointer;
      align-self: flex-start;
    }
    .article-readmore:hover,
    .article-readmore:focus {
      text-decoration: underline;
      outline: none;
    }

.login-container {
    background-color: #ffffff;
    border: 2px solid #007bff;
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}
.logo h1 {
    font-size: 24px;
    color: #007bff;
    margin-bottom: 20px;
}
.input-field {
    margin-bottom: 15px;
}
.input-field label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
}

/* Gallery Section */
.gallery-section {
  background-color: #fff;
  margin: 0;
  padding: 20px;
  color: #2c3e99;
  text-align: center;
}

    /* Filter Buttons Container */
    .filter-buttons {
      margin-bottom: 30px;
    }
    /* Buttons styling */
    .filter-buttons button {
      background-color: #2c3e99;
      border: none;
      color: white;
      padding: 10px 18px;
      margin: 0 8px;
      border-radius: 8px;
      font-weight: 500;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
      min-width: 95px;
      user-select: none;
    }
    .filter-buttons button:hover {
      background-color: #1f2a72;
    }
    .filter-buttons button.active {
      background-color: #1f2a72;
      font-weight: 700;
    }
    /* Gallery container with flex */
    .gallery-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 25px;
      max-width: 960px;
      margin: 0 auto 40px auto;
    }
    .gallery-item {
      width: 180px;
      border-radius: 15px;
      overflow: hidden;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(44, 62, 153, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: #fff;
    }
    .gallery-item img {
      width: 100%;
      display: block;
      border-radius: 15px;
      object-fit: cover;
      aspect-ratio: 3 / 4;
    }
    .gallery-item:hover {
      box-shadow: 0 9px 18px rgba(44, 62, 153, 0.3);
      transform: scale(1.05);
      z-index: 10;
    }
    /* Pagination dots container */
    .pagination-dots {
      display: flex;
      justify-content: center;
      gap: 14px;
      margin-bottom: 10px;
    }
    /* Dots style */
    .dot {
      height: 5px;
      width: 5px;
      background-color: #aeb9e0;
      border-radius: 50%;
      display: inline-block;
      cursor: pointer;
      transition: background-color 0.3s;
      border: none;
      padding: 5px;
    }
    .dot.active {
      background-color: #2c3e99;
    }
    .dot:hover {
      background-color: #576bbd;
    }
    /* Responsive adjustments */
    @media (max-width: 600px) {
      .gallery-container {
        gap: 15px;
      }
      .gallery-item {
        width: 130px;
      }
    }
  /* Responsive */
  @media (max-width: 768px) {
    .carousel-item {
      width: calc(100% / 2);
    }
  }
  @media (max-width: 480px) {
    .carousel-item {
        width: 100%;
      padding: 0 6px;
    }
    .categories {
      gap: 0.8rem;
    }
    .categories label {
      padding: 0.5rem 1rem;
      font-size: 0.85rem;
    }
}
  
    /* Responsive */
    @media (max-width: 1024px) {
      .hero-section {
        flex-direction: column;
        padding-bottom: 2.2rem;
        border-radius: 0 0 30px 30px;
      }
      .about-section {
        flex-direction: column;
        gap: 2rem;
      }
      .service-cards {
        flex-direction: column;
        max-width: 400px;
        margin: 0 auto;
      }
      .vision-container {
        flex-direction: column;
      }
      .vision-images-group, .mission-images-group {
        flex-direction: row;
        justify-content: center;
      }
      .gallery-thumbnails img {
        width: 75px;
        height: 54px;
      }
      .article-cards {
        flex-direction: column;
        max-width: 400px;
        margin: 0 auto;
      }
      .footer-contacts, .footer-partners {
        flex: 1 1 100%;
      }
      footer .container-footer {
        flex-direction: column;
        gap: 2rem;
      }
    }
    @media (max-width: 480px) {
      .hero-text h1 {
        font-size: 1.6rem;
      }
      .hero-text p {
        font-size: 0.9rem;
      }
      .btn-primary {
        font-size: 0.9rem;
        padding: 0.45rem 1.2rem;
      }
      nav {
        display: none; /* hide nav on smaller screens for simplicity */
      }
      .btn-contact {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
      }
      .vision, .mission {
        max-width: 100%;
        padding: 1.2rem 1rem;
      }
      .article-card {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <?php  

    include 'header.php';

    $sql = "SELECT * FROM gallery WHERE id IN (13,14,17,18)";
    $result = $conn->query($sql);

    $images = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $images[$row['id']] = $row; // simpan per id
        }
    }

  ?>

  <section class="hero-section" aria-label="Hero Section with company introduction">
    <div class="hero-text" tabindex="0">
      <h1>ESACO<br />Innovative Solutions for Your Business</h1>
      <p>Memberdayakan profesional dan perusahaan dengan layanan konsultasi, pelatihan, dan penilaian untuk mendorong pertumbuhan dan keberhasilan yang berkelanjutan.</p>
      <button class="btn-primary" type="button" aria-label="Selengkapnya tentang ESACO">Selengkapnya</button>
    </div>
    <div class="hero-image" tabindex="0">
      <img
        src="uploads/<?php echo $images[13]['image_url']; ?>"
        alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
        onerror="this.style.display='none'"
      />
    </div>
  </section>

  <section class="about-section" aria-labelledby="about-company-title">
    <div class="about-left" tabindex="0">
      <img
        src="uploads/<?php echo $images[14]['image_url']; ?>"
        alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
        onerror="this.style.display='none'"
      />
    </div>
    <div class="about-right">
      <h2 id="about-company-title" tabindex="0">What You Need To Know About Our Company</h2>
      <p tabindex="0">
        ESACO merupakan sebuah pusat pengembangan pengetahuan maupun kompetensi para professional yang berasal dari perusahaan maupun perorangan. Didirikan pada tahun 2016 dimana kesadaran dari industri dalam mengembangkan kompetensi para karyawannya telah cukup besar.
      </p>
      <p tabindex="0">
        Untuk memberikan layanan dan solusi yang diharapkan mampu memberikan nilai tambah bagi Perusahaan Nasional maupun Multinasional di Indonesia dalam upaya mencapai tujuan mereka dengan mengembangkan bisnisnya (improvement) melalui kegiatan Konsultasi, Pelatihan, Assessment & Inspeksi.
      </p>
      <p tabindex="0">
        Kami sangat menghormati kerahasiaan informasi yang diperoleh 
        selama melakukan jasa professional dan tidak memakai atau 
        mengungkapkan informasi tersebut tanpa persetujuan
      </p>
    </div>
  </section>

  <section class="services-section" aria-labelledby="services-title">
    <h2 id="services-title" tabindex="0">What Services We Offer For You</h2>
    <div class="service-cards">
      <article class="service-card" tabindex="0" aria-label="Consulting Service">
        <svg class="service-card-icon" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5.23379 7.72989C6.65303 5.48625 9.15342 4 12.0002 4C14.847 4 17.3474 5.48625 18.7667 7.72989L20.4569 6.66071C18.6865 3.86199 15.5612 2 12.0002 2C8.43928 2 5.31393 3.86199 3.54356 6.66071L5.23379 7.72989ZM12.0002 20C9.15342 20 6.65303 18.5138 5.23379 16.2701L3.54356 17.3393C5.31393 20.138 8.43928 22 12.0002 22C15.5612 22 18.6865 20.138 20.4569 17.3393L18.7667 16.2701C17.3474 18.5138 14.847 20 12.0002 20ZM12 8C12.5523 8 13 8.44772 13 9C13 9.55228 12.5523 10 12 10C11.4477 10 11 9.55228 11 9C11 8.44772 11.4477 8 12 8ZM12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12ZM12 15C10.8954 15 10 15.8954 10 17H8C8 14.7909 9.79086 13 12 13C14.2091 13 16 14.7909 16 17H14C14 15.8954 13.1046 15 12 15ZM3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13C3.55228 13 4 12.5523 4 12C4 11.4477 3.55228 11 3 11ZM0 12C0 10.3431 1.34315 9 3 9C4.65685 9 6 10.3431 6 12C6 13.6569 4.65685 15 3 15C1.34315 15 0 13.6569 0 12ZM20 12C20 11.4477 20.4477 11 21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13C20.4477 13 20 12.5523 20 12ZM21 9C19.3431 9 18 10.3431 18 12C18 13.6569 19.3431 15 21 15C22.6569 15 24 13.6569 24 12C24 10.3431 22.6569 9 21 9Z"></path></svg>
        <h3>Consulting</h3>
        <p>
          Membantu client dalam memecahkan masalah yang ada di perusahaan 
          atau pada organisasi mereka merupakan tujuan utama kami dalam 
          memberikan layanan.
        </p>
        <a href="#" tabindex="0">Learn More</a>
      </article>
      <article class="service-card" tabindex="0" aria-label="Training Service">
        <svg class="service-icon" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M8 4C8 5.10457 7.10457 6 6 6 4.89543 6 4 5.10457 4 4 4 2.89543 4.89543 2 6 2 7.10457 2 8 2.89543 8 4ZM5 16V22H3V10C3 8.34315 4.34315 7 6 7 6.82059 7 7.56423 7.32946 8.10585 7.86333L10.4803 10.1057 12.7931 7.79289 14.2073 9.20711 10.5201 12.8943 9 11.4587V22H7V16H5ZM6 9C5.44772 9 5 9.44772 5 10V14H7V10C7 9.44772 6.55228 9 6 9ZM19 5H10V3H20C20.5523 3 21 3.44772 21 4V15C21 15.5523 20.5523 16 20 16H16.5758L19.3993 22H17.1889L14.3654 16H10V14H19V5Z"></path></svg>
        <h3>Training</h3>
        <p>
          Dalam upaya memberikan layanan berupa Pelatihan, ESACO merupakan 
          suatu wadah (training center) dimana seorang praktisi/professional dapat 
          mentransfer ilmu pengetahuan yang ada.
        </p>
        <a href="layanan.php" tabindex="0">Learn More</a>
      </article>
      <article class="service-card" tabindex="0" aria-label="Assessment Service">
        <svg class="service-icon" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 8V12H19V9H14V4H5V20H11V22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM13.7857 15.3269C13.8246 14.5997 14.3858 14.0083 15.11 13.9313L15.9807 13.8389C16.0841 13.8279 16.1815 13.7845 16.2589 13.715L16.9102 13.1299C17.4519 12.6431 18.2669 12.6218 18.8334 13.0795L19.5145 13.6298C19.5954 13.6951 19.6949 13.7333 19.7988 13.7389L20.6731 13.7857C21.4003 13.8246 21.9917 14.3858 22.0687 15.11L22.1611 15.9807C22.1721 16.0841 22.2155 16.1815 22.285 16.2589L22.8701 16.9102C23.3569 17.4519 23.3782 18.2669 22.9205 18.8334L22.3702 19.5145C22.3049 19.5954 22.2667 19.6949 22.2611 19.7988L22.2143 20.6731C22.1754 21.4003 21.6142 21.9917 20.89 22.0687L20.0193 22.1611C19.9159 22.1721 19.8185 22.2155 19.7411 22.285L19.0898 22.8701C18.5481 23.3569 17.7331 23.3782 17.1666 22.9205L16.4855 22.3702C16.4046 22.3049 16.3051 22.2667 16.2012 22.2611L15.3269 22.2143C14.5997 22.1754 14.0083 21.6142 13.9313 20.89L13.8389 20.0193C13.8279 19.9159 13.7845 19.8185 13.715 19.7411L13.1299 19.0898C12.6431 18.5481 12.6218 17.733 13.0795 17.1666L13.6298 16.4855C13.6951 16.4046 13.7333 16.3051 13.7389 16.2012L13.7857 15.3269ZM21.0303 17.0303L19.9697 15.9697L17.5 18.4393L16.0303 16.9697L14.9697 18.0303L17.5 20.5607L21.0303 17.0303Z"></path></svg>
        <h3>Assessement</h3>
        <p>Evaluasi kompetensi dan potensi karyawan secara objektif untuk mendukung pengambilan keputusan strategis dan pengembangan organisasi.</p>
        <a href="#" tabindex="0">Learn More</a>
      </article>
    </div>
  </section>

  <section class="vision-mission-section" aria-labelledby="vision-mission-title">
    <h2 id="vision-mission-title" tabindex="0">Vision and Mision Company</h2>
    <p class="lead" tabindex="0">Landasan yang membimbing setiap langkah dan keputusan bisnis kami</p>
  </section>

  <section class="about-company" aria-label="About company information and image">
    <article class="about-img" role="img" aria-label="Photo of construction workers wearing safety helmets and harnesses working on reinforced construction site">
      <img
          src="uploads/<?php echo $images[17]['image_url']; ?>"
          alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
          onerror="this.style.display='none'"
        />
    </article>
    <article class="about-text" tabindex="0">
      <h3>Visi</h3>
      <p>Menjadi lembaga professional terkemuka yang menjadi tolok ukur dalam layanan konsultasi, pelatihan, assesment, dan inspeksi dengan memegang teguh prinsip integritas dan komprehensif.</p>
    </article>
  </section>

  <section class="align-costs" aria-label="Financial strategy and growth service section">
      <article class="align-text" tabindex="0">
        <h3>Misi</h3>
        <p>• Memberikan layanan yang terbaik dalam jasa konsultasi, pelatihan, assessment dan inspeksi.</p>
        <p>• Mengembangkan kemampuan dan kapasitas organisasi dan sumber daya ESACO, dengan 
          menggunakan pengetahuan dan metode paling mutakhir dalam bidang sistem manajemen, 
          untuk senantiasa meningkatkan pelayanan sesuai dengan kebutuhan pengguna jasa.</p>
        <p>• Memberikan penghargaan yang sesuai kepada seluruh karyawan, tenaga ahli serta pemegang 
          saham ESACO sesuai dengan kontribusi dan kinerja perusahaan</p> 
      </article>
      <article class="align-img" role="img" aria-label="Workers wearing yellow and red safety helmets and uniforms inside an industrial warehouse construction site">
        <img
            src="uploads/<?php echo $images[18]['image_url']; ?>"
            alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
            onerror="this.style.display='none'"
          />
      </article>
  </section>

  <!-- 🔹 Section Articles -->
   <section class="articles-section" aria-labelledby="articles-title">
       <h2 id="articles-title">Latest Insight and Article</h2>
       <div class="article-cards">
           <?php
           $sql = "SELECT * FROM articles ORDER BY date DESC LIMIT 3";
           $result = $conn->query($sql);
           if (!$conn) {
            die("Koneksi hilang, cek include atau close() sebelumnya");
          }

           if (!$result) {
               echo "Error: " . $conn->error; // Menampilkan kesalahan jika query gagal
           } elseif ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   echo '<article class="article-card">';
                   echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="Image for ' . htmlspecialchars($row['title']) . '" onerror="this.style.display=\'none\'">';
                   echo '<div>';
                   echo '<h3 class="article-title">' . htmlspecialchars($row['title']) . '</h3>';
                   echo '<time class="article-date" datetime="' . htmlspecialchars($row['date']) . '">' . date("d/m/Y", strtotime($row['date'])) . '</time>';
                   $shortDesc = substr($row['description'], 0, 100);
                   if (strlen($row['description']) > 100) {
                    $shortDesc .= '...';
                    }
                   echo '<p class="article-description">' . htmlspecialchars($shortDesc) . '</p>';

                   echo '<a class="article-readmore" href="#">Read More →</a>';
                   echo '</div>';
                   echo '</article>';
               }
           } else {
               echo '<p>No articles found.</p>';
           }
           ?>
       </div>
   </section>

   <!-- 🔹 Section Gallery -->
   <section class="gallery-section" aria-labelledby="gallery-title">
    <h1>Gallery Company</h1>
    <div class="filter-buttons" role="group" aria-label="Filter categories">
      <button class="filter-btn active" data-filter="semua" type="button">ALL</button>
      <button class="filter-btn" data-filter="ketinggian" type="button">KETINGGIAN</button>
      <button class="filter-btn" data-filter="listrik" type="button">LISTRIK</button>
      <button class="filter-btn" data-filter="kebakaran" type="button">KEBAKARAN</button>


    <div class="gallery-container" aria-live="polite" aria-atomic="true" aria-relevant="additions removals">
      <!-- Gallery items inserted by JS dynamically -->
    </div>

    <div class="pagination-dots" aria-label="Pagination dots">
      <!-- Dots inserted by JS dynamically -->
    </div>
   </section>
   

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

      function chunkArray(arr, size) {
  const result = [];
  for (let i = 0; i < arr.length; i += size) {
    result.push(arr.slice(i, i + size));
  }
  return result;
}

function renderCarousel(galleryItems) {
  const carouselInner = document.getElementById("carousel-gallery");
  carouselInner.innerHTML = "";

  const chunks = chunkArray(galleryItems, 4);

  chunks.forEach((group, index) => {
    const item = document.createElement("div");
    item.className = `carousel-item ${index === 0 ? "active" : ""}`;

    // buat grid 4 kolom
    const row = document.createElement("div");
    row.className = "row text-center";

    group.forEach(imgItem => {
      const col = document.createElement("div");
      col.className = "col-3"; // 4 kolom (3 grid bootstrap)

      const img = document.createElement("img");
      img.src = "uploads/" + imgItem.image_url;
      img.alt = imgItem.alt ?? "";
      img.className = "d-block w-100 img-fluid";

      col.appendChild(img);
      row.appendChild(col);
    });

    item.appendChild(row);
    carouselInner.appendChild(item);
  });
}

// contoh panggil
fetch("get_gallery.php")
  .then(res => res.json())
  .then(data => {
    renderCarousel(data.gallery);
  });


      // Initial render all images and dots
      renderGallery('semua');
      renderPaginationDots(0);
    })();

</script>



    <!-- 🔹 Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>


