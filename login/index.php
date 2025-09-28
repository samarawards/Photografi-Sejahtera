<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="\Photografi-Sejahtera\login\assets\css\style.css">
    </head>
    <body>
        <div>
            <header>Logo</header>
            <div class="box">
                <h1>Log In</h1>
                <p>Lorem ipsum dolor sit amet adipiscing elit.</p>
                <form id="loginform" action="login.php" method="POST">
                    <label>Email*</label>
                    <input type="text" id="email" name= "email"required>
                    
                    <div class="forgot-pass">
                        <label>Password*</label> 
                        <a href="#">Forgot yout password?</a>
                    </div>
                    <input type="password" id="password" name="password"required>
                    <button class="btn-black" id="button">Sign up</button>
                    <button class="btn-white"><i class='bx bxl-google'></i> Sign up with Google</button>
                    <div class="signup-link">
                        Don't have an account? <a href="/Photografi-Sejahtera/signin/">Sign up</a>
                    </div>
                </form>
            </div>
            <footer>© 2025 Sejahtera Photography</footer>
        </div>

        <div style="background-color: grey;">
            <img src="\Photografi-Sejahtera\login\assets\image\nct-dream-chenle-hot-sauce-4k-wallpaper-3840x2160-uhdpaper.com-109.0_a.jpg" width="100%" height="100%">
        </div>

        <script>
            document.getElementById("loginform").addEventListener("button", async (e) => {
                e.preventDefault();

                const email = document.getElementById("email").value;
                const password = document.getElementById("password").value;

                // Kirim ke PHP
                const response = await fetch("login.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email, password })
                });

                // const result = await response.json();
                // document.getElementById("message").textContent = result.message;
            });
        </script>
    </body>
</html>