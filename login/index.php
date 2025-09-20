<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="\Photorgrafi-Website\Photografi-Sejahtera\login\assets\css\style.css">
    </head>
    <body>
        <div>
            <header>Logo</header>
            <div class="box">
                <h1>Log In</h1>
                <p>Lorem ipsum dolor sit amet adipiscing elit.</p>
                <form>
                    <label>Email*</label>
                    <input type="text" id="email" required>
                    
                    <div class="forgot-pass">
                        <label>Password*</label> 
                        <a href="#">Forgot yout password?</a>
                    </div>
                    <input type="email" id="password" required>
                    <button class="btn-black" id="button">Sign up</button>
                    <button class="btn-white"><i class='bx bxl-google'></i> Sign up with Google</button>
                    <div class="signup-link">
                        Don't have an account? <a href="http://localhost/Photorgrafi-Website/Photografi-Sejahtera/signin/">Sign up</a>
                    </div>
                </form>
            </div>
            <footer>© 2025 Sejahtera Photography</footer>
        </div>

        <div style="background-color: grey;">
            <img src="\Photorgrafi-Website\Photografi-Sejahtera\login\assets\image\nct-dream-chenle-hot-sauce-4k-wallpaper-3840x2160-uhdpaper.com-109.0_a.jpg" width="100%" height="100%">
        </div>

        <script>
            document.getElementById('button').addEventListener("click", function(){
                const emailInput = document.getElementById('email').value;
                const passInput = document.getElementById('password').value;

                //ambil data dari local storage
                let users = JSON.parse(localStorage.getItem("users"));

                let isExist = users.find(user => user.email === emailInput);

                if (isExist) {
                    if (isExist.password === passInput) {
                        alert("Login Success!");
                        console.log(isExist.name + " already logged in");
                    } else {
                        alert("Wrong password!!");
                    }
                } else {
                    alert("Email not found!");
                }
            })
        </script>
    </body>
</html>