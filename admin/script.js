document.addEventListener('DOMContentLoaded', () => {
    const galleryImages = document.querySelectorAll('.photo-grid img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeButton = document.querySelector('.close-button');

    // Tampilkan lightbox saat gambar di-klik
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'flex'; // Menggunakan flex untuk centering
            lightboxImg.src = img.src;
        });
    });

    // Fungsi untuk menutup lightbox
    const closeModal = () => {
        lightbox.style.display = 'none';
    };

    // Tutup lightbox saat tombol close di-klik
    closeButton.addEventListener('click', closeModal);

    // Tutup lightbox saat area di luar gambar di-klik
    lightbox.addEventListener('click', (e) => {
        if (e.target !== lightboxImg) {
            closeModal();
        }
    });
});

// Data awal paket foto (array of objects)
let paketFoto = [];

// ambil elemen
const formPaket = document.querySelector(".section-box form");
const namaInput = document.getElementById("namaPaket");
const hargaInput = document.getElementById("harga");
const deskripsiInput = document.getElementById("deskripsi");
const daftarPaketBox = document.querySelectorAll(".section-box")[2]; // box "Daftar Paket Foto"

// render daftar paket
function renderPaket() {
  const listContainer = document.createElement("div");
  listContainer.classList.add("paket-list");

  if (paketFoto.length === 0) {
    daftarPaketBox.innerHTML = "<h3>Daftar Paket Foto</h3><p>Belum ada paket</p>";
    return;
  }

  daftarPaketBox.innerHTML = "<h3>Daftar Paket Foto</h3>";
  paketFoto.forEach((paket, index) => {
    const item = document.createElement("div");
    item.classList.add("paket-item");
    item.innerHTML = `
      <p><strong>${paket.nama}</strong> - Rp${paket.harga}</p>
      <p>${paket.deskripsi}</p>
      <button onclick="editPaket(${index})">Edit</button>
      <button onclick="hapusPaket(${index})">Hapus</button>
    `;
    daftarPaketBox.appendChild(item);
  });
}

// CREATE
formPaket.addEventListener("submit", function (e) {
  e.preventDefault();

  const newPaket = {
    nama: namaInput.value,
    harga: hargaInput.value,
    deskripsi: deskripsiInput.value,
  };

  paketFoto.push(newPaket);
  renderPaket();

  formPaket.reset();
});

// UPDATE
function editPaket(index) {
  const paket = paketFoto[index];
  namaInput.value = paket.nama;
  hargaInput.value = paket.harga;
  deskripsiInput.value = paket.deskripsi;

  // ganti tombol "Simpan" jadi "Update"
  const submitBtn = formPaket.querySelector("button[type='submit']");
  submitBtn.textContent = "Update";

  // ubah event
  formPaket.onsubmit = function (e) {
    e.preventDefault();
    paketFoto[index] = {
      nama: namaInput.value,
      harga: hargaInput.value,
      deskripsi: deskripsiInput.value,
    };
    renderPaket();
    formPaket.reset();
    submitBtn.textContent = "Simpan";
    formPaket.onsubmit = null; // reset ke default
    formPaket.addEventListener("submit", function (e) {
      e.preventDefault();
      const newPaket = {
        nama: namaInput.value,
        harga: hargaInput.value,
        deskripsi: deskripsiInput.value,
      };
      paketFoto.push(newPaket);
      renderPaket();
      formPaket.reset();
    });
  };
}

// DELETE
function hapusPaket(index) {
  paketFoto.splice(index, 1);
  renderPaket();
}

// inisialisasi render awal
renderPaket();