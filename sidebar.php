<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
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
    background: #ffff;
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
            align-items: center;
            justify-content: center;
            bottom: 20px;
            left: 0;
            right: 0;
            display: flex;
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


    /* Responsive */
    @media (max-width: 768px) {
      body {
        padding-left: 0; /* hilangkan ruang sidebar */
      }
      .sidebar {
        transform: translateX(-100%);
      }
      .sidebar.open {
        transform: translateX(0);
      }
    }
    </style>
</head>
<body>
    <?php include 'connect.php'; // Include database connection 
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


    <div class="sidebar" id="sidebar">
        <div class="logo" aria-label="ESACO Logo">
            <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a>
            </li>

            <div class="nav-section">Konten</div>
            <li class="nav-item">
                <a href="manageartikel.php" class="nav-link <?php echo ($current_page == 'manageartikel.php') ? 'active' : ''; ?>">Artikel</a>
            </li>
            <li class="nav-item">
                <a href="managegambar.php" class="nav-link <?php echo ($current_page == 'managegambar.php') ? 'active' : ''; ?>">Galeri</a>
            </li>
        </ul>
        <div class="logout"><a href="homepage.php">Log Out</a></div>
    </div>

      <script>
        function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('open');
        document.getElementById('sidebar').classList.toggle('closed');
        }
    </script>
</body>
</html>