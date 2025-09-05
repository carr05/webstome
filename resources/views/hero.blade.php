<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - GURU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #5955B3; margin: 0; }
    .main-container { margin-left: 240px; padding: 20px; height: 100vh; }
    .main-content { background-color: #f8f9ff; border-radius: 20px; padding: 30px; height: 100%; overflow-y: auto; box-shadow: 0 8px 40px rgba(0,0,0,0.1); }
    .card-section { background-color: white; border-radius: 15px; padding: 20px; margin-bottom: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
    .upload-btn { display: inline-flex; align-items: center; gap: 10px; background: #4B3FAE; color: white; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: 500; margin-bottom: 20px; font-size: 15px; }
    .upload-btn .plus-icon { background: white; color: #4B3FAE; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 16px; }
    .menu-list { list-style: none; padding: 0; margin: 0; }
    .menu-item { display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; border-radius: 15px; background: #fff; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
    .menu-item span { font-weight: 500; color: #4B3FAE; }
    .menu-actions { display: flex; gap: 15px; align-items: center; }
    .menu-actions a { text-decoration: none; font-weight: 500; cursor: pointer; }
    .menu-actions .hapus { color: #b23b3b; }
    .menu-actions .edit { color: #3ba25d; }
    .modal-content { border-radius: 15px; padding: 20px; }
    .modal-title { color: #4B3FAE; font-weight: 600; }
    .form-control, .form-select { border-radius: 8px; border: 1px solid #ccc; font-size: 14px; }
    .btn-tambah { background: #5955B3; color: white; font-weight: 600; border-radius: 5px; width: 100%; padding: 10px; }
    .hidden { display: none !important; }
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
     <h2 class="fw-bold" style="color:#5955B3;">MENU</h2>
     <br>
     <!-- Tombol Tambah Menu -->
     <a href="#" class="upload-btn" data-bs-toggle="modal" data-bs-target="#tambahMenuModal">
        Tambah Menu
        <div class="plus-icon">+</div>
     </a>

     <!-- List Menu -->
     <ul class="menu-list" id="menuList">
        <li class="menu-item">
          <span>Berita</span>
          <div class="menu-actions">
            <div class="form-check form-switch">
              <input class="form-check-input toggle-menu" type="checkbox" checked>
            </div>
            <a href="#" class="hapus">Hapus</a>
            <a href="#" class="edit">Edit</a>
          </div>
        </li>
        <li class="menu-item">
          <span>Profil</span>
          <div class="menu-actions">
            <div class="form-check form-switch">
              <input class="form-check-input toggle-menu" type="checkbox" checked>
            </div>
            <a href="#" class="hapus">Hapus</a>
            <a href="#" class="edit">Edit</a>
          </div>
        </li>
     </ul>
    </div>
  </div>
</div>

<!-- Modal Tambah Menu -->
<div class="modal fade" id="tambahMenuModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah menu baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="menuForm">
          <div class="mb-3">
            <input type="text" id="menuName" class="form-control" placeholder="Masukkan Judul" required>
          </div>
          <div class="mb-3">
            <select id="menuCategory" class="form-select" required>
              <option selected disabled>Pilih Kategori</option>
              <option value="galeri">Galeri</option>
              <option value="artikel">Artikel</option>
              <option value="profil">Profil</option>
            </select>
          </div>
          <div class="mb-3">
            <select id="menuSubCategory" class="form-select" required>
              <option selected disabled>Pilih Sub Kategori</option>
              <option value="utama">Kategori Utama</option>
              <option value="sub1">Sub Kategori 1</option>
              <option value="sub2">Sub Kategori 2</option>
            </select>
          </div>
          <button type="submit" class="btn btn-tambah">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Menu -->
<div class="modal fade" id="editMenuModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="editMenuForm">
          <div class="mb-3">
            <input type="text" id="editMenuName" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-tambah">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const menuList = document.getElementById("menuList");
  const menuForm = document.getElementById("menuForm");
  const menuName = document.getElementById("menuName");
  const editMenuForm = document.getElementById("editMenuForm");
  const editMenuName = document.getElementById("editMenuName");
  let editTarget = null;

  // Tambah menu baru
  menuForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const li = document.createElement("li");
    li.className = "menu-item";
    li.innerHTML = `
      <span>${menuName.value}</span>
      <div class="menu-actions">
        <div class="form-check form-switch">
          <input class="form-check-input toggle-menu" type="checkbox" checked>
        </div>
        <a href="#" class="hapus">Hapus</a>
        <a href="#" class="edit">Edit</a>
      </div>
    `;
    menuList.appendChild(li);
    bootstrap.Modal.getInstance(document.getElementById("tambahMenuModal")).hide();
    menuForm.reset();
  });

  // Delegasi event untuk hapus, edit, dan toggle
  menuList.addEventListener("click", function(e) {
    if (e.target.classList.contains("hapus")) {
      e.preventDefault();
      e.target.closest(".menu-item").remove();
    }
    if (e.target.classList.contains("edit")) {
      e.preventDefault();
      editTarget = e.target.closest(".menu-item").querySelector("span");
      editMenuName.value = editTarget.textContent;
      new bootstrap.Modal(document.getElementById("editMenuModal")).show();
    }
  });

  // Simpan edit
  editMenuForm.addEventListener("submit", function(e) {
    e.preventDefault();
    if (editTarget) {
      editTarget.textContent = editMenuName.value;
      bootstrap.Modal.getInstance(document.getElementById("editMenuModal")).hide();
    }
  });

  <style>
  /* tambahan styling untuk menu yang di-off-kan */
  .menu-item.inactive {
    opacity: 0.5;
  }
  .menu-item.inactive span {
    text-decoration: line-through;
    color: #888;
  }
</style>

<script>
  // Toggle on/off
  menuList.addEventListener("change", function(e) {
    if (e.target.classList.contains("toggle-menu")) {
      const menuItem = e.target.closest(".menu-item");
      if (e.target.checked) {
        menuItem.classList.remove("inactive"); // aktif lagi
      } else {
        menuItem.classList.add("inactive"); // ditandai nonaktif
      }
    }
  });
</script>


</body>
</html>
