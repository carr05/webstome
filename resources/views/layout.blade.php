<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Tampilan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #5955B3;
        margin: 0;

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
    
    .card-section, .header-card {
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    .header-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header-card img {
        max-width: 150px;
    }
    .card-button {
        background-color: #EDEAFF;
        border: none;
        padding: 15px;
        border-radius: 15px;
        font-weight: 500;
        width: 100%;
        text-align: center;
        transition: 0.3s;
    }
    .card-button:hover {
        background-color: #D7CCFF;
    }
    .color-box {
        height: 40px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .live-preview {
        background-color: #EDEAFF;
        border-radius: 10px;
        padding: 15px;
    }
    .live-box {
        background-color: white;
        border-radius: 8px;
    }
    
</style>
</head>
<body>

      @include('layouts.main')
<!-- Main Content -->
    <div class="main-container">
        <div class="main-content">
    <!-- Header -->
    <div class="header-card">
        <div>
            <h5>Tampilan</h5>
            <p>Sesuaikan template dan nuansa panel admin Anda dengan elemen, teks, tata letak, dan tema.</p>
        </div>
        <img src="https://via.placeholder.com/150x100" alt="Ilustrasi">
    </div>

    <!-- Elemen untuk dikustomisasi -->
    <div class="card-section">
        <h6 class="mb-3">Pilih Elemen untuk Dikustomisasi</h6>
        <div class="row g-3">
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-menu-button"></i> Navbar</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-type"></i> Title</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-card-text"></i> Cards</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-square"></i> Button</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-ui-checks"></i> Forms</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-sliders"></i> Global</button></div>
        </div>
    </div>

    <!-- Skema Warna & Typography -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-section">
                <h6 class="fw-bold" style="color:#5A45D3;">Skema warna</h6>
                <label class="mt-3 fw-medium">Primary</label>
                <div class="d-flex gap-3 align-items-center">
                    <input type="text" class="form-control" value="#5955B3" style="max-width:120px;">
                    <div class="color-box" style="background-color:#5955B3;width:40px;"></div>
                </div>
                <label class="mt-3 fw-medium">Secondary</label>
                <div class="d-flex gap-3 align-items-center">
                    <input type="text" class="form-control" value="#EFF1FE" style="max-width:120px;">
                    <div class="color-box" style="background-color:#EFF1FE;width:40px;"></div>
                </div>
                <label class="mt-3 fw-medium">Text</label>
                <div class="d-flex gap-3 align-items-center">
                    <input type="text" class="form-control" value="#000000" style="max-width:120px;">
                    <div class="color-box" style="background-color:#000;width:40px;"></div>
                </div>
                <p class="mt-4 fw-medium">Warna tersedia</p>
                <div class="d-flex flex-wrap gap-2">
                    <div style="width:40px;height:40px;background-color:#5955B3;border-radius:6px;"></div>
                    <div style="width:40px;height:40px;background-color:#6C63FF;border-radius:6px;"></div>
                    <div style="width:40px;height:40px;background-color:#837DFF;border-radius:6px;"></div>
                    <div style="width:40px;height:40px;background-color:#9A94FF;border-radius:6px;"></div>
                    <div style="width:40px;height:40px;background-color:#B2ADFF;border-radius:6px;"></div>
                    <div style="width:40px;height:40px;background-color:#C9C4FF;border-radius:6px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-section">
                <h6 class="fw-bold" style="color:#5A45D3;">Typography</h6>
                <label class="mt-3 fw-medium">Primary font</label>
                <select class="form-select" style="max-width:200px;">
                    <option selected>Poppins</option>
                    <option>Roboto</option>
                    <option>Open Sans</option>
                </select>
                <label class="mt-3 fw-medium">Ukuran font</label>
                <select class="form-select" style="max-width:200px;">
                    <option>16 px</option>
                    <option>18 px</option>
                    <option selected>24 px</option>
                    <option>32 px</option>
                </select>
                <label class="mt-3 fw-medium">Berat font</label>
                <input type="range" class="form-range" min="100" max="900" step="100" value="500">
                <div class="d-flex justify-content-between" style="font-size:14px;">
                    <span>Small</span><span>Medium</span><span>Large</span>
                </div>
                <div class="mt-3 text-center">
                    <img src="https://via.placeholder.com/250x150?text=Ilustrasi" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Live Preview -->
    <div class="card-section">
        <h6>Live preview</h6>
        <div class="live-preview">
            <div class="live-box mb-3" style="height:60px;"></div>
            <div class="row g-3">
                <div class="col-6"><div class="live-box" style="height:100px;"></div></div>
                <div class="col-6">
                    <div class="live-box mb-3" style="height:45px;"></div>
                    <div class="live-box" style="height:45px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
