<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Berita</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      display: flex;
      background-color: #6c63ff;
    }

    /* Sidebar */
   .sidebar {
            background-color: #5A45D3;
            color: white;
            width: 230px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 5px 10px;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

    /* Main content */
    .main {
      margin-left: 220px;
      background: white;
      flex: 1;
      padding: 20px;
      min-height: 100vh;
    }

    /* Card statistik */
    .stats {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }
    .stat-card {
      flex: 1;
      background: #f6f6ff;
      padding: 20px;
      border-radius: 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-weight: 600;
      color: #4B3FAE;
    }
    .stat-card span {
      font-size: 28px;
      font-weight: bold;
      margin-top: 10px;
    }

    /* Tombol upload */
    .upload-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #4B3FAE;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      margin-bottom: 20px;
    }

    /* Tabel */
    table {
      width: 100%;
      border-collapse: collapse;
    }
    thead {
      background-color: #4B3FAE;
      color: white;
    }
    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    /* Pagination */
    .pagination {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }
    .pagination button {
      background: #f6f6ff;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
    .pagination button.active {
      background: #4B3FAE;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div>
      <h5 class="text-center mb-4">🎓 Webstome</h5>
      <a href="{{ url('/home') }}" class="active"><i class="bi bi-grid me-2"></i> Dashboard</a>
      
<a href="{{ url('/layout') }}">
    <i class="bi bi-people me-2"></i>Layout
</a>
      <a href="#"><i class="bi bi-book me-2"></i> Data Siswa</a>
      <a href="#"><i class="bi bi-calendar me-2"></i> Agenda</a>
      <a href="#"><i class="bi bi-images me-2"></i> Galeri</a>
      <a href="{{ url('/berita') }}">
        <i class="bi bi-newspaper me-2"></i> Berita
      </a>
      <a href="#"><i class="bi bi-trophy me-2"></i> Prestasi</a>
    </div>
    <div class="sidebar-bottom">
      <a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a>
      <a href="#"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
    </div>
  </div>


  <!-- Main -->
  <div class="main">
    <h2>Berita</h2>

    <!-- Statistik -->
    <div class="stats">
      <div class="stat-card">📤 Berita di Unggah <span>24</span></div>
      <div class="stat-card">🔄 Berita di Update <span>24</span></div>
      <div class="stat-card">🗑️ Berita di Hapus <span>24</span></div>
    </div>

    <!-- Tombol Upload -->
    <a href="#" class="upload-btn">＋ Upload</a>

    <!-- Tabel -->
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>GAMBAR</th>
          <th>JUDUL</th>
          <th>KONTEN</th>
          <th>TANGGAL</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><img src="https://via.placeholder.com/50" alt=""></td>
          <td>Judul Berita</td>
          <td>Isi konten...</td>
          <td>10/08/2025</td>
          <td>✏️ 🗑️</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="pagination">
      <button class="active">1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>...</button>
    </div>
  </div>

</body>
</html>
