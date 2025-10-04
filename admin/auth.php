<?php
// tambah_package.php
header('Content-Type: application/json');
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $type = isset($_POST['type']) ? htmlspecialchars(trim($_POST['type'])) : '';
    $price = isset($_POST['price']) ? htmlspecialchars(trim($_POST['price'])) : '';
    $description = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : '';
    $image = isset($_POST['image']) ? htmlspecialchars(trim($_POST['image'])) : '';

    if (empty($name) || empty($type) || empty($price) || empty($description)) {
        echo json_encode(['success' => false, 'message' => 'Semua field harus diisi!']);
        exit();
    }

    if (!in_array($type, ['Umum', 'Perusahaan'])) {
        echo json_encode(['success' => false, 'message' => 'Tipe paket tidak valid!']);
        exit();
    }

    $query = "INSERT INTO packages (name, type, price, description, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    
    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Error prepare: ' . $koneksi->error]);
        exit();
    }

    $stmt->bind_param("ssdss", $name, $type, $price, $description, $image);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Package berhasil ditambahkan!', 'id' => $stmt->insert_id]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Method tidak valid']);
}

$koneksi->close();
?>