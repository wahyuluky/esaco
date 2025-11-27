<?php
include 'connect.php';

// Handle the upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alt_text = $_POST['alt_text'];
    $category_id = $_POST['category_id'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Upload file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Insert into database
        $sql = "INSERT INTO gallery (img_url, alt_text, category_id) VALUES (:url, :alt_text, :category_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['url' => $target_file, 'alt_text' => $alt_text, 'category_id' => $category_id]);
        header('Location: managegambar.php'); // Redirect to the gallery page
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
