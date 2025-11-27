<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Esaco - Pembinaan dan Konsultasi K3</title>
  <style>
    
    /* Reset & Base */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff;
      color: #111;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    a {
      color: #0655f9;
      text-decoration: none;
    }

    button {
      cursor: pointer;
      border: none;
      border-radius: 10px;
      background-color: #3b69f3;
      color: white;
      font-size: 14px;
      padding: 8px 16px;
      transition: background-color 0.3s ease;
      user-select: none;
      font-weight: 500;
    }
    button:hover,
    button:focus {
      background-color: #254db7;
      outline: none;
    }
    h1, h2, h3, h4, h5 {
      margin: 0;
    }
    ul {
      padding-left: 0;
      margin: 0;
      list-style: none;
    }
    img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    /* Container utility */
    .container {
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 20px;
      padding-right: 20px;
    }

    /* Section Title */
    section#services {
      padding: 40px 20px 60px;
      background: #fff;
    }
    section#services h1 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 28px;
      user-select: none;
    }

    /* Cards Wrapper */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px 20px;
    }

    /* Service Card */
    .card {
      background: white;
      border: 1px solid #d6d6d6;
      border-radius: 12px;
      box-shadow: 0 1px 4px rgb(0 0 0 / 0.06);
      display: flex;
      flex-direction: column;
      align-items: center;
      /* justify-content: space-between; */
      padding: 25px 15px 25px;
      min-height: 220px;
      user-select: none;
      transition: box-shadow 0.3s ease;
    }
    .card:hover,
    .card:focus-within {
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.12);
      border-color: #3b69f3;
      outline: none;
    }
    .card-icon {
      height: 42px;
      width: 42px;
      margin-bottom: 20px;
      color: #3b69f3;
    }
    .card-text {
      font-size: 14px;
      font-weight: 600;
      color: #111;
      text-align: center;
      margin-bottom: 18px;
      min-height: 44px;
      line-height: 1.3;
    }
    .card button {
      align-self: center;
      width: 100px;
      margin-top: auto;
    }

    /* Modal Styles */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background-color: rgba(0,0,0,0.4);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
      overflow-y: auto;
      z-index: 501;
    }
    .modal-backdrop.active {
      display: flex;
    }
    .modal {
      background: white;
      border-radius: 16px;
      max-width: 520px;
      width: 100%;
      padding: 30px 30px 28px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
      position: relative;
      font-size: 15px;
      line-height: 1.6;
      color: #222;
    }
    .modal h3 {
      margin-top: 0;
      margin-bottom: 8px;
      font-weight: 700;
      font-size: 22px;
      user-select: text;
    }
    .modal p {
      margin-top: 0;
      margin-bottom: 20px;
      user-select: text;
    }
    .modal button.close-btn {
      position: absolute;
      top: 12px;
      right: 12px;
      background: transparent;
      border: none;
      font-size: 24px;
      line-height: 1;
      color: #999;
      padding: 0;
      cursor: pointer;
      user-select: none;
      transition: color 0.2s ease;
    }
    .modal button.close-btn:hover,
    .modal button.close-btn:focus {
      color: #3b69f3;
      outline: none;
    }

  </style>
