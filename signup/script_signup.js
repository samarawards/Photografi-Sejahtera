function validasiForm(){
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (nama.trim() === "" || email.trim() === "" || password.trim() === ""){
        alert("Semua field harus diisi!");
        return false;
    }

    // Validasi format email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Format email tidak valid!");
        return false;
    }

    // ✅ Validasi password (3 aturan utama)
    if (password.length < 6){
        alert("Password minimal 8 karakter.");
        return false;
    }
    // if (!/[A-Z]/.test(password)) {
    //     alert("Password harus mengandung setidaknya satu huruf besar (A–Z).");
    //     return false;
    // }
    // if (!/[0-9]/.test(password)) {
    //     alert("Password harus mengandung setidaknya satu angka (0–9).");
    //     return false;
    // }

    console.log("Validasi berhasil, data dikirim ke server.");
    return true;
}
