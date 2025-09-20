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