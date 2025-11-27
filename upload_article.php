<?php
// Database configuration
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "esaco"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $konten_html = $_POST['konten_html'] ?? ''; // <-- dari TinyMCE

    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Save the file to the specified directory
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        // Insert into the database
        $stmt = $conn->prepare("INSERT INTO articles (title, image_url, date, description, content) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $judul, $target_file, $tanggal, $deskripsi, $konten_html);

        if ($stmt->execute()) {
            header('Location: upload_artikel.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
