<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sejahtera Photography</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cormorant Garamond', 'Playfair Display', Georgia, serif;
            background: linear-gradient(135deg, #3E2723 0%, #1C1C1C 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 30px 40px;
            border-radius: 0;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(139, 90, 43, 0.2);
            transition: all 0.3s;
        }

        .header:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
        }

        .header h1 {
            color: #3E2723;
            font-size: 32px;
            font-weight: 300;
            text-shadow: none;
            letter-spacing: 3px;
        }

        .header .subtitle {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .btn-logout {
            background: linear-gradient(135deg, #3E2723 0%, #1C1C1C 100%);
            color: white;
            border: 1px solid #5D4037;
            padding: 14px 32px;
            border-radius: 0;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            transition: all 0.3s;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .btn-logout:hover {
            background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.98);
            padding: 30px;
            border-radius: 0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(139, 90, 43, 0.2);
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(139, 90, 43, 0.4);
        }

        .stat-card h3 {
            color: #3E2723;
            font-size: 14px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
        }

        .stat-card .number {
            color: #8B5A2B;
            font-size: 42px;
            font-weight: 300;
            text-shadow: none;
        }

        .main-panel {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 35px;
            border-radius: 0;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(139, 90, 43, 0.2);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .panel-header h2 {
            color: #3E2723;
            font-size: 28px;
            font-weight: 300;
            letter-spacing: 3px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3E2723 0%, #1C1C1C 100%);
            color: white;
            border: 1px solid #5D4037;
            padding: 16px 36px;
            border-radius: 0;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            transition: all 0.3s;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.7);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 40px;
            border-radius: 0;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.6);
            animation: slideIn 0.3s;
            border: 1px solid rgba(139, 90, 43, 0.3);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-content h3 {
            margin-bottom: 25px;
            color: #3E2723;
            font-size: 26px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #3E2723;
            font-weight: 300;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 2px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 14px 18px;
            border: 1px solid #d0d0d0;
            border-radius: 0;
            font-size: 15px;
            transition: all 0.3s;
            font-weight: 300;
            font-family: 'Cormorant Garamond', 'Playfair Display', Georgia, serif;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #8B5A2B;
            box-shadow: 0 0 0 2px rgba(139, 90, 43, 0.1);
            transform: scale(1.01);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-top: 25px;
        }

        .btn-secondary {
            background: #f5f5f5;
            color: #3E2723;
            border: 1px solid #d0d0d0;
            padding: 14px 28px;
            border-radius: 0;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .package-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .package-card {
            background: linear-gradient(135deg, #FFFFFF 0%, #F5F5F5 100%);
            padding: 28px;
            border-radius: 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(139, 90, 43, 0.2);
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(135deg, #3E2723 0%, #1C1C1C 100%);
        }

        .package-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(139, 90, 43, 0.5);
        }

        .package-card h3 {
            color: #3E2723;
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .package-type {
            display: inline-block;
            padding: 6px 16px;
            background: transparent;
            color: #3E2723;
            border-radius: 0;
            font-size: 11px;
            font-weight: 300;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
            border: 1px solid #3E2723;
        }

        .package-card p {
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
            font-weight: 300;
        }

        .package-price {
            font-size: 28px;
            font-weight: 300;
            color: #8B5A2B;
            margin: 15px 0;
            text-shadow: none;
            letter-spacing: 1px;
        }

        .package-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-edit {
            flex: 1;
            background: linear-gradient(135deg, #424242 0%, #1C1C1C 100%);
            color: white;
            border: 1px solid #616161;
            padding: 13px;
            border-radius: 0;
            cursor: pointer;
            font-size: 12px;
            font-weight: 300;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #616161 0%, #424242 100%);
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .btn-delete {
            flex: 1;
            background: linear-gradient(135deg, #3E2723 0%, #1C1C1C 100%);
            color: white;
            border: 1px solid #5D4037;
            padding: 13px;
            border-radius: 0;
            cursor: pointer;
            font-size: 12px;
            font-weight: 300;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }

        .empty-state-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>🎨 Admin Dashboard</h1>
                <p class="subtitle">Sejahtera Photography - Kelola Paket Foto</p>
            </div>
            <button class="btn-logout" onclick="logout()">Logout</button>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Paket</h3>
                <div class="number" id="totalPackages">0</div>
            </div>
            <div class="stat-card">
                <h3>Paket Umum</h3>
                <div class="number" id="umumPackages">0</div>
            </div>
            <div class="stat-card">
                <h3>Paket Perusahaan</h3>
                <div class="number" id="perusahaanPackages">0</div>
            </div>
        </div>

        <div class="main-panel">
            <div class="panel-header">
                <h2>Manajemen Paket</h2>
                <button class="btn-primary" onclick="openAddModal()">+ Tambah Paket</button>
            </div>

            <div class="package-grid" id="packageGrid">
                <div class="empty-state">
                    <div class="empty-state-icon">📦</div>
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit Paket -->
    <div class="modal" id="packageModal">
        <div class="modal-content">
            <h3 id="modalTitle">Tambah Paket Baru</h3>
            <form id="packageForm">
                <input type="hidden" id="packageId">
                
                <div class="form-group">
                    <label>Nama Paket *</label>
                    <input type="text" id="packageName" name="name" required placeholder="Contoh: Paket Wedding Premium">
                </div>

                <div class="form-group">
                    <label>Tipe Paket *</label>
                    <select id="packageType" name="type" required>
                        <option value="">Pilih Tipe</option>
                        <option value="Umum">Umum</option>
                        <option value="Perusahaan">Perusahaan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga (Rp) *</label>
                    <input type="number" id="packagePrice" name="price" required placeholder="1000000">
                </div>

                <div class="form-group">
                    <label>Deskripsi *</label>
                    <textarea id="packageDescription" name="description" required placeholder="Jelaskan detail paket..."></textarea>
                </div>

                <div class="form-group">
                    <label>URL Gambar</label>
                    <input type="url" id="packageImage" name="image" placeholder="https://example.com/image.jpg">
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-secondary" onclick="closeModal()">Batal</button>
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let packages = [];
        let editingId = null;

        // Load packages saat halaman dibuka
        window.addEventListener('load', () => {
            loadPackages();
        });

        // Fungsi untuk load semua packages dari database
        function loadPackages() {
            fetch('get_packages.php')
                .then(response => response.json())
                .then(data => {
                    packages = data;
                    renderPackages();
                    updateStats();
                })
                .catch(error => {
                    console.error('Error loading packages:', error);
                    alert('Gagal memuat data packages!');
                });
        }

        // Render packages ke dalam grid
        function renderPackages() {
            const grid = document.getElementById('packageGrid');
            
            if (packages.length === 0) {
                grid.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-state-icon">📦</div>
                        <p>Belum ada paket. Klik "Tambah Paket" untuk memulai.</p>
                    </div>
                `;
                return;
            }

            grid.innerHTML = packages.map(pkg => `
                <div class="package-card">
                    <span class="package-type">${pkg.type}</span>
                    <h3>${pkg.name}</h3>
                    <p>${pkg.description}</p>
                    <div class="package-price">Rp ${Number(pkg.price).toLocaleString('id-ID')}</div>
                    <div class="package-actions">
                        <button class="btn-edit" onclick="editPackage(${pkg.id})">Edit</button>
                        <button class="btn-delete" onclick="deletePackage(${pkg.id})">Hapus</button>
                    </div>
                </div>
            `).join('');
        }

        // Update statistik
        function updateStats() {
            document.getElementById('totalPackages').textContent = packages.length;
            document.getElementById('umumPackages').textContent = 
                packages.filter(p => p.type === 'Umum').length;
            document.getElementById('perusahaanPackages').textContent = 
                packages.filter(p => p.type === 'Perusahaan').length;
        }

        // Buka modal untuk tambah paket
        function openAddModal() {
            editingId = null;
            document.getElementById('modalTitle').textContent = 'Tambah Paket Baru';
            document.getElementById('packageForm').reset();
            document.getElementById('packageId').value = '';
            document.getElementById('packageModal').classList.add('active');
        }

        // Edit package
        function editPackage(id) {
            editingId = id;
            const pkg = packages.find(p => p.id == id);
            if (!pkg) return;

            document.getElementById('modalTitle').textContent = 'Edit Paket';
            document.getElementById('packageId').value = pkg.id;
            document.getElementById('packageName').value = pkg.name;
            document.getElementById('packageType').value = pkg.type;
            document.getElementById('packagePrice').value = pkg.price;
            document.getElementById('packageDescription').value = pkg.description;
            document.getElementById('packageImage').value = pkg.image || '';
            
            document.getElementById('packageModal').classList.add('active');
        }

        // Hapus package
        function deletePackage(id) {
            if (!confirm('Apakah Anda yakin ingin menghapus paket ini?')) return;

            const formData = new FormData();
            formData.append('id', id);

            fetch('hapus_package.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    loadPackages(); // Reload data
                } else {
                    alert('Gagal menghapus: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menghapus package!');
            });
        }

        // Tutup modal
        function closeModal() {
            document.getElementById('packageModal').classList.remove('active');
            document.getElementById('packageForm').reset();
            editingId = null;
        }

        // Handle form submit
        document.getElementById('packageForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData();
            formData.append('name', document.getElementById('packageName').value);
            formData.append('type', document.getElementById('packageType').value);
            formData.append('price', document.getElementById('packagePrice').value);
            formData.append('description', document.getElementById('packageDescription').value);
            formData.append('image', document.getElementById('packageImage').value);

            let url = 'tambah_package.php';
            
            // Jika edit, gunakan endpoint edit
            if (editingId) {
                formData.append('id', editingId);
                url = 'edit_package.php';
            }

            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    closeModal();
                    loadPackages(); // Reload data
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan package!');
            });
        });

        // Close modal saat klik di luar
        document.getElementById('packageModal').addEventListener('click', (e) => {
            if (e.target.id === 'packageModal') {
                closeModal();
            }
        });

        // Logout
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                alert('Logout berhasil!');
                // Redirect ke halaman login jika ada
                // window.location.href = 'login.php';
            }
        }
    </script>
</body>
</html>