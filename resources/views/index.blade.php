<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin Sekolah</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background:#5955B3;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 240px;
      background: #5955B3;
      color: #fff;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow-y: auto;
      z-index: 10;
     
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      border-radius: 10px;
      margin: 4px 12px;
      transition: all 0.3s ease;
    }

    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.15);
      transform: translateX(5px);
    }

    .sidebar a.active {
      background-color: rgba(255, 255, 255, 0.25);
      border-left: 4px solid #fff;
    }

    .sidebar-bottom {
      padding: 20px;
      font-size: 0.9rem;
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    /* Main Container */
    .main-container {
      margin-left: 240px;
      padding: 20px;
      height: 100vh;
    }

    /* White Scrollable Content */
    .main-content {
      background-color: #f8f9ff;
      border-radius: 20px;
      padding: 30px;
      height: 100%;
      overflow-y: auto;
      box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media (max-width: 992px) {
      .sidebar {
        width: 200px;
      }
      .main-container {
        margin-left: 200px;
      }
    }

    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
      }
      .sidebar.show {
        transform: translateX(0);
      }
      .main-container {
        margin-left: 0;
      }
    }

  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div>
      <h5 class="text-center mb-4">🎓 Webstome</h5>
      <a href="index.php?page=home" class="active"><i class="bi bi-grid me-2"></i> Dashboard</a>
      <a href="index.php?page=home"><i class="bi bi-people me-2"></i> Data Guru</a>
      <a href="index.php?page=home"><i class="bi bi-book me-2"></i> Data Siswa</a>
      <a href="index.php?page=home"><i class="bi bi-calendar me-2"></i> Agenda</a>
      <a href="index.php?page=home"><i class="bi bi-images me-2"></i> Galeri</a>
      <a href="index.php?page=home"><i class="bi bi-newspaper me-2"></i> Berita</a>
      <a href="index.php?page=home"><i class="bi bi-trophy me-2"></i> Prestasi</a>
    </div>
    <div class="sidebar-bottom">
      <a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a>
      <a href="#"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
    </div>
  </div>

    <!-- Main Content -->
  <div class="main-container">
    <div class="main-content">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Dashboard</h3>
        <div class="d-flex align-items-center">
          <span class="me-3 text-muted">Selamat datang, Admin!</span>
          <div class="badge bg-primary">Online</div>
        </div>
      </div>