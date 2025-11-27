<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $pdo->prepare("SELECT image_url FROM gallery WHERE id = ?");
    $stmt->execute([$id]);
    $img = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($img) {
        $filePath = "uploads/" . $img['image_url'];

        $delete = $pdo->prepare("DELETE FROM gallery WHERE id = ?");
        $delete->execute([$id]);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        header("Location: managegambar.php?msg=deleted");
        exit;
    } else {
        echo "Image not found.";
    }
} else {
    echo "Invalid request method.";
}

