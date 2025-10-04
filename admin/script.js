let packages = [];
let editingId = null;

// Database name
const DB_NAME = 'admin_photosejahtera';



function loadPackages() {
    // In real implementation, this would fetch from MySQL database
    const stored = localStorage.getItem(DB_NAME);
    if (stored) {
        packages = JSON.parse(stored);
    }
    renderPackages();
    updateStats();
}

function saveToDatabase() {
    // In real implementation, this would save to MySQL
    localStorage.setItem(DB_NAME, JSON.stringify(packages));
}

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

function updateStats() {
    document.getElementById('totalPackages').textContent = packages.length;
    document.getElementById('umumPackages').textContent = 
        packages.filter(p => p.type === 'Umum').length;
    document.getElementById('perusahaanPackages').textContent = 
        packages.filter(p => p.type === 'Perusahaan').length;
}

function openAddModal() {
    editingId = null;
    document.getElementById('modalTitle').textContent = 'Tambah Paket Baru';
    document.getElementById('packageForm').reset();
    document.getElementById('packageId').value = '';
    document.getElementById('packageModal').classList.add('active');
}

function editPackage(id) {
    editingId = id;
    const pkg = packages.find(p => p.id === id);
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

function deletePackage(id) {
    if (confirm('Apakah Anda yakin ingin menghapus paket ini?')) {
        packages = packages.filter(p => p.id !== id);
        saveToDatabase();
        renderPackages();
        updateStats();
    }
}

function closeModal() {
    document.getElementById('packageModal').classList.remove('active');
    document.getElementById('packageForm').reset();
    editingId = null;
}

// Initialize event listeners when DOM is ready
function initializeEventListeners() {
    // Form submit handler
    document.getElementById('packageForm').addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = {
            id: editingId || Date.now(),
            name: document.getElementById('packageName').value,
            type: document.getElementById('packageType').value,
            price: document.getElementById('packagePrice').value,
            description: document.getElementById('packageDescription').value,
            image: document.getElementById('packageImage').value,
            createdAt: new Date().toISOString()
        };

        if (editingId) {
            const index = packages.findIndex(p => p.id === editingId);
            packages[index] = { ...packages[index], ...formData };
        } else {
            packages.push(formData);
        }

        saveToDatabase();
        renderPackages();
        updateStats();
        closeModal();
    });

    // Close modal when clicking outside
    document.getElementById('packageModal').addEventListener('click', (e) => {
        if (e.target.id === 'packageModal') {
            closeModal();
        }
    });
}

function logout() {
    if (confirm('Apakah Anda yakin ingin logout?')) {
        alert('Logout berhasil!');
        // In real implementation, redirect to login page
    }
}

// Initialize everything when page loads
window.addEventListener('load', () => {
    loadPackages();
    initializeEventListeners();
});