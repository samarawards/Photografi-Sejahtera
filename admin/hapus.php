<?php
// tambah_package.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = htmlspecialchars($_POST['name']);
    $type = htmlspecialchars($_POST['type']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);
    $image = htmlspecialchars($_POST['image']);

    if (empty($name) || empty($type) || empty($price) || empty($description)) {
        echo json_encode(['success' => false, 'message' => 'Semua field harus diisi!']);
        exit();
    }

    $query = "INSERT INTO packages (name, type, price, description, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
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