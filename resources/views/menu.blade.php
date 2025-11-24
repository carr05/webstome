<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
   /* === GENERAL === */
body { 
  font-family: 'Poppins', sans-serif; 
  background-color: #5955B3; 
  margin: 0; 
}

.main-container { 
  margin-left: 240px; 
  padding: 20px;
  height: 100vh; 
}

.main-content { 
  background-color: #f8f9ff; 
  border-radius: 20px;
  padding: 30px;
  height: 100%;
  overflow-y: auto;
  box-shadow: 0 8px 40px rgba(0,0,0,0.1);
}

.card-section { 
  background-color: #fff;
  border-radius: 15px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
}

/* === HEADER === */
.header {
  text-align: center;
  margin-bottom: 40px;
  padding-bottom: 20px;
  border-bottom: 3px solid #5955B3;
}

.header h1 {
  color: #5955B3;
  font-size: 2.5rem;
  font-weight: 700;
}

.header p {
  color: #666;
  font-size: 1.1rem;
}

/* === ACTION BAR === */
.action-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  gap: 20px;
  flex-wrap: wrap;
}

.add-menu-btn {
  background: linear-gradient(135deg, #5955B3, #7B68EE);
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 50px;
  font-weight: 600;
  transition: .3s;
  box-shadow: 0 8px 20px rgba(89,85,179,0.3);
}

.add-menu-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(89,85,179,0.4);
}

/* === SEARCH === */
.search-box {
  position: relative;
  min-width: 300px;
}

.search-box input {
  width: 100%;
  padding: 12px 50px 12px 20px;
  border-radius: 50px;
  border: 2px solid #e0e0e0;
  transition: .3s;
}

.search-box input:focus {
  border-color: #5955B3;
  box-shadow: 0 0 0 3px rgba(89,85,179,0.15);
}

.search-box i {
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  color: #999;
}

