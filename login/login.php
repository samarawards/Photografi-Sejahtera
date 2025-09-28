<?php
    $koneksi = new mysqli("localhost", "root", "", "ph_sejahtera");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $koneksi->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome " . $row['username'];
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Email not found!";
    }

    $koneksi->close();
?>