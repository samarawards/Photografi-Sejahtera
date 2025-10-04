<?php
$conn = new mysqli("localhost", "root", "", "ph_sejahtera");



if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
