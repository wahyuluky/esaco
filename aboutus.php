<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ESACO Business Consulting</title>
  <style>
        /* Reset and base */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff;
      color: #1e2a5a;
      line-height: 1.6;
    }
    a {
      color: #1d4ed8;
      text-decoration: none;
      cursor: pointer;
    }

    img {
      display: block;
      max-width: 100%;
      height: auto;
      border-radius: 12px;
    }
    h1,h2,h3,h4,h5,h6 {
      margin: 0 0 0.5em 0;
      font-weight: 700;
      color: #1e2a5a;
    }

    /* Container */
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

/* Hero section - Meet Our Team */
.hero-section {
    position: relative;
    text-align: center;
    background-color: #f9fafb;
    overflow: hidden;
    padding-bottom: 2rem;
}
/* Orange shape top-left */
.hero-shape-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 400px;
    height: 120px;
    background: #ea7b2f;
    clip-path: polygon(0 0, 100% 0%, 0% 100%);
    z-index: 1;
}

/* Orange shape bottom-right */
.hero-shape-bottom {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    max-width: 900px;
    height: 120px;
    background: #1e2a5a;
    clip-path: polygon(100% 0, 100% 100%, 0% 100%);
    z-index: 3;
}
    .hero-content {
      position: relative;
      z-index: 5;
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem 1rem 1rem 1rem;
    }
    .hero-content h1 {
      font-size: 2.5rem;
      color: #1e2a5a;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero-image-container {
      position: relative;
      margin: 0 auto;
      max-width: 1200px;
      box-shadow: 0 6px 20px rgb(0 0 0 / 0.15);
      border-radius: 16px;
      overflow: hidden;
    }
    .hero-image-container img {
      width: 100%;
      height: auto;
      border-radius: 16px;
      display: block;
    }
    .hero-logo-bottomright {
      position: absolute;
      bottom: 12px;
      right: 12px;
      width: 90px;
      height: auto;
      opacity: 0.9;
      user-select: none;
    }

    /* Section Title */
    .section-title {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 1rem;
      margin-top: 3rem;
      color: #1e2a5a;
      user-select: none;
    }

    /* Business Consulting Text Section */
    .business-consulting {
      display: flex;
      justify-content: space-between;
      gap: 3rem;
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
      flex-wrap: wrap;
    }
    .bc-column {
      flex: 1 1 45%;
      min-width: 280px;
      font-size: 1rem;
    }
    .bc-column p {
      margin-bottom: 1.25rem;
      color: #3b4371;
    }
    .bc-column.bc-right {
      border-left: 2px solid #1e2a5a;
      padding-left: 1rem;
    }

    /* About Company Section */
    .about-company {
      max-width: 1200px;
      margin: 4rem auto 0;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 0 1rem;
      align-items: center;
      justify-content: center;
    }
    .about-img {
      flex: 1 1 320px;
      max-width: 450px;
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
    .btn-primary {
      background-color: #2563eb;
      color: white;
      border: none;
      padding: 0.5rem 1.25rem;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
      text-align: center;
      display: inline-block;
      white-space: nowrap;
    }
    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #1e40af;
      outline: none;
    }

    /* Align Costs Section */
    .align-costs {
      max-width: 1200px;
      margin: 4rem auto 0;
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
      max-width: 450px;
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

    /* Why Choose Us Section */
    .why-choose {
      text-align: center;
      max-width: 900px;
      margin: 4rem auto 6rem;
      font-weight: 600;
      color: #3b4371;
      font-size: 1.2rem;
      user-select: none;
      padding: 2rem 0 0 0;
    }

    .why-choose h1 {
      color: #273087;
    }

    /* Stats Section */
    .stats-section {
      background: #fafafa;
      display: flex;
      justify-content: center;
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto 4rem;
      padding: 2rem 1rem;
      flex-wrap: wrap;
    }
    .stat-item {
      flex: 1 1 280px;
      background: white;
      border-radius: 16px;
      padding: 2rem 1.5rem;
      box-shadow: 0 6px 20px rgb(0 0 0 / 0.07);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      user-select: none;
      min-width: 280px;
    }
    .stat-icon {
      font-size: 40px;
      margin-bottom: 1rem;
      color: #1e2a5a;
      user-select: none;
    }
    /* Using simple SVG icons as inline for consistency */
    .stat-title {
      font-weight: 700;
      color: #1e2a5a;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
    }
    .stat-desc {
      color: #3b4371;
      font-size: 0.9rem;
      line-height: 1.4;
      user-select: none;
      white-space: pre-line;
    }


    /* Responsive */
    @media (max-width: 920px) {
      .business-consulting {
        flex-direction: column;
      }
      .bc-column.bc-right {
        border-left: none;
        padding-left: 0;
      }
      .about-company,
      .align-costs {
        flex-direction: column;
      }
    }
    @media (max-width: 600px) {
      header {
        flex-wrap: wrap;
      }
      nav ul {
        justify-content: center;
        flex-wrap: wrap;
      }
      nav ul li {
        margin-left: 1rem;
        margin-bottom: 0.5rem;
      }
      .btn-contact {
        margin-left: 0;
      }
      .hero-content h1 {
        font-size: 1.8rem;
      }
      .hero-shape-top,
      .hero-shape-bottom {
        display: none;
      }
    }
 
  </style>
</head>
<body>
    <?php 
    
    include 'connect.php'; 
    include 'header.php';

    $sql = "SELECT * FROM gallery WHERE id IN (16,17,18)";
    $result = $conn->query($sql);

    $images = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $images[$row['id']] = $row; // simpan per id
        }
    }

    ?>

  <section class="hero-section" aria-label="Team introduction">
    <!-- <div class="hero-shape-top" aria-hidden="true"></div>
    <div class="hero-shape-bottom" aria-hidden="true"></div> -->

    <div class="hero-content">
      <h1>Meet Our Team</h1>
    </div>
    <div class="hero-image-container" aria-label="Photograph of ESACO team members posed indoors">
        <img
          src="uploads/<?php echo $images[16]['image_url']; ?>"
          alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
          onerror="this.style.display='none'"
        />
    </div>
  </section>

  <section class="business-consulting" aria-labelledby="bc-title">
    <h2 id="bc-title" class="section-title">Business Consulting</h2>
    <div class="bc-column bc-left" tabindex="0">
      <p>
        Tingkatkan daya saing bisnis Anda bersama layanan Business Consulting kami yang dirancang khusus untuk membantu perusahaan menavigasi tantangan strategis dan operasional. Dengan pendekatan berbasis data dan pengalaman lintas industri, kami membantu Anda mengidentifikasi peluang pasar, menyusun strategi pertumbuhan, serta mengoptimalkan proses bisnis untuk hasil yang berkelanjutan.
      </p>
    </div>
    <div class="bc-column bc-right" tabindex="0">
      <p>
        Kami percaya bahwa setiap bisnis memiliki karakter unik. Oleh karena itu, solusi yang kami berikan selalu disesuaikan dengan kebutuhan dan tujuan spesifik perusahaan Anda. Mulai dari pengembangan strategi bisnis, efisiensi operasional, hingga transformasi digital kami hadir sebagai mitra strategis untuk mendampingi perjalanan sukses Anda.
      </p>
    </div>
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
      <h3>What You Need To Know About Our Company</h3>
      <p>
        ESACO merupakan sebuah pusat pengembangan pengetahuan maupun kompetensi para profesional yang berasal dari perusahaan maupun perorangan. Didirikan pada tahun 2016 dimana kesadaran dari industri dalam mengembangkan kompetensi para karyawannya telah cukup besar.
      </p>
      <p>
        Untuk memberikan layanan dan solusi yang diharapkan mampu memberikan nilai tambah bagi Perusahaan Nasional maupun Multinasional di Indonesia dalam upaya mencapai tujuan mereka dengan mengembangkan bisnisnya (Improvement) melalui kegiatan Konsultasi, Pelatihan, Assessment & Inspeksi.
      </p>
      <button class="btn-primary" aria-label="Find out more about ESACO company">Find Out More</button>
    </article>
  </section>

  <section class="align-costs" aria-label="Financial strategy and growth service section">
    <article class="align-text" tabindex="0">
      <h3>Align Costs With Strategy And Focus On Growth</h3>
      <p>
        Kami membantu bisnis Anda menyusun strategi pengeluaran yang tepat sasaran dan berdampak langsung pada pertumbuhan. Dengan pendekatan yang terukur, kami memastikan setiap biaya yang dikeluarkan selaras dengan prioritas strategis perusahaan bukan sekadar memangkas, tetapi mengarahkan investasi ke arah yang benar untuk mempercepat kemajuan bisnis Anda.
      </p>
      <button class="btn-primary" aria-label="Learn more about aligning costs with strategy">Learn More</button>
    </article>
    <article class="align-img" role="img" aria-label="Workers wearing yellow and red safety helmets and uniforms inside an industrial warehouse construction site">
      <img
          src="uploads/<?php echo $images[18]['image_url']; ?>"
          alt="<?php echo htmlspecialchars($images[1]['alt_text']); ?>"
          onerror="this.style.display='none'"
        />
    </article>
  </section>

  <section class="why-choose" aria-label="Why choose ESACO section">
    <h1>Why Choose Us</h1>
    <p>
      Kami menawarkan solusi pembelajaran yang komprehensif untuk meningkatkan kompetensi profesional Anda.
    </p>
  </section>

  <section class="stats-section" aria-label="Company statistics and achievements">
    <article class="stat-item" tabindex="0" aria-label="24/7 Customer Support">
      <div class="stat-icon" aria-hidden="true">
        <!-- Support Headset SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="40" height="40" fill="#1e2a5a" viewBox="0 0 24 24" fill="currentColor"><path d="M22 17.0022C21.999 19.8731 19.9816 22.2726 17.2872 22.8616L16.6492 20.9476C17.8532 20.7511 18.8765 20.0171 19.4649 19H17C15.8954 19 15 18.1046 15 17V13C15 11.8954 15.8954 11 17 11H19.9381C19.446 7.05369 16.0796 4 12 4C7.92038 4 4.55399 7.05369 4.06189 11H7C8.10457 11 9 11.8954 9 13V17C9 18.1046 8.10457 19 7 19H4C2.89543 19 2 18.1046 2 17V12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V12.9987V13V17V17.0013V17.0022ZM20 17V13H17V17H20ZM4 13V17H7V13H4Z"></path></svg>
      </div>
      <h4 class="stat-title">24/7 Customer Support</h4>
      <p class="stat-desc">
        Memberikan solusi profesional untuk membantu perusahaan mengatasi tantangan bisnis dan meningkatkan kompetensi karyawan secara berkelanjutan.
      </p>
    </article>
    <article class="stat-item" tabindex="0" aria-label="538 Projects Completed">
      <div class="stat-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="40" height="40" fill="#1e2a5a" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598L12 1ZM12 3.04879L5 4.60434V13.7889C5 15.1263 5.6684 16.3752 6.7812 17.1171L12 20.5963L17.2188 17.1171C18.3316 16.3752 19 15.1263 19 13.7889V4.60434L12 3.04879ZM16.4524 8.22183L17.8666 9.63604L11.5026 16L7.25999 11.7574L8.67421 10.3431L11.5019 13.1709L16.4524 8.22183Z"></path></svg>
      </div>
      <h4 class="stat-title">538 Projects Completed</h4>
      <p class="stat-desc">
        Program pelatihan yang interaktif dan disesuaikan untuk mengembangkan keterampilan dan kesiapan tenaga kerja dalam menghadapi dinamika industri.
      </p>
    </article>
    <article class="stat-item" tabindex="0" aria-label="40 Offices Worldwide">
      <div class="stat-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="40" height="40" fill="#1e2a5a" viewBox="0 0 24 24" fill="currentColor"><path d="M6.23509 6.45329C4.85101 7.89148 4 9.84636 4 12C4 16.4183 7.58172 20 12 20C13.0808 20 14.1116 19.7857 15.0521 19.3972C15.1671 18.6467 14.9148 17.9266 14.8116 17.6746C14.582 17.115 13.8241 16.1582 12.5589 14.8308C12.2212 14.4758 12.2429 14.2035 12.3636 13.3943L12.3775 13.3029C12.4595 12.7486 12.5971 12.4209 14.4622 12.1248C15.4097 11.9746 15.6589 12.3533 16.0043 12.8777C16.0425 12.9358 16.0807 12.9928 16.1198 13.0499C16.4479 13.5297 16.691 13.6394 17.0582 13.8064C17.2227 13.881 17.428 13.9751 17.7031 14.1314C18.3551 14.504 18.3551 14.9247 18.3551 15.8472V15.9518C18.3551 16.3434 18.3168 16.6872 18.2566 16.9859C19.3478 15.6185 20 13.8854 20 12C20 8.70089 18.003 5.8682 15.1519 4.64482C14.5987 5.01813 13.8398 5.54726 13.575 5.91C13.4396 6.09538 13.2482 7.04166 12.6257 7.11976C12.4626 7.14023 12.2438 7.12589 12.012 7.11097C11.3905 7.07058 10.5402 7.01606 10.268 7.75495C10.0952 8.2232 10.0648 9.49445 10.6239 10.1543C10.7134 10.2597 10.7307 10.4547 10.6699 10.6735C10.59 10.9608 10.4286 11.1356 10.3783 11.1717C10.2819 11.1163 10.0896 10.8931 9.95938 10.7412C9.64554 10.3765 9.25405 9.92233 8.74797 9.78176C8.56395 9.73083 8.36166 9.68867 8.16548 9.64736C7.6164 9.53227 6.99443 9.40134 6.84992 9.09302C6.74442 8.8672 6.74488 8.55621 6.74529 8.22764C6.74529 7.8112 6.74529 7.34029 6.54129 6.88256C6.46246 6.70541 6.35689 6.56446 6.23509 6.45329ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z"></path></svg>
      </div>
      <h4 class="stat-title">40 Offices Worldwide</h4>
      <p class="stat-desc">
        Evaluasi kompetensi dan potensi karyawan secara objektif untuk mendukung pengambilan keputusan strategis dan pengembangan organisasi.
      </p>
    </article>
  </section>

  <?php include 'footer.php'; ?>
</body>
</html>

