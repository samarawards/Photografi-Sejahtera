<?php
// get_packages.php - Ambil semua data packages
require_once 'koneksi.php';

header('Content-Type: application/json');

$query = "SELECT * FROM packages ORDER BY created_at DESC";
$result = $koneksi->query($query);

$packages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $packages[] = $row;
    }
}

echo json_encode($packages);
$koneksi->close();
?>