<?php
header('Content-Type: application/json');
include 'connect.php';

// Ambil parameter category
$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

// Kalau category = partner → ambil gambar dengan category_id = 13
if ($category_id === 13) {
    $sql = "SELECT id, image_url, category_id 
            FROM gallery 
            WHERE category_id = 13";
    $result = $conn->query($sql);

    $images = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $images[] = [
                "id" => $row['id'],
                "image_url"    => "uploads/" . $row["image_url"],
                "category_id" => $row['category_id']
            ];
        }
    }

    echo json_encode($images);
    exit;
}

// fallback: kalau tidak ada kategori khusus, balikan kosong
echo json_encode([]);
