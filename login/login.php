<?php
    $koneksi = new mysqli("localhost", "root", "", "ph_sejahtera");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $koneksi->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "<script>
                    alert('Login successful! Welcome " . $row['username'] . "');
                    window.location.href = '/Photografi-Sejahtera/dashboard/index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Wrong password!');
                    window.location.href = '/Photografi-Sejahtera/login/index.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email not found!');
                window.location.href = '/Photografi-Sejahtera/login/index.php';
              </script>";
    }

    $koneksi->close();
?>
