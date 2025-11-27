<?php
include 'connect.php';

header('Content-Type: application/json'); // penting!

$alt_text = $_POST['alt_text'] ?? '';
$category_id = $_POST['category_id'] ?? '';

if (isset($_FILES['image'])) {
    $fileName = time() . "_" . basename($_FILES['image']['name']);
    $targetPath = "uploads/" . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        $sql = "INSERT INTO gallery (alt_text, category_id, image_url, date) 
        VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $alt_text, $category_id, $fileName);

        if ($stmt->execute()) {
            echo json_encode([
                "status" => "success",
                "message" => "Gambar berhasil diupload!",
                "file" => $fileName
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Gagal menyimpan ke database: " . $stmt->error
            ]);
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Gagal mengupload gambar."
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Tidak ada gambar yang dikirim."
    ]);
}
