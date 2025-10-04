<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="\Photografi-Sejahtera\signup\assets\css\style.css">
  </head>
<body>
  <header>Logo</header>
    <div class="box">
        <h1>Sign Up</h1>
        <p>Lorem ipsum dolor sit amet adipiscing elit.</p>
        <form id = "signupform" action="proses_registrasi.php" method="POST" onsubmit="return validasiForm()">
        <label>Name*</label>
        <input type="text" id="nama" name="nama"required>
        <p class="error-message" id="nameReq"></p>
        
        <label>Email*</label>
        <input type="email" id="email" name="email" required>
        <p class="error-message" id="emailReq"></p>

        <label>Password*</label>
        <input type="password" id="password" name="password" required>
        <!-- <div class="requirement-box">
          <label><input type="checkbox" class="requirement" id="8char" disabled> At least 8 characters</label>
          <label><input type="checkbox" class="requirement"id="uppercase" disabled> Include UPPERCASE</label>
          <label><input type="checkbox" class="requirement" id="number" disabled> Include number</label>
        </div> -->
        
        <button class="btn-black" id="button">Sign up</button>
        <button class="btn-white"><i class='bx bxl-google'></i> Sign up with Google</button>
        </form>
        
        <div class="login-link" id="output">
            Already have an account? <a href="/Photografi-Sejahtera/login/">Log In</a>
        </div>
    </div>
  <footer>© 2025 Sejahtera Photography</footer>
  <script src="script_signup.js"></script>

  </body>
</html>