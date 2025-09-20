<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="\Photorgrafi-Website\Photografi-Sejahtera\signin\assets\css\style.css">
  <style>
    .requirement-box {
      margin-top: 0px;   /* jarak atas dari input password */
    }

    .requirement-box label {
      margin: -7px 0;    /* jarak antar checklist (atas-bawah) */
      font-size: 1px;   /* biar teks lebih rapi */
    }

    .requirement {
      width: 7px;
      height: 7px;
      margin-right: 3px; /* jarak antara checkbox & teks */
      font-size: 1px;
      text-align: left;
    }

    .error-message {
      margin: none !important;
      font-size: 1px !important;
      color: red !important;
      text-align: left !important;
    }

    
  </style>
  </head>
<body>
  <header>Logo</header>
    <div class="box">
        <h1>Sign Up</h1>
        <p>Lorem ipsum dolor sit amet adipiscing elit.</p>
        <form>
        <label>Name*</label>
        <input type="text" id="name"required>
        <p class="error-message" id="nameReq"></p>
        
        <label>Email*</label>
        <input type="email" id="email" required>
        <p class="error-message" id="emailReq"></p>

        <label>Password*</label>
        <input type="password" id="password" required>
        <div class="requirement-box">
          <label><input type="checkbox" class="requirement" id="8char" disabled> At least 8 characters</label>
          <label><input type="checkbox" class="requirement"id="uppercase" disabled> Include UPPERCASE</label>
          <label><input type="checkbox" class="requirement" id="number" disabled> Include number</label>
        </div>
        
        <button class="btn-black" id="button">Sign up</button>
        <button class="btn-white"><i class='bx bxl-google'></i> Sign up with Google</button>
        </form>
        
        <div class="login-link" id="output">
            Already have an account? <a href="http://localhost/Photorgrafi-Website/Photografi-Sejahtera/login/">Log In</a>
        </div>
    </div>
  <footer>© 2025 Sejahtera Photography</footer>

<script>
  let passwordInput = document.getElementById("password");
  let checkPassword = false;

  passwordInput.addEventListener("keyup", function () {
    const pass = this.value;

    // Checkbox elements
    const minCharPass = document.getElementById("8char");
    const uppercasePass = document.getElementById("uppercase");
    const numberPass = document.getElementById("number");

    // Cek panjang minimal 8
    minCharPass.checked = pass.length >= 8;

    // Cek huruf besar
    uppercasePass.checked = /[A-Z]/.test(pass);

    // Cek angka
    numberPass.checked = /\d/.test(pass);

    // update checkPassword setiap kali input berubah
    checkPassword = minCharPass.checked && uppercasePass.checked && numberPass.checked;
  });

  document.getElementById("button").addEventListener("click", function (event) {
    event.preventDefault(); // cegah reload

    const nameInput = document.getElementById("name").value.trim();
    const emailInput = document.getElementById("email").value.trim();
    const passValue = document.getElementById("password").value;

    // reset pesan error
    document.getElementById('nameReq').innerText = "";
    document.getElementById('emailReq').innerText = "";

    if (nameInput === "") {
      document.getElementById('nameReq').innerText = "Name must be filled!!";
      return;
    } 
    if (emailInput === "") {
      document.getElementById('emailReq').innerText = "Email must be filled!!";
      return;
    }
    if (/\s/.test(emailInput)) {
      alert("❌ Email must not contain spaces");
      return;
    }
    if (!checkPassword) {
      alert("❌ Password is not strong enough");
      return;
    }

    console.log("Name: " + nameInput);
    console.log("Email: " + emailInput);
    console.log("Password: " + passValue);
  });
</script>

</body>
</html>