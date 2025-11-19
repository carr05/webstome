<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: #f0f2f5;">
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="text-center mb-4">Sidebar Manager</h2>

                <div class="d-flex justify-content-between mb-3">
                    <button class="btn btn-primary" onclick="openCreateModal()">Tambah Sidebar</button>
                    <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari menu..." onkeyup="searchMenu()">
                </div>

                <div id="menuList"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modalTitle" class="modal-title">Tambah Sidebar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="menuForm">
                        <input type="hidden" id="menuId">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" id="menuName" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Icon</label>
                            <input type="text" id="menuIcon" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Path</label>
                            <input type="text" id="menuPath" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Order</label>
                            <input type="number" id="menuOrder" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select id="menuStatus" class="form-select">
                                <option value="active">Aktif</option>
                                <option value="inactive">Tidak Aktif</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-success w-100" onclick="saveMenu()">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
let menus = [];
let filteredMenus = [];
let currentEditId = null;

async function loadMenus() {
    const res = await fetch('/api/menus');
    menus = await res.json();
    filteredMenus = [...menus];
    renderMenus();
}

function renderMenus() {
    let html = `
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Nama</th>
                    <th>Icon</th>
                    <th>Path</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
    `;

    filteredMenus.forEach(menu => {
        html += `
            <tr>
                <td>${menu.order}</td>
                <td>${menu.name}</td>
                <td>${menu.icon}</td>
                <td>${menu.path}</td>
                <td>
                    <button class="btn btn-sm ${menu.status === 'active' ? 'btn-success' : 'btn-secondary'}"
                            onclick="toggleStatus(${menu.id})">
                        ${menu.status}
                    </button>
                </td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="openEditModal(${menu.id})">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteMenu(${menu.id})">Hapus</button>
                </td>
            </tr>
        `;
    });

    html += `</tbody></table>`;
    document.getElementById('menuList').innerHTML = html;
}

function searchMenu() {
    const keyword = document.getElementById('searchInput').value.toLowerCase();
    filteredMenus = menus.filter(m => 
        m.name.toLowerCase().includes(keyword) || 
        m.path.toLowerCase().includes(keyword)
    );
    renderMenus();
}

function openCreateModal() {
    currentEditId = null;
    document.getElementById('modalTitle').innerText = "Tambah Sidebar";

    document.getElementById('menuForm').reset();

    new bootstrap.Modal(document.getElementById('menuModal')).show();
}

function openEditModal(id) {
    const menu = menus.find(m => m.id === id);

    currentEditId = id;
    document.getElementById('modalTitle').innerText = "Edit Sidebar";

    document.getElementById('menuId').value = menu.id;
    document.getElementById('menuName').value = menu.name;
    document.getElementById('menuIcon').value = menu.icon;
    document.getElementById('menuPath').value = menu.path;
    document.getElementById('menuOrder').value = menu.order;
    document.getElementById('menuStatus').value = menu.status;

    new bootstrap.Modal(document.getElementById('menuModal')).show();
}

async function saveMenu() {
    const data = {
        name: menuName.value,
        icon: menuIcon.value,
        path: menuPath.value,
        order: parseInt(menuOrder.value),
        status: menuStatus.value,
    };

    let url = "/api/menus";
    let method = "POST";

    if (currentEditId) {
        url = "/api/menus/" + currentEditId;
        method = "PUT";
    }

    await fetch(url, {
        method: method,
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });

    bootstrap.Modal.getInstance(document.getElementById('menuModal')).hide();
    loadMenus();
}

async function deleteMenu(id) {
    if (!confirm("Yakin hapus?")) return;

    await fetch("/api/menus/" + id, {
        method: "DELETE"
    });

    loadMenus();
}

async function toggleStatus(id) {
    const menu = menus.find(m => m.id === id);
    const newStatus = menu.status === "active" ? "inactive" : "active";

    await fetch("/api/menus/" + id, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ status: newStatus })
    });

    loadMenus();
}

loadMenus();
</script>

</body>
</html>
