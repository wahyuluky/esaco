<?php

include 'connect.php';

// Ambil artikel, urutkan berdasarkan tanggal terbaru
$sql = "SELECT * FROM articles ORDER BY date DESC";
$result = $conn->query($sql);

$articles = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Format tanggal hanya YYYY-MM-DD tanpa jam
        if (!empty($row['date'])) {
            $row['date'] = date("Y-m-d", strtotime($row['date']));
        }
        $articles[] = $row;
    }
}

$conn->close();

// Return articles as JSON
header('Content-Type: application/json');
echo json_encode($articles);
