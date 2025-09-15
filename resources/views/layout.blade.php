<!DOCTYPE html>
<html lang="id">
<head>
<<<<<<< HEAD
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

    .header-card img { max-width: 150px; }

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
    .card-button:hover { background-color: #D7CCFF; }

    .color-box {
        height: 40px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }


</style>
</head>
<body>


@include('layouts.main')

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

        <!-- Alert Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Kustomisasi -->
        <form action="{{ route('tampilan.update') }}" method="POST">
            @csrf

            <!-- Elemen -->
            <div class="card-section">
                <h6 class="mb-3">Pilih Elemen untuk Dikustomisasi</h6>
                <div class="row g-3">
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-menu-button"></i> Navbar</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-type"></i> Title</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-card-text"></i> Cards</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-square"></i> Button</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-square"></i> Hover</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button"><i class="bi bi-sliders"></i> Global</button></div>
                </div>
            </div>

            <!-- Skema Warna & Typography -->
            <div class="row">
                <!-- Skema Warna -->
                <div class="col-md-6">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Skema warna</h6>
                        <label class="mt-3 fw-medium">Primary</label>
                        <div class="d-flex gap-3 align-items-center">
                            <input type="text" name="warna" class="form-control" 
                                   value="{{ old('warna', $tampilan->warna ?? '#000000') }}" style="max-width:120px;">
                            <div class="color-box" style="background-color:{{ old('warna', $tampilan->warna ?? '#000000') }};width:40px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Typography -->
                <div class="col-md-6">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Typography</h6>
                        <label class="mt-3 fw-medium">Primary font</label>
                        <select name="font" class="form-select" style="max-width:200px;">
                            <option value="Poppins" {{ old('font', $tampilan->font ?? '') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                            <option value="Roboto" {{ old('font', $tampilan->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                            <option value="Open Sans" {{ old('font', $tampilan->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                        </select>

                        <label class="mt-3 fw-medium">Ukuran font</label>
                        <select name="font_size" class="form-select" style="max-width:200px;">
                            <option value="s" {{ old('font_size', $tampilan->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                            <option value="m" {{ old('font_size', $tampilan->font_size ?? '') == 'm' ? 'selected' : '' }}>Sedang</option>
                            <option value="l" {{ old('font_size', $tampilan->font_size ?? '') == 'l' ? 'selected' : '' }}>Besar</option>
                        </select>

                        <div class="mt-3 text-center">
                            <img src="https://via.placeholder.com/250x150?text=Preview" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan -->
            <div class="text-end mt-3">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>

>>>>>>> 435a7c3 (landing web promosi)
=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }

    h2 {
      color: #5955B3;
      font-weight: 700;
    }

    .card {
      border: none;
      border-radius: 15px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(89, 85, 179, 0.3);
    }

    .btn-primary {
      background-color: #5955B3;
      border: none;
    }

    .btn-primary:hover {
      background-color: #4743a6;
    }

    .demo-preview {
      margin-top: 40px;
    }

    iframe {
      border-radius: 15px;
      border: 3px solid #5955B3;
      width: 100%;
      height: 450px;
    }

    .selected {
      border: 2px solid #5955B3 !important;
      box-shadow: 0 8px 20px rgba(89, 85, 179, 0.5) !important;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="text-center mb-4">Pilih Layout Website</h2>

  <div class="row justify-content-center g-4">
    <!-- Layout 1 -->
    <div class="col-md-4">
      <div class="card shadow p-4 text-center layout-card" onclick="showPreview('layout1')">
        <h5>Layout 1</h5>
        <img src="/images/layout1-preview.jpg" alt="Preview Layout 1" class="img-fluid rounded my-3">
        <form action="{{ route('tampilan.update') }}" method="POST">
          @csrf
          <input type="hidden" name="layout" value="layout1">
          <button type="submit" class="btn btn-primary w-100">Gunakan Layout 1</button>
        </form>
      </div>
    </div>

    <!-- Layout 2 -->
    <div class="col-md-4">
      <div class="card shadow p-4 text-center layout-card" onclick="showPreview('layout2')">
        <h5>Layout 2</h5>
        <img src="/images/layout2-preview.jpg" alt="Preview Layout 2" class="img-fluid rounded my-3">
        <form action="{{ route('tampilan.update') }}" method="POST">
          @csrf
          <input type="hidden" name="layout" value="layout2">
          <button type="submit" class="btn btn-primary w-100">Gunakan Layout 2</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Live Demo -->
  <div class="demo-preview text-center">
    <h4 class="mb-3 text-secondary">Live Preview</h4>
    <iframe id="previewFrame" src="" class="shadow"></iframe>
  </div>
</div>

<script>
  function showPreview(layout) {
    // Hapus class selected dari semua card
    document.querySelectorAll('.layout-card').forEach(card => {
      card.classList.remove('selected');
    });

    // Tambahkan class selected ke card yg dipilih
    event.currentTarget.classList.add('selected');

    // Tampilkan iframe preview sesuai layout
    if (layout === 'layout1') {
      document.getElementById('previewFrame').src = "/layout1/index.blade.php";
    } else if (layout === 'layout2') {
      document.getElementById('previewFrame').src = "/layout2/index.blade.php";
    }
  }
</script>

>>>>>>> 61f30f0a60449b6d2279037786da386d5c582724
</body>
</html>