</head>
<body>
  <?php 
  
  include 'connect.php';
  include 'header.php';
  
  ?>

  <main>
    <section id="services" aria-labelledby="section-title">
      <div class="container">
        <h1 id="section-title">Pembinaan dan Konsultasi K3</h1>
        <div class="cards" role="list">
          <!-- Card 1 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-1">
            <svg class="card-icon" role="img" aria-label="Icon konstruksi dan bangunan" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M240 104C240 73.1 265.1 48 296 48C326.9 48 352 73.1 352 104C352 134.9 326.9 160 296 160C265.1 160 240 134.9 240 104zM42.5 245.3C48.4 233.4 62.8 228.6 74.7 234.6L99.3 246.9L111.5 226.5C130.4 195 164.7 176 201.1 176C247.3 176 288.8 206.5 301.6 251.4L333.8 364.1L426.7 410.5L452.5 367.5C458.3 357.9 468.7 352 479.9 352C491.1 352 501.6 357.9 507.3 367.5L603.3 527.5C609.2 537.4 609.4 549.7 603.7 559.7C598 569.7 587.5 576 576 576L384 576C372.5 576 361.8 569.8 356.2 559.8C350.6 549.8 350.7 537.5 356.6 527.6L402 451.8L53.3 277.5C41.4 271.6 36.6 257.2 42.6 245.3zM126.3 371.4L238.3 427.4C249.1 432.8 256 443.9 256 456L256 544C256 561.7 241.7 576 224 576C206.3 576 192 561.7 192 544L192 475.8L130.7 445.1L94.4 554.1C88.8 570.9 70.7 579.9 53.9 574.3C37.1 568.7 28.1 550.6 33.7 533.9L81.7 389.9C84.6 381.1 91.2 374 99.8 370.5C108.4 367 118.1 367.3 126.4 371.4z"/></svg>
            <p id="desc-1" class="card-text">Konstruksi dan Bangunan</p>
            <button type="button" data-info="Konstruksi dan Bangunan" data-desc="Layanan pembinaan dan konsultasi terkait keselamatan kerja di bidang konstruksi dan pembangunan gedung, jembatan, dan infrastruktur lainnya. Kami menyediakan solusi untuk mencegah kecelakaan dan meningkatkan standar keselamatan.">Lainnya</button>
          </article>
          <!-- Card 2 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-2">
            <svg class="card-icon" role="img" aria-label="Icon listrik" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"/></svg>
            <p id="desc-2" class="card-text">Listrik</p>
            <button type="button" data-info="Listrik" data-desc="Konsultasi keselamatan terkait instalasi dan pemeliharaan sistem listrik untuk menghindari risiko sengatan, kebakaran, dan kerusakan alat listrik di lingkungan kerja.">Lainnya</button>
          </article>
          <!-- Card 3 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-3">
            <svg class="card-icon" role="img" aria-label="Icon kebakaran" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256.5 37.6C265.8 29.8 279.5 30.1 288.4 38.5C300.7 50.1 311.7 62.9 322.3 75.9C335.8 92.4 352 114.2 367.6 140.1C372.8 133.3 377.6 127.3 381.8 122.2C382.9 120.9 384 119.5 385.1 118.1C393 108.3 402.8 96 415.9 96C429.3 96 438.7 107.9 446.7 118.1C448 119.8 449.3 121.4 450.6 122.9C460.9 135.3 474.6 153.2 488.3 175.3C515.5 219.2 543.9 281.7 543.9 351.9C543.9 475.6 443.6 575.9 319.9 575.9C196.2 575.9 96 475.7 96 352C96 260.9 137.1 182 176.5 127C196.4 99.3 216.2 77.1 231.1 61.9C239.3 53.5 247.6 45.2 256.6 37.7zM321.7 480C347 480 369.4 473 390.5 459C432.6 429.6 443.9 370.8 418.6 324.6C414.1 315.6 402.6 315 396.1 322.6L370.9 351.9C364.3 359.5 352.4 359.3 346.2 351.4C328.9 329.3 297.1 289 280.9 268.4C275.5 261.5 265.7 260.4 259.4 266.5C241.1 284.3 207.9 323.3 207.9 370.8C207.9 439.4 258.5 480 321.6 480z"/></svg>
            <p id="desc-3" class="card-text">Penanggulangan dan Kebakaran</p>
            <button type="button" data-info="Penanggulangan dan Kebakaran" data-desc="Pemahaman dan pelatihan terkait prosedur penanggulangan kebakaran, penggunaan alat pemadam, dan pencegahan risiko kebakaran di lingkungan kerja dan industri.">Lainnya</button>
          </article>
          <!-- Card 4 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-4">
            <svg class="card-icon" role="img" aria-label="Icon bekerja pada ketinggian" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.9 536.6 69.6 524.5C62.3 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 232C306.7 232 296 242.7 296 256L296 368C296 381.3 306.7 392 320 392C333.3 392 344 381.3 344 368L344 256C344 242.7 333.3 232 320 232zM346.7 448C347.3 438.1 342.4 428.7 333.9 423.5C325.4 418.4 314.7 418.4 306.2 423.5C297.7 428.7 292.8 438.1 293.4 448C292.8 457.9 297.7 467.3 306.2 472.5C314.7 477.6 325.4 477.6 333.9 472.5C342.4 467.3 347.3 457.9 346.7 448z"/></svg>
            <p id="desc-4" class="card-text">Bekerja pada Ketinggian</p>
            <button type="button" data-info="Bekerja pada Ketinggian" data-desc="Konsultasi pengamanan dan pelatihan bagi pekerja yang melakukan pekerjaan di ketinggian untuk mencegah kecelakaan jatuh dan risiko kerja lainnya.">Lainnya</button>
          </article>
          <!-- Card 5 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-5">
            <svg class="card-icon" role="img" aria-label="Icon bahan berbahaya" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M480 208C480 128.5 408.4 64 320 64C231.6 64 160 128.5 160 208C160 255.1 185.1 296.9 224 323.2L224 352C224 369.7 238.3 384 256 384L384 384C401.7 384 416 369.7 416 352L416 323.2C454.9 296.9 480 255.1 480 208zM256 192C273.7 192 288 206.3 288 224C288 241.7 273.7 256 256 256C238.3 256 224 241.7 224 224C224 206.3 238.3 192 256 192zM352 224C352 206.3 366.3 192 384 192C401.7 192 416 206.3 416 224C416 241.7 401.7 256 384 256C366.3 256 352 241.7 352 224zM541.5 403.7C534.7 387.4 516 379.7 499.7 386.5L320 461.3L140.3 386.5C124 379.7 105.3 387.4 98.5 403.7C91.7 420 99.4 438.7 115.7 445.5L236.8 496L115.7 546.5C99.4 553.3 91.7 572 98.5 588.3C105.3 604.6 124 612.3 140.3 605.5L320 530.7L499.7 605.5C516 612.3 534.7 604.6 541.5 588.3C548.3 572 540.6 553.3 524.3 546.5L403.2 496L524.3 445.5C540.6 438.7 548.3 420 541.5 403.7z"/></svg>
            <p id="desc-5" class="card-text">Lingkungan Kerja dan Bahan Berbahaya</p>
            <button type="button" data-info="Lingkungan Kerja dan Bahan Berbahaya" data-desc="Evaluasi dan konsultasi terkait lingkungan kerja yang aman serta penanganan bahan berbahaya dan beracun untuk menjaga kesehatan pekerja.">Lainnya</button>
          </article>
          <!-- Card 6 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-6">
            <svg class="card-icon" role="img" aria-label="Icon pesawat angkat dan pesawat angkut" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M144 112C144 85.5 165.5 64 192 64C218.5 64 240 85.5 240 112L240 432C240 464.5 252.1 494.1 272 516.7L272 544C272 551.1 272.9 558.1 274.7 564.7L192 544L83.9 571C73.8 573.6 64 565.9 64 555.5L64 535.7C64 530.8 66.2 526.2 70 523.2L144 464L144 406.4L21.9 455.2C11.4 459.4 0 451.7 0 440.4L0 396.4C0 388.4 3 380.8 8.3 374.9L144 225.6L144 112zM368 192L560 192C604.2 192 640 227.8 640 272L640 432C640 458.2 627.4 481.4 608 496L608 544C608 561.7 593.7 576 576 576C558.3 576 544 561.7 544 544L544 512L384 512L384 544C384 561.7 369.7 576 352 576C334.3 576 320 561.7 320 544L320 496C300.6 481.4 288 458.2 288 432L288 272C288 227.8 323.8 192 368 192zM368 368L560 368L560 336C560 318.3 545.7 304 528 304L400 304C382.3 304 368 318.3 368 336L368 368zM368 456C381.3 456 392 445.3 392 432C392 418.7 381.3 408 368 408C354.7 408 344 418.7 344 432C344 445.3 354.7 456 368 456zM584 432C584 418.7 573.3 408 560 408C546.7 408 536 418.7 536 432C536 445.3 546.7 456 560 456C573.3 456 584 445.3 584 432z"/></svg>
            <p id="desc-6" class="card-text">Pesawat Angkat dan Pesawat Angkut</p>
            <button type="button" data-info="Pesawat Angkat dan Pesawat Angkut" data-desc="Pelatihan dan advis keamanan terkait alat-alat berat untuk pengangkutan dan pengangkatan barang di area kerja guna mencegah kecelakaan kerja.">Lainnya</button>
          </article>
          <!-- Card 7 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-7">
            <svg class="card-icon" role="img" aria-label="Icon pesawat tenaga dan produksi" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M32 206.1L32 544C32 561.7 46.3 576 64 576C81.7 576 96 561.7 96 544L96 304C96 286.3 110.3 272 128 272L512 272C529.7 272 544 286.3 544 304L544 544C544 561.7 558.3 576 576 576C593.7 576 608 561.7 608 544L608 206.1C608 178.6 590.4 154.1 564.2 145.4L335.2 69.1C325.3 65.8 314.7 65.8 304.8 69.1L75.8 145.4C49.6 154.1 32 178.6 32 206.1zM496 320L144 320L144 384L496 384L496 320zM144 480L496 480L496 416L144 416L144 480zM496 512L144 512L144 576L496 576L496 512z"/></svg>
            <p id="desc-7" class="card-text">Pesawat Tenaga dan Produksi</p>
            <button type="button" data-info="Pesawat Tenaga dan Produksi" data-desc="Konsultasi tentang keselamatan mesin produksi dan alat tenaga untuk menjaga fasilitas tetap efisien dan pekerja terlindungi.">Lainnya</button>
          </article>
          <!-- Card 8 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-8">
            <svg class="card-icon" role="img" aria-label="Icon kesehatan kerja" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M531.2 41.6L572 96L616 96C629.3 96 640 106.7 640 120C640 133.3 629.3 144 616 144L560 144C552.4 144 545.3 140.4 540.8 134.4L516.7 102.3L469.7 202.2C466 210 458.4 215.3 449.8 215.9C441.2 216.5 432.9 212.5 428.1 205.3L387.2 144L344 144C330.7 144 320 133.3 320 120C320 106.7 330.7 96 344 96L400 96C408 96 415.5 100 420 106.7L444.4 143.3L490.3 45.8C493.9 38.2 501.2 33 509.6 32.1C518 31.2 526.2 34.8 531.2 41.6zM320 224C320 206.3 334.3 192 352 192L361.5 192L388.1 231.9C402.5 253.5 427.4 265.7 453.3 263.8C479.2 261.9 502.1 246.2 513.1 222.7L527 193.2C572.9 200.4 608 240.1 608 288L608 512C608 529.7 593.7 544 576 544C558.3 544 544 529.7 544 512L544 448L96 448L96 512C96 529.7 81.7 544 64 544C46.3 544 32 529.7 32 512L32 128C32 110.3 46.3 96 64 96C81.7 96 96 110.3 96 128L96 352L320 352L320 224zM144 256C144 220.7 172.7 192 208 192C243.3 192 272 220.7 272 256C272 291.3 243.3 320 208 320C172.7 320 144 291.3 144 256z"/></svg>
            <p id="desc-8" class="card-text">Kesehatan Kerja</p>
            <button type="button" data-info="Kesehatan Kerja" data-desc="Layanan pembinaan dan konsultasi tentang kesehatan dan kesejahteraan pekerja, serta pengelolaan risiko kesehatan di tempat kerja.">Lainnya</button>
          </article>
          <!-- Card 9 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-9">
            <svg class="card-icon" role="img" aria-label="Icon keahlian k3 umum" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M376 88C376 57.1 350.9 32 320 32C289.1 32 264 57.1 264 88C264 118.9 289.1 144 320 144C350.9 144 376 118.9 376 88zM400 300.7L446.3 363.1C456.8 377.3 476.9 380.3 491.1 369.7C505.3 359.1 508.3 339.1 497.7 324.9L427.2 229.9C402 196 362.3 176 320 176C277.7 176 238 196 212.8 229.9L142.3 324.9C131.8 339.1 134.7 359.1 148.9 369.7C163.1 380.3 183.1 377.3 193.7 363.1L240 300.7L240 576C240 593.7 254.3 608 272 608C289.7 608 304 593.7 304 576L304 416C304 407.2 311.2 400 320 400C328.8 400 336 407.2 336 416L336 576C336 593.7 350.3 608 368 608C385.7 608 400 593.7 400 576L400 300.7z"/></svg>
            <p id="desc-9" class="card-text">Keahlian K3 Umum</p>
            <button type="button" data-info="Keahlian K3 Umum" data-desc="Pengembangan dan pelatihan keahlian umum K3 (Keselamatan dan Kesehatan Kerja) untuk berbagai bidang industri dan sektor kerja.">Lainnya</button>
          </article>
          <!-- Card 10 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-10">
            <svg class="card-icon" role="img" aria-label="Icon sistem manajemen k3" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M280 152L360 152L360 200L280 200L280 152zM272 96C245.5 96 224 117.5 224 144L224 208C224 234.5 245.5 256 272 256L288 256L288 288L64 288C46.3 288 32 302.3 32 320C32 337.7 46.3 352 64 352L160 352L160 384L144 384C117.5 384 96 405.5 96 432L96 496C96 522.5 117.5 544 144 544L240 544C266.5 544 288 522.5 288 496L288 432C288 405.5 266.5 384 240 384L224 384L224 352L416 352L416 384L400 384C373.5 384 352 405.5 352 432L352 496C352 522.5 373.5 544 400 544L496 544C522.5 544 544 522.5 544 496L544 432C544 405.5 522.5 384 496 384L480 384L480 352L576 352C593.7 352 608 337.7 608 320C608 302.3 593.7 288 576 288L352 288L352 256L368 256C394.5 256 416 234.5 416 208L416 144C416 117.5 394.5 96 368 96L272 96zM480 440L488 440L488 488L408 488L408 440L480 440zM224 440L232 440L232 488L152 488L152 440L224 440z"/></svg>
            <p id="desc-10" class="card-text">Sistem Manajemen K3</p>
            <button type="button" data-info="Sistem Manajemen K3" data-desc="Implementasi dan audit sistem manajemen K3 sesuai standar nasional dan internasional guna meningkatkan keselamatan dan kesehatan di tempat kerja.">Lainnya</button>
          </article>
          <!-- Card 11 -->
          <article class="card" role="listitem" tabindex="0" aria-describedby="desc-11">
            <svg class="card-icon" role="img" aria-label="Icon pesawat uap dan bejana tekanan" xmlns="http://www.w3.org/2000/svg" fill="#3b69f3" stroke="currentColor" stroke-width="10" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 64C302.3 64 288 78.3 288 96L288 328.6C268.9 339.7 256 360.3 256 384C256 419.3 284.7 448 320 448C355.3 448 384 419.3 384 384C384 360.3 371.1 339.6 352 328.6L352 96C352 78.3 337.7 64 320 64zM64 448L64 512C64 547.3 92.7 576 128 576L512 576C547.3 576 576 547.3 576 512L576 240C576 213.5 554.5 192 528 192L480 192C453.5 192 432 213.5 432 240L432 384C432 445.9 381.9 496 320 496C258.1 496 208 445.9 208 384L208 240C208 213.5 186.5 192 160 192L112 192C85.5 192 64 213.5 64 240L64 448z"/></svg>
            <p id="desc-11" class="card-text">Pesawat Uap, Bejana Tekanan dan Tangki Timbun</p>
            <button type="button" data-info="Pesawat Uap dan Bejana Tekanan" data-desc="Konsultasi keamanan dan pelatihan tentang pengoperasian, inspeksi, serta pemeliharaan pesawat uap, bejana tekan dan tangki timbun agar sesuai standar.">Lainnya</button>
          </article>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

  <!-- Modal -->
  <div id="modalBackdrop" class="modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-describedby="modalDesc" tabindex="-1" hidden>
    <div class="modal" role="document">
      <button type="button" class="close-btn" aria-label="Close popup" title="Close popup">&times;</button>
      <h3 id="modalTitle"></h3>
      <p id="modalDesc"></p>
    </div>
  </div>

  <script>
    (function(){
      const modalBackdrop = document.getElementById('modalBackdrop');
      const modalTitle = document.getElementById('modalTitle');
      const modalDesc = document.getElementById('modalDesc');
      const closeBtn = modalBackdrop.querySelector('.close-btn');

      // Open modal with content from data attributes
      function openModal(title, description) {
        modalTitle.textContent = title;
        modalDesc.textContent = description;
        modalBackdrop.hidden = false;
        modalBackdrop.classList.add('active');
        // Focus modal for accessibility
        closeBtn.focus();
        // Disable scroll on body
        document.body.style.overflow = 'hidden';
      }

      // Close modal function
      function closeModal() {
        modalBackdrop.classList.remove('active');
        modalBackdrop.hidden = true;
        document.body.style.overflow = '';
      }

      // Close modal on close button or backdrop click (not modal)
      closeBtn.addEventListener('click', closeModal);
      modalBackdrop.addEventListener('click', (e) => {
        if(e.target === modalBackdrop) {
          closeModal();
        }
      });

      // Close modal on ESC key press
      window.addEventListener('keydown', (e) => {
        if(e.key === 'Escape' && !modalBackdrop.hidden) {
          e.preventDefault();
          closeModal();
        }
      });

      // Attach event listeners to all 'Lainnya' buttons
      const buttons = document.querySelectorAll('.card button');
      buttons.forEach(button => {
        button.addEventListener('click', () => {
          const title = button.getAttribute('data-info');
          const desc = button.getAttribute('data-desc');
          if (title && desc) {
            openModal(title, desc);
          }
        });
        // Enable keyboard accessibility also for enter/space keys
        button.addEventListener('keydown', (e) => {
          if(e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            button.click();
          }
        });
      });
    })();
  </script>
</body>
</html>

