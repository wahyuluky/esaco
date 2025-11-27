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

/* Header */
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
}


.btn-contact:hover,
.btn-contact:focus {
  box-shadow: 0 6px 14px rgb(37 99 235 / 0.65);
  outline: none;
}

/* Toggle Button */
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
      font-size: 24px;
      background: none;
      border: none;
      cursor: pointer;
    }

    .menu-toggle span {
      width: 25px;
      height: 3px;
      background: #14264c;
      border-radius: 3px;
    }

    @media (max-width: 768px) {
      nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px;
        right: 0;
        background: white;
        width: 200px;
        padding: 1rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      }
      nav.active { display: flex; }
      .menu-toggle { display: flex; }
      .btn-contact { display: none; } /* optional: sembunyikan di mobile */
    }
  </style>
</head>
<body>
  <?php include 'connect.php'; 
    $current_page = basename($_SERVER['PHP_SELF']);

  // ambil gambar logo dari database berdasarkan alt_text
   $sql = "SELECT image_url, alt_text FROM gallery WHERE alt_text = 'logo' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // tambahkan folder lokasi upload
        $logo_path = "uploads/" . $row['image_url'];
        $logo_alt  = $row['alt_text'];
    } else {
        $logo_path = "uploads/web-esaco-logo-1-2048x702.png";
        $logo_alt  = "logo";
    }
  ?>

  <header>
    <!-- Your header code here -->
        <div class="navbar container" role="banner">
            <div class="logo" aria-label="ESACO Logo">
                <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
            </div>

            <div class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <nav aria-label="Primary navigation" id="nav">
                <a href="homepage.php" class="<?php echo ($current_page == 'homepage.php') ? 'active' : ''; ?>">Home</a>
                <a href="service.php" class="<?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">Services</a>
                <a href="aboutus.php" class="<?php echo ($current_page == 'aboutus.php') ? 'active' : ''; ?>">About Us</a>
                <a href="blog.php" class="<?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>">Blog</a>
            </nav>
            <!-- <button class="btn-contact" type="button">Contact Us</button> -->
            <a href="contact.php" class="btn-contact" type="button">Contact Us</a>
        </div>
  </header>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("menu-toggle");
        const navMenu = document.getElementById("nav");

        toggleBtn.addEventListener("click", () => {
            navMenu.classList.toggle("active");
        });
    });

  </script>


</body>
</html>
