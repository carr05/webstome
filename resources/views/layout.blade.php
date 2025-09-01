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
                            <input type="color" name="warna" class="form-control form-control-color" 
       value="{{ $tampilan->warna ?? '#000000' }}" title="Pilih warna utama" style="max-width:80px;">
                            <div class="color-box" style="background-color:{{ $tampilan->warna ?? '#000000' }};width:40px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Typography -->
                <div class="col-md-6">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Typography</h6>
                        <label class="mt-3 fw-medium">Primary font</label>
                        <select name="font" class="form-select" style="max-width:200px;">
                            <option value="Poppins" {{ ($tampilan->font ?? '') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                            <option value="Roboto" {{ ($tampilan->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                            <option value="Open Sans" {{ ($tampilan->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                        </select>

                        <label class="mt-3 fw-medium">Ukuran font</label>
                        <select name="font_size" class="form-select" style="max-width:200px;">
                            <option value="s" {{ ($tampilan->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                            <option value="m" {{ ($tampilan->font_size ?? '') == 'm' ? 'selected' : '' }}>Sedang</option>
                            <option value="l" {{ ($tampilan->font_size ?? '') == 'l' ? 'selected' : '' }}>Besar</option>
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

</body>
</html>
