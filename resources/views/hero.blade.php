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
      background-color: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    /* Hero Section */
    .hero {
      position: relative;
      background: url('/images/hero-default.jpg') center/cover no-repeat;
      height: 300px;
      border-radius: 20px;
      margin-bottom: 25px;
      overflow: hidden;
    }
    .hero-overlay {
      background: rgba(0, 0, 0, 0.4);
      position: absolute;
      inset: 0;
    }
    .hero-content {
      position: relative;
      z-index: 1;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }
    .hero-logo {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
      background: white;
      border-radius: 50%;
      padding: 10px;
    }
    .stats {
      display: flex;
      gap: 20px;
      margin-bottom: 25px;
    }
    .stat-card {
      flex: 1;
      background: #f6f6ff;
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      color: #4B3FAE;
    }
    .stat-card svg {
      width: 30px;
      height: 30px;
      margin-bottom: 10px;
    }
    .stat-card span {
      display: block;
      font-size: 24px;
      font-weight: 700;
      margin-top: 5px;
    }
    .upload-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #4B3FAE;
      color: white;
      padding: 10px 20px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 500;
      margin-bottom: 20px;
      font-size: 15px;
    }
    .upload-btn .plus-icon {
      background: white;
      color: #4B3FAE;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 16px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
    }
    thead {
      background-color: #4B3FAE;
      color: white;
    }
    th, td {
      padding: 12px;
      text-align: center;
    }
    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .pagination {
      display: flex;
      justify-content: center;
      gap: 5px;
      margin-top: 20px;
    }
    .pagination button {
      background: transparent;
      border: none;
      cursor: pointer;
      padding: 6px 10px;
      border-radius: 50%;
      font-weight: 500;
      color: #4B3FAE;
    }
    .pagination button.active {
      background: #4B3FAE;
      color: white;
    }

    .menu-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #4B3FAE;
      color: white;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: 25px;
      border: none;
      margin-bottom: 20px;
      cursor: pointer;
    }
    .menu-btn .plus-icon {
      font-size: 18px;
      font-weight: bold;
    }
    .menu-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .menu-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      border-radius: 15px;
      background: #fff;
      margin-bottom: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .menu-item span {
      font-weight: 500;
      color: #4B3FAE;
    }
    .menu-actions {
      display: flex;
      gap: 15px;
    }
    .menu-actions a {
      text-decoration: none;
      font-weight: 500;
      cursor: pointer;
    }
    .menu-actions .hapus {
      color: #b23b3b;
    }
    .menu-actions .edit {
      color: #3ba25d;
    }
    /* Modal Custom */
    .modal-content {
      border-radius: 15px;
      padding: 20px;
    }
    .modal-header {
      border: none;
      padding-bottom: 0;
    }
    .modal-title {
      color: #4B3FAE;
      font-weight: 600;
    }
    .form-control, .form-select {
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .btn-tambah {
      background: #5955B3;
      color: white;
      font-weight: 600;
      border-radius: 5px;
      width: 100%;
      padding: 10px;
    }
    .menu-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .menu-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      border-radius: 15px;
      background: #fff;
      margin-bottom: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .menu-item span {
      font-weight: 500;
      color: #4B3FAE;
    }
    .menu-actions {
      display: flex;
      gap: 15px;
    }
    .menu-actions a {
      text-decoration: none;
      font-weight: 500;
      cursor: pointer;
    }
    .menu-actions .hapus {
      color: #b23b3b;
    }
    .menu-actions .edit {
      color: #3ba25d;
    }

  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
     <h2 class="fw-bold" style="color:#5955B3;">MENU</h2>
<br>
 <!-- Tombol Upload -->
      <a href="#" class="upload-btn" data-bs-toggle="modal" data-bs-target="#tambahMenuModal">
  Upload
  <div class="plus-icon">+</div>
</a>


 <!-- List Menu Navbar (Dummy Data) -->
      <ul class="menu-list">
  <li class="menu-item">
    <span>Berita</span>
    <div class="menu-actions">
      <!-- Switch untuk hide/show -->
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
  <li class="menu-item">
    <span>Galeri</span>
    <div class="menu-actions">
      <div class="form-check form-switch">
        <input class="form-check-input toggle-menu" type="checkbox" checked>
      </div>
      <a href="#" class="hapus">Hapus</a>
      <a href="#" class="edit">Edit</a>
    </div>
        </li>
        <li class="menu-item">
          <span>Agenda</span>
          <div class="menu-actions">
            <a href="#" class="hapus">Hapus</a>
            <a href="#" class="edit">Edit</a>
          </div>
        </li>
        <li class="menu-item">
          <span>Prestasi</span>
          <div class="menu-actions">
            <a href="#" class="hapus">Hapus</a>
            <a href="#" class="edit">Edit</a>
          </div>
        </li>
        <li class="menu-item">
          <span>Kontak</span>
          <div class="menu-actions">
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
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Judul">
          </div>
          <div class="mb-3">
            <select class="form-select">
              <option selected disabled>Pilih Kategori</option>
              <option value="galeri">Galeri</option>
              <option value="artikel">Artikel</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select">
              <option selected disabled>Pilih Sub Kategori</option>
              <option value="utama">Kategori Utama</option>
              <option value="sub1">Sub Kategori 1</option>
              <option value="sub2">Sub Kategori 2</option>
            </select>
          </div>
          <button type="button" class="btn btn-tambah">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll('.toggle-menu').forEach(toggle => {
    toggle.addEventListener('change', function () {
      const menuItem = this.closest('.menu-item');
      if (this.checked) {
        menuItem.classList.remove('hidden');
      } else {
        menuItem.classList.add('hidden');
      }
    });
  });
</script>

<style>
  /* class untuk sembunyikan menu */
  .hidden {
    display: none !important;
  }
</style>

</body>
</html>