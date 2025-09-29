<?php
$conn = new mysqli("localhost", "root", "", "ph_sejahtera");

// $username = htmlspecialchars($_POST['nama']);
// $email = htmlspecialchars($_POST['email']);
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // biar aman

// $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

// if ($conn->query($sql) === TRUE) {
//     echo "Sign up successful!";
// } else {
//     echo "Error: " . $conn->error;
// }

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
