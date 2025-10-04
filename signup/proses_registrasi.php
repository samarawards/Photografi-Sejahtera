<?php
    require_once 'signup.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (empty($nama) || empty($email) || empty($_POST['password'])) {
            echo "<script>
                    alert('Semua field harus diisi!');
                    window.location.href = 'index.php';
                </script>"; return 'href="index.php"';
        } else {
            // 🔍 Cek apakah email sudah ada
            $cek = $conn->prepare("SELECT email FROM users WHERE email = ?");
            $cek->bind_param("s", $email);
            $cek->execute();
            $cek->store_result();

            if ($cek->num_rows > 0) {
                echo "
                    <div style='
                        position: fixed; 
                        top: 0; left: 0; right: 0; bottom: 0; 
                        background: rgba(0,0,0,0.5); 
                        display: flex; 
                        justify-content: center; 
                        align-items: center;'>
                        
                        <div style='background: white; padding: 20px; border-radius: 10px; text-align: center;'>
                            <h3>Email $email sudah terdaftar!</h3>
                            <p>Silakan gunakan email lain.</p>
                            <a href='\Photografi-Sejahtera\signup\index.php'>Kembali ke Signup</a>
                        </div>
                    </div>
                    ";
            } else {
                // Kalau belum ada → insert user baru
                $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sss", $nama, $email, $password);

                if ($stmt->execute()) {
                    echo "<script>
                            alert('Registrasi berhasil! Selamat datang, $nama.');
                            window.location.href = '/Photografi-Sejahtera/dashboard/index.php';
                        </script>";
                } else {
                    echo "<script>
                            alert('Terjadi error saat registrasi: " . $conn->error . "');
                            window.location.href = 'index.php';
                        </script>";
                }
                $stmt->close();
            }
            $cek->close();
        }
    }
    else {
        header("Location: index.php");
        exit();
    }
    $conn->close();
?>