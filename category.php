<?php
header('Content-Type: application/json');
require 'connect.php';

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $name = trim($_POST['name'] ?? '');
    if ($name === '') {
        echo json_encode(["success" => false, "message" => "Nama kategori kosong"]);
        exit;
    }
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $conn->error]);
    }
    $stmt->close();
}

elseif ($action === 'edit') {
    $id = intval($_GET['id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    if ($id <= 0 || $name === '') {
        echo json_encode(["success" => false, "message" => "Data tidak valid"]);
        exit;
    }
    $stmt = $conn->prepare("UPDATE categories SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $name, $id);
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $conn->error]);
    }
    $stmt->close();
}

elseif ($action === 'delete') {
    $id = intval($_GET['id'] ?? 0);
    if ($id <= 0) {
        echo json_encode(["success" => false, "message" => "ID kategori tidak valid"]);
        exit;
    }
    $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $conn->error]);
    }
    $stmt->close();
}

else {
    echo json_encode(["success" => false, "message" => "Action tidak dikenali"]);
}
$conn->close();
?>
