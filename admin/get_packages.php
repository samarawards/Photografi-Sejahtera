<?php
// Mengizinkan browser membaca data JSON
header("Content-Type: application/json");

// Sambungkan ke database
include 'config.php';

// Query semua paket
$sql = "SELECT * FROM packages ORDER BY id DESC";
$result = $koneksi->query($sql);

$packages = [];

// Jika ada data, masukkan ke array
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $packages[] = [
            "id" => $row["id"],
            "name" => $row["name"],
            "type" => $row["type"],
            "price" => $row["price"],
            "description" => $row["description"],
            "image" => $row["image"]
        ];
    }
}

// Kembalikan dalam format JSON
echo json_encode($packages);
?>