/* === MENU LIST === */
.menu-list {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.menu-item {
  display: flex;
  align-items: center;
  padding: 20px 25px;
  border-bottom: 1px solid #f0f0f0;
  transition: .3s;
}

.menu-item:hover {
  background: #f8f9ff;
  transform: translateX(5px);
}

.menu-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  background: linear-gradient(135deg, #5955B3, #7B68EE);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  margin-right: 20px;
}

.menu-name { font-weight: 600; color: #333; }
.menu-path { font-size: .9rem; color: #666; }

/* === TOGGLE === */
.toggle-switch {
  position: relative;
  width: 60px;
  height: 30px;
}

.toggle-switch input { opacity: 0; width: 0; height: 0; }

.slider {
  position: absolute;
  cursor: pointer;
  inset: 0;
  background: #ccc;
  transition: .4s;
  border-radius: 30px;
}

.slider:before {
  content: "";
  position: absolute;
  height: 22px;
  width: 22px;
  left: 4px;
  bottom: 4px;
  background: white;
  border-radius: 50%;
  transition: .4s;
}

input:checked + .slider { background: #5955B3; }
input:checked + .slider:before { transform: translateX(30px); }

/* === BUTTON ICON === */
.action-btn {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  transition: .3s;
}

.edit-btn {
  background: linear-gradient(135deg, #4CAF50, #45a049);
  color: white;
}

.edit-btn:hover {
  transform: scale(1.1);
}

.delete-btn {
  background: linear-gradient(135deg, #f44336, #d32f2f);
  color: white;
}

.delete-btn:hover {
  transform: scale(1.1);
}

/* === BOOTSTRAP MODAL FIX === */
.modal-backdrop {
  z-index: 1040 !important;
}

.modal {
  z-index: 1050 !important;
  pointer-events: auto !important;
}

.modal-dialog {
  z-index: 1060 !important;
}

.modal-header {
  background: linear-gradient(135deg, #5955B3, #7B68EE);
}

.btn-primary {
  background: linear-gradient(135deg, #5955B3, #7B68EE);
  border: none;
}

.btn-primary:hover {
  filter: brightness(1.1);
}

/* === MOBILE RESPONSIVE === */
@media (max-width: 768px) {
  .action-bar { flex-direction: column; }
  .search-box { min-width: 100%; }
  .menu-item { flex-direction: column; align-items: flex-start; }
  .menu-actions { width: 100%; justify-content: flex-end; }
}

    </style>
</head>
<body>
  @extends('layouts.main')
    <div class="main-container">
        <div class="main-content">
            <div class="card-section">
                <div class="header">
                    <h1><i class="fas fa-bars"></i> Menu Manager</h1>
                    <p>Kelola menu sidebar dengan mudah dan efisien</p>
                </div>

                <div class="action-bar">
                    <button class="add-menu-btn" onclick="openAddModal()">
                        <i class="fas fa-plus"></i> Tambah Menu
                    </button>
                    <div class="search-box">
                        <!-- PERBAIKAN: id searchInput -->
                        <input type="text" id="searchInput" placeholder="Cari menu..." oninput="searchMenu()">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="menu-list" id="menuList">
                    <!-- Menu items by JS -->
                </div>

                <!-- Add/Edit Modal -->
                <div class="modal fade" id="menuModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 id="modalTitle">Tambah Menu</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form id="menuForm">
            <input type="hidden" id="menuId">

            <label>Nama Menu</label>
            <input type="text" id="menuName" class="form-control" required>

            <label class="mt-2">Icon (Font Awesome)</label>
            <input type="text" id="menuIcon" class="form-control" required placeholder="fas fa-home">

            <label class="mt-2">Path</label>
            <input type="text" id="menuPath" class="form-control" required>

            <label class="mt-2">Urutan</label>
            <input type="number" id="menuOrder" class="form-control" required>

            <label class="mt-2">Status</label>
            <select id="menuStatus" class="form-control">
                <option value="active">Aktif</option>
                <option value="inactive">Tidak aktif</option>
            </select>
        </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary" onclick="saveMenu()">Simpan</button>
      </div>

    </div>
  </div>
</div>

<!-- PERBAIKAN: Tambahkan Bootstrap JS agar modal berfungsi -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
let modal = new bootstrap.Modal(document.getElementById('menuModal'));
let currentEditId = null;


// OPEN ADD MODAL
function openAddModal() {
    currentEditId = null;
    document.getElementById('modalTitle').innerHTML = "Tambah Menu";
    document.getElementById('menuForm').reset();
    modal.show();
}

// OPEN EDIT MODAL
function openEditModal(item) {
    currentEditId = item.id;
    document.getElementById('modalTitle').innerHTML = "Edit Menu";

    document.getElementById('menuName').value = item.name;
    document.getElementById('menuIcon').value = item.icon;
    document.getElementById('menuPath').value = item.path;
    document.getElementById('menuOrder').value = item.order;
    document.getElementById('menuStatus').value = item.status;

    modal.show();
}

// SAVE MENU
function saveMenu() {
    const id = currentEditId;
    const url = id ? `/sidebar/update/${id}` : `/sidebar/store`;
    const method = id ? "PUT" : "POST";

    const data = {
        name: menuName.value,
        icon: menuIcon.value,
        path: menuPath.value,
        order: menuOrder.value,
        status: menuStatus.value
    };

    fetch(url, {
        method: method,
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify(data)
    })
    .then(r => r.json())
    .then(r => {
        alert(r.message);
        location.reload();
    });
}

// DELETE MENU
function deleteMenu(id) {
    if (!confirm("Hapus menu ini?")) return;

    fetch(`/sidebar/delete/${id}`, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        }
    })
    .then(r => r.json())
    .then(r => {
        alert(r.message);
        location.reload();
    });
}

// TOGGLE MENU
function toggleMenuStatus(id) {
    fetch(`/sidebar/toggle/${id}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        }
    });
}

function loadMenu() {
    fetch('/sidebar/data')
    .then(r => r.json())
    .then(data => {
        let html = "";
        data.forEach(item => {
            html += `
            <div class="menu-item" data-name="${item.name.toLowerCase()}">
                <div class="menu-icon">
                    <i class="${item.icon}"></i>
                </div>
                <div class="flex-grow-1">
                    <div class="menu-name">${item.name}</div>
                    <div class="menu-path">${item.path}</div>
                </div>

                <label class="toggle-switch mx-3">
                    <input type="checkbox" ${item.status === 'active' ? 'checked' : ''} 
                           onchange="toggleMenuStatus(${item.id})">
                    <span class="slider"></span>
                </label>

                <button class="action-btn edit-btn" onclick='openEditModal(${JSON.stringify(item)})'>
                    <i class="bi bi-pencil"></i>
                </button>

                <button class="action-btn delete-btn" onclick='deleteMenu(${item.id})'>
                    <i class="bi bi-trash"></i>
                </button>
            </div>
            `;
        });

        document.getElementById("menuList").innerHTML = html;
    });
}

loadMenu(); // panggil saat halaman dibuka


// SEARCH MENU
function searchMenu() {
    const val = document.getElementById('searchInput').value.toLowerCase();
    const items = document.querySelectorAll('.menu-item');

    items.forEach(i => {
        let name = i.dataset.name;
        i.style.display = name.includes(val) ? "" : "none";
    });
}
</script>
</body>
</html>
