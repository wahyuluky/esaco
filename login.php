<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

if ($hashed_password && $password === $hashed_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Username atau password salah'); window.location.href='login.php';</script>";
}

        $stmt->close();
    } else {
        echo "<script>alert('Mohon isi username dan password'); window.location.href='login.php
        ';</script>";
    }
}

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
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="style.css">
<title>ESACO Login</title>
<style>
  /* Reset some default styles */
  * {
    box-sizing: border-box;
  }

  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-container {
    background: #fff;
    width: 320px;
    padding: 32px 24px 40px 24px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    text-align: center;
    user-select: none;
  }

  .logo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 32px;
  }

  
  .logo img {
    /* width: 48px; */
    height: 60px;
    flex-shrink: 0;
  }

  .logo-text {
    font-weight: 700;
    font-size: 1.5rem;
    color: #0a122a;
    margin-left: 12px;
    letter-spacing: 0.05em;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  input[type="text"],
  input[type="password"] {
    font-size: 1rem;
    padding: 12px 14px;
    margin-bottom: 16px;
    border: 1.8px solid #d6d6d6;
    border-radius: 10px;
    outline-offset: 2px;
    outline-color: transparent;
    transition: border-color 0.25s ease;
    color: #444;
  }

  input[type="text"]::placeholder,
  input[type="password"]::placeholder {
    color: #bbb;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #3b7df7;
    outline-color: #3b7df7;
  }

  .forgot-link {
    font-size: 0.875rem;
    color: #2f66f7;
    margin-bottom: 24px;
    cursor: pointer;
    text-align: left;
    text-decoration: none;
  }
  .forgot-link:hover,
  .forgot-link:focus {
    text-decoration: underline;
    outline: none;
  }
  
  button.login-btn {
    background-color: #3b7df7;
    color: white;
    border: none;
    padding: 12px 0;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    user-select: none;
    transition: background-color 0.3s ease;
  }
  button.login-btn:hover,
  button.login-btn:focus {
    background-color: #2658c4;
    outline: none;
  }

  /* Responsive */
  @media (max-width: 360px) {
    .login-container {
      width: 100%;
      margin: 0 16px;
      padding: 24px 16px 32px 16px;
    }
  }
</style>
</head>
<body> 
<div class="login-container" role="main" aria-label="Login form for ESACO system">
  <div class="logo" aria-label="ESACO logo">
    <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
  </div>
  <form id="loginForm" action="login.php" method="POST">
    <input type="text" id="username" name="username" placeholder="Masukkan Username" autocomplete="username" required aria-required="true" aria-label="Username input"/>
    <input type="password" id="password" name="password" placeholder="Masukkan Password" autocomplete="current-password" required aria-required="true" aria-label="Password input"/>
    <a href="#" class="forgot-link" tabindex="0" aria-label="Forgot password link">Forgot password?</a>
    <button type="submit" class="login-btn" aria-label="Login button">Login</button>
  </form>
</div> 
<script>
  // (Opsional) Validasi ringan, TAPI biarkan form tetap submit
  document.getElementById('loginForm').addEventListener('submit', function(e) {
    var u = this.username.value.trim();
    var p = this.password.value.trim();
    if (!u || !p) {
      e.preventDefault();
      alert('Username dan password wajib diisi.');
    }
  });
</script>

</body>
</html>
