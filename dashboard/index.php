<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="\Photografi-Sejahtera\aassets\style.css">
  <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Dashboard/Photography-Sejahtera</title>
</head>
<body>
  <!-- header navigasi -->
  <header>
      <div class="logo">Logo</div>
      <nav>
        <a href="#Tentang-kami">Tentang kami</a>
        <a href="#Paket-foto">Paket foto</a>
        <a href="#Galeri">Galeri</a>
        <div class="dropdown">
          <a href="#Kontak-kami" class="dropdown-btn">Kontak kami<span class="arrow"></span></a>
          <div class="dropdown-content">
            <a href="#WhatsApp">WhatsApp</a>
            <a href="#Email">Email</a>
          </div>
        </div>
      </nav>
      <a href="\Photografi-Sejahtera\signup" class="signup-btn">Sign Up</a>
  </header>
  <!-- Tentang Kami -->
  <section id="Tentang-kami">
    <h1>
      Abadikan Momen Indah <br> Anda bersama Studio<br>Fotografi Sejahtera 📸
    </h1>
    <p style="text-align: center">
      Kami siap membantu Anda menangkap setiap momen berharga dalam hidup. Dengan <br>
      pengalaman dan keahlian, kami menjamin hasil yang memuaskan. <br><br>
      <button class="btn-dark">Lihat</button>
      <button class="btn-light"> <a href="http://localhost/Photorgrafi-Website/Photografi-Sejahtera/package/#">Paket</a></button>
    </p><br>
  </section>
  <!-- gambar1 -->
  <div class="image-container">
    <img src="\Photografi-Sejahtera\aassets/img/sylusss.jpg" alt="">
  </div><br><br><br><br><br><br>
  <!-- Paket Foto -->
  <section id="Paket-foto">
    <h2>Paket Foto Menarik untuk Setiap<br>Momen Spesial Anda Bersama Kami</h2>
    <div class="grid-3">
      <div class="card">
        <i class='bx  bx-camera'  ></i>  
        <h3>Pilih Paket yang Sesuai dengan Kebutuhan dan Anggaran Anda</h3>
        <p>Kami menawarkan berbagai paket foto untuk setiap momen berharga Anda.</p>
        <a>Lihat &rsaquo;</a>      
      </div>
      <div class="card">
        <i class='bx  bx-camera'  ></i>  
        <h3>Paket Prewedding: Ciptakan Kenangan Indah Sebelum Hari Bahagia Anda</h3>
        <p>Paket ini dirancang untuk menangkap momen-momen romantis Anda.</p>
        <a>Lihat &rsaquo;</a>
      </div>
      <div class="card">
        <i class='bx  bx-camera'  ></i>  
        <h3>Paket Wisuda: Rayakan Keberhasilan Anda dengan Foto yang Memukau</h3>
        <p>Abadikan momen kelulusan Anda dengan foto yang penuh makna.</p>
        <a>Lihat &rsaquo;</a>
      </div>
    </div>
  </section>
  <!-- Galeri -->
  <section id="Galeri">
    <h2>Galeri Foto</h2>
    <p style="text-align: center">Lihat hasil pemotretan terbaik kami di sini</p>
    <div class="gallery">
      <div class="gallery img">
        <img src="\Photografi-Sejahtera\aassets\img/Sylus2.jpg" alt="">
      </div>
      <div class="gallery img">
        <img src="\Photografi-Sejahtera\aassets\img/Sylus1.jpg" alt="">
      </div>
      <div class="gallery img">
        <img src="\Photografi-Sejahtera\aassets\img/Sylus3.jpg" alt="">
      </div>
    </div>
  </section>
  <!-- Kontak Kami -->
  <section id="Kontak-kami">
    <div class="kontak-container">

    <!-- Kontak info -->
      <div class="kontak-info">
        <h2 style="text-align: left">Hubungi Kami</h2>
        <p>Kami siap membantu Anda dengan pertanyaan apapun.</p>

        <div class="info-item">
          <span class="icon">📧</span>
          <span>info@studiofotografisejahtera.com</span>
        </div>

        <div class="info-item">
          <span class="icon">📞</span>
          <span>+62 812 3456 7890</span>
        </div>

        <div class="info-item">
          <span class="icon">📍</span>
          <span>Jl. Contoh No. 123, Jakarta 10100, ID</span>
        </div>
      </div>
    <!-- Kontak form -->
      <div class="kontak-form">
        <form>
          <div class="form-row">
            <div class="form-group">
              <p style="text-align: left">Nama Depan</p>
              <input type="text" class="form-input">
            </div>
            <div class="form-group">
              <p style="text-align: left">Nama Belakang</p>
              <input type="text" class="form-input">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <p style="text-align: left">Email</p>
              <input type="text" class="form-input">
            </div>
            <div class="form-group">
              <p style="text-align: left">Nomor Telepon</p>
              <input type="text" class="form-input">
            </div>
          </div>
          <div class="form-group">
          <p style="text-align: left">Pilih Topik</p>
          <select id="topic" class="form-select">
            <option>Pilih satu...</option>
            <option>Fotografi</option>
            <option>Videografi</option>
            <option>Lainnya</option>
          </select>
        </div><p>Apa yang Anda butuhkan?</p>
        <div class="form-row">
          <div class="form-group">
            <label><input type="radio" name="opsi" class="form-radio"> Pilihan Pertama</label>
            <label><input type="radio" name="opsi" class="form-radio"> Pilihan Kedua</label>
            <label><input type="radio" name="opsi" class="form-radio"> Pilihan Ketiga</label>
          </div>
          <div class="form-group">
            <label><input type="radio" name="opsi" class="form-radio"> Pilihan Keempat</label>
            <label><input type="radio" name="opsi" class="form-radio"> Pilihan Kelima</label>
            <label><input type="radio" name="opsi" class="form-radio"> Lainnya</label>
          </div>
        </div>
        <div class="form-group">
          <p>Pesan</p>
          <textarea class="form-textarea" placeholder="Ketik pesan Anda..."></textarea>
        </div>
        <div class="form-group">
          <label><input type="checkbox" class="form-checkbox">Saya setuju dengan Syarat</label>
        </div>
        <button type="submit" class="btn-submit">Kirim</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section id="testimoni">
    <h2>Testimoni Pelanggan</h2>
    <p class="sub-title">Pengalaman luar biasa dengan Studio Fotografi Sejahtera.</p>

    <div class="testimonial-container" id="slider">
      <div class="testimonial-card">
        <p class="quote">"Hasil foto yang sangat memuaskan dan profesional!"</p>
        <div class="profile">
          <i class='bx  bx-user'  ></i> 
          <div class="profile-info">
            <strong>Rina Sari</strong>
            <span>Konsultan, PT. Maju</span>
          </div>
        </div>
        <a href="#" class="read-more">Baca studi kasus →</a>
      </div>

      <div class="testimonial-card">
        <p class="quote">"Pengalaman yang tak terlupakan, sangat direkomendasikan!"</p>
        <div class="profile">
          <i class='bx  bx-user'  ></i>
          <div class="profile-info">
            <strong>Andi Prasetyo</strong>
            <span>Manager, CV. Kreatif</span>
          </div>
        </div>
        <a href="#" class="read-more">Baca studi kasus →</a>
      </div>

      <div class="testimonial-card">
        <p class="quote">"Foto-foto yang dihasilkan sangat berkualitas!"</p>
        <div class="profile">
          <i class='bx  bx-user'  ></i>
          <div class="profile-info">
            <strong>Siti Aminah</strong>
            <span>Direktur, Studio XYZ</span>
          </div>
        </div>
        <a href="#" class="read-more">Baca studi kasus →</a>
      </div>

      <div class="testimonial-card">
        <p class="quote">"Tim fotografernya sangat ramah dan hasilnya luar biasa!"</p>
        <div class="profile">
          <i class='bx  bx-user'  ></i>
          <div class="profile-info">
            <strong>Budi Santoso</strong>
            <span>CEO, Startup ABC</span>
          </div>
        </div>
        <a href="#" class="read-more">Baca studi kasus →</a>
      </div>
    </div>

    <!-- Dots -->
    <div class="dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <!-- Navigation buttons -->
    <div class="nav-btns">
      <button class="btn" onclick="prevSlide()">&#8592;</button>
      <button class="btn" onclick="nextSlide()">&#8594;</button>
    </div>

    <script>
      const slider = document.getElementById("slider");
      function nextSlide() {
        slider.scrollBy({ left: 320, behavior: "smooth" });
      }
      function prevSlide() {
        slider.scrollBy({ left: -320, behavior: "smooth" });
      }
    </script>
  </section>

  <footer>
      <div class="footer">
        <div class="logo">Logo</div>
        <div class="links">
          <a href="#">Home</a> | 
          <a href="#"><i class='bxl  bx-facebook-circle'  ></i></a> |
          <a href="#"><i class='bxl  bx-instagram'  ></i> </a> | 
          <a href="#"><i class='bxl  bx-twitter-x'  ></i> </a> |
          <a href="#"><i class='bxl  bx-linkedin-square'  ></i> </a> |  
          <a href="#"><i class='bxl  bx-youtube'  ></i>  </a> | 
        </div>
        <div class="social">
          <span>○</span>
          <span>○</span>
          <span>○</span>
          <span>○</span>
        </div>
        <div style="margin-top:8px;">© 2025 Photography-Sejahtera. All rights reserved. | Kebijakan Privasi | Disclaimer | Persetujuan Cookie</div>
      </div>
    </footer>

</body>
</html>
