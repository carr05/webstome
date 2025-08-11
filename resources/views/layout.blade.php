<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EDEAFF;
            margin: 0;
        }
        .wrapper {
            display: flex;
            min-height: 100vh;
        }
        /* Sidebar */
        .sidebar {
            background-color: #5A45D3;
            color: white;
            width: 230px;
            padding: 20px 0;
            flex-shrink: 0;
        }
        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            margin: 5px 10px;
            border-radius: 8px;
            font-weight: 500;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        /* Main content */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .header-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .card-section {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
        }
        .card-button {
            background-color: #EDEAFF;
            border: none;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
        }
        .card-button:hover {
            background-color: #D7CCFF;
        }
        .color-box {
            height: 40px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->

   
  <div class="sidebar" id="sidebar">
    <div>
      <h5 class="text-center mb-4">🎓 Webstome</h5>
      <a href="{{ url('/home') }}" class="active">
        <i class="bi bi-grid me-2"></i> Dashboard
    </a>
      
<a href="{{ url('/layout') }}">
    <i class="bi bi-people me-2"></i>Layout
</a>
      <a href="#"><i class="bi bi-book me-2"></i> Data Siswa</a>
      <a href="#"><i class="bi bi-calendar me-2"></i> Agenda</a>
      <a href="#"><i class="bi bi-images me-2"></i> Galeri</a>
      <a href="{{ url('/berita') }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
      <a href="#"><i class="bi bi-trophy me-2"></i> Prestasi</a>
    </div>
    <div class="sidebar-bottom">
      <a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a>
      <a href="{{ url('/logout') }}"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
    </div>
  </div>
    <!-- Main content -->

    <div class="main-content">
        <!-- Header -->
        <div class="header-card">
            <div>
                <h5>Tampilan</h5>
                <p>Sesuaikan template dan nuansa panel admin Anda dengan warna, teks, tata letak, ikon, dll.</p>
            </div>
            <img src="https://via.placeholder.com/150" alt="Gambar" class="img-fluid rounded">
        </div>

        <!-- Elemen untuk dikustomisasi -->
        <div class="card-section">
            <h6 class="mb-3">Pilih Elemen untuk Dikustomisasi</h6>
            <div class="row g-3">
                <div class="col-6 col-md-4"><button class="card-button">Navbar</button></div>
                <div class="col-6 col-md-4"><button class="card-button">Title</button></div>
                <div class="col-6 col-md-4"><button class="card-button">Cards</button></div>
                <div class="col-6 col-md-4"><button class="card-button">Button</button></div>
                <div class="col-6 col-md-4"><button class="card-button">Forms</button></div>
                <div class="col-6 col-md-4"><button class="card-button">Global</button></div>
            </div>
        </div>

        <!-- Skema warna & Typography -->
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card-section">
                    <h6>Skema warna</h6>
                    <p class="mt-3">Primary</p>
                    <div class="color-box" style="background-color:#5A45D3;"></div>
                    <p class="mt-2">Secondary</p>
                    <div class="color-box" style="background-color:#EDEAFF;"></div>
                    <p class="mt-2">Text</p>
                    <div class="color-box" style="background-color:#000;"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-section">
                    <h6>Typography</h6>
                    <select class="form-select mb-3">
                        <option selected>Poppins</option>
                    </select>
                    <select class="form-select mb-3">
                        <option selected>24 pt</option>
                    </select>
                    <input type="range" class="form-range">
                </div>
            </div>
        </div>

        <!-- Live Preview -->
        <div class="card-section mt-3">
            <h6>Live Preview</h6>
            <div class="p-3" style="background-color:#EDEAFF; border-radius:10px;">
                <div style="height:100px; background-color:white; border-radius:8px;" class="mb-3"></div>
                <div class="row g-3">
                    <div class="col-6"><div style="height:80px; background-color:white; border-radius:8px;"></div></div>
                    <div class="col-6"><div style="height:80px; background-color:white; border-radius:8px;"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
