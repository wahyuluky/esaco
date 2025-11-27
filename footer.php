<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
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
    /* CTA Section */
    .cta-section {
      background-color: #2563eb;
      color: white;
      padding: 2.5rem 1rem;
      text-align: center;
      font-weight: 600;
      user-select: none;
    }
    .cta-section p {
      margin: 0 0 1rem 0;
      font-size: 1.1rem;
      max-width: 720px;
      margin-left: auto;
      margin-right: auto;
    }
    .cta-btn {
      background-color: white;
      color: #2563eb;
      border: none;
      padding: 0.6rem 1.75rem;
      font-weight: 700;
      border-radius: 10px;
      cursor: pointer;
      font-size: 1rem;
      user-select: none;
      transition: background-color 0.3s ease;
    }
    .cta-btn:hover,
    .cta-btn:focus {
      background-color: #dbeafe;
      outline: none;
    }

    /* Footer */
    footer {
      background-color: #1e2a5a;
      color: #cbd5e1;
      font-size: 0.85rem;
      padding: 2rem 1rem 3rem;
      user-select: none;
    }
    footer .container {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .footer-left, .footer-contact, .footer-partners {
      flex: 1 1 280px;
      min-width: 280px;
    }
    .footer-left {
      flex: 1 1 220px;
      min-width: 220px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      align-items: flex-start;
    }
    .footer-left a {
        color: #cbd5e1;
    }
    .logo img{
      height: 48px;
      user-select: none;
      background: white;
      border-radius: 5px;
    }

    .footer-slogan {
        font-size: 15px;
    }
    .footer-description {
      font-weight: 600;
      color: white;
    }
    .footer-contact h4,
    .footer-partners h4 {
      color: #94a3b8;
      margin-bottom: 0.75rem;
      font-weight: 700;
      font-size: 1rem;
    }
    .footer-contact p,
    .footer-contact a {
      margin: 0.25rem 0;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #cbd5e1;
      word-break: break-word;
    }
    .footer-contact a:hover,
    .footer-contact a:focus {
      color: white;
      outline: none;
    }
    .footer-contact svg {
      fill: #94a3b8;
      flex-shrink: 0;
      width: 18px;
      height: 18px;
    } 
    .partner-logo {
      max-height: 50px;
      /* filter: brightness(0) invert(1); */
      max-width: 100px;
      object-fit: contain;
      user-select: none;
    }
    /* Privacy link */
    .privacy-policy {
      color: #94a3b8;
      font-size: 0.75rem;
      text-align: center;
      margin-top: 2rem;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .footer-contacts, .footer-partners {
        flex: 1 1 100%;
      }
      footer .container-footer {
        flex-direction: column;
        gap: 2rem;
      }
    }

    .footer-partners ul li {
  margin: 0.4rem 0;
  padding-left: 18rem;
}

.footer-partners ul li a {
  color: #cbd5e1;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-partners ul li a:hover,
.footer-partners ul li a:focus {
  color: white;
}

   

    </style>
</head>
<body>
    <?php include 'connect.php'; 
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
    $querys = "SELECT image_url, alt_text FROM gallery WHERE alt_text LIKE 'partner%'"; 
    $hasil = $conn->query($querys);
    ?>


    <section class="cta-section" aria-label="Contact us call to action">
        <p>Ready to Discuss Your Business Idea? Reach Out to Us.</p>
        <p style="font-weight: 400; font-size: 0.9rem; max-width: 500px; margin: 0 auto 1.5rem;">
        For further consultation and question, please do not hesitate to contact the following contacts.
        </p>
        <button class="cta-btn" aria-label="Contact us now">Contact Us</button>
    </section>

    <?php include 'partner.php'; ?>

    <footer aria-label="Footer with contact and partners information">
        <div class="container">
            <div class="footer-left">
                <div class="logo" aria-label="ESACO Logo">
                    <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
                </div>
                <div class="footer-slogan">Innovative Solutions for Your Business</div>
                <div class="footer-links" aria-label="Footer navigation links">
                    <a href="privacy.php" tabindex="0">Privacy Policy</a>
                    <br>
                    <a href="login.php" tabindex="0">Login</a>
                </div>
            </div>

            <div class="footer-contact" style="padding-left: 10rem;">
                <h4>Contact</h4>
                <p><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.072 11.072 0 003.89.59 1 1 0 011 1v3.5a1 1 0 01-1 1A17 17 0 013 6a1 1 0 011-1h3.5a1 1 0 011 1 11.072 11.072 0 00.6 3.9 1 1 0 01-.21 1.11l-2.27 2.28z"/></svg>031 99855516</p>
                <p><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM9.71002 19.6674C8.74743 17.6259 8.15732 15.3742 8.02731 13H4.06189C4.458 16.1765 6.71639 18.7747 9.71002 19.6674ZM10.0307 13C10.1811 15.4388 10.8778 17.7297 12 19.752C13.1222 17.7297 13.8189 15.4388 13.9693 13H10.0307ZM19.9381 13H15.9727C15.8427 15.3742 15.2526 17.6259 14.29 19.6674C17.2836 18.7747 19.542 16.1765 19.9381 13ZM4.06189 11H8.02731C8.15732 8.62577 8.74743 6.37407 9.71002 4.33256C6.71639 5.22533 4.458 7.8235 4.06189 11ZM10.0307 11H13.9693C13.8189 8.56122 13.1222 6.27025 12 4.24799C10.8778 6.27025 10.1811 8.56122 10.0307 11ZM14.29 4.33256C15.2526 6.37407 15.8427 8.62577 15.9727 11H19.9381C19.542 7.8235 17.2836 5.22533 14.29 4.33256Z"></path></svg><a href="http://esaco.co.id/" target="_blank" rel="noopener noreferrer" aria-label="Visit ESACO official website">http://esaco.co.id/</a></p>
                <p><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 2l-8 5-8-5h16zm0 12H4v-9l8 5 8-5v9z"/></svg><a href="mailto:esaco@gmail.com" aria-label="Send email to esaco@gmail.com">esaco@gmail.com</a></p>
                <p>Ruko Section One, Jl. Rungkut Industri Raya No.1 Kav. A-6, Kendangsari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60293</p>
            </div>

            <div class="footer-partners">
                <h4 style="padding-left: 18rem;">Quick Link</h4>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </div>

    </footer>

  <?php $conn->close(); // Close the database connection ?>
</body>
</html>