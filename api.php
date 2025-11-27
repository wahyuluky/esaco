<?php
header('Content-Type: application/json');

include 'connect.php';

// Jika ada parameter category=partner
$category = isset($_GET['category']) ? $_GET['category'] : null;

// JOIN gallery dengan category
$sql = "
  SELECT g.id, g.image_url, c.name 
  FROM gallery g
  LEFT JOIN categories c ON g.category_id = c.id
  ORDER BY g.id DESC
";

if ($category) {
    $sql .= " WHERE c.name = '" . $conn->real_escape_string($category) . "' OR g.category = '" . $conn->real_escape_string($category) . "'";
}

$result = $conn->query($sql);

$images = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = [
            "id"       => $row["id"],
            "image_url"    => "uploads/" . $row["image_url"], 
            "category" => strtolower($row["name"] ?? "lainnya")
        ];
    }
}

echo json_encode($images, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
$conn->close();
?>
