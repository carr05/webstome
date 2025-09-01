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
<<<<<<< HEAD

    }

    /* Main Container */
=======
    }
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
    .main-container {
      margin-left: 240px;
      padding: 20px;
      height: 100vh;
    }
<<<<<<< HEAD

    /* White Scrollable Content */
=======
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
    .main-content {
      background-color: #f8f9ff;
      border-radius: 20px;
      padding: 30px;
      height: 100%;
      overflow-y: auto;
      box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    }
<<<<<<< HEAD
    
=======
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
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
<<<<<<< HEAD
    .header-card img {
        max-width: 200px;
    }
=======
    .header-card img { max-width: 150px; }
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
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
<<<<<<< HEAD
    .card-button:hover {
        background-color: #D7CCFF;
    }
=======
    .card-button:hover { background-color: #D7CCFF; }
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
    .color-box {
        height: 40px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
<<<<<<< HEAD
    .live-preview {
        background-color: #EDEAFF;
        border-radius: 10px;
        padding: 15px;
    }
    .live-box {
        background-color: white;
        border-radius: 8px;
    }
    
=======
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
</style>
</head>
<body>

<<<<<<< HEAD
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
        <img src="{{ asset('assets/tampilan(atas).png') }}" alt="Ilustrasi">
    </div>

     <div class="hero" style="background-image:url('/images/hero-default.jpg')">
  <div class="hero-overlay">
    <div class="card-section mb-4">
      <h5 class="fw-bold" style="color:#5955B3;">Edit Logo</h5>
      <form action="/update-logo" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 d-flex align-items-center justify-content-between">
          <!-- Input file -->
          <div style="flex:1; max-width:300px;">
            <label class="form-label">Ganti Logo Sekolah</label>
            <input type="file" name="logo" class="form-control" id="logoInput" accept="image/*">
          </div>

          <!-- Preview logo di kanan -->
          <div style="margin-left:20px;">
            <img id="logoPreview" src="/images/default-logo.png" alt="Preview Logo" 
                 style="width:350px; height:75px; object-fit:contain; border:1px solid #ddd; border-radius:8px; padding:4px; background:#fff;">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('logoInput').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
      document.getElementById('logoPreview').src = URL.createObjectURL(file);
    }
  });
</script>



    <!-- Elemen untuk dikustomisasi -->
    <div class="card-section">
        <h6 class="mb-3">Pilih Elemen untuk Dikustomisasi</h6>
        <div class="row g-3">
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-menu-button"></i> Navbar</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-type"></i> Title</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-card-text"></i> Cards</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-square"></i> Button</button></div>
            <div class="col-6 col-md-4"><button class="card-button"><i class="bi bi-square"></i>Hover</button></div>
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
                <div class="mt-2 text-center">
                    <img src="{{ asset('assets/tampilan(bawah).png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    
   
</div>
</div>
=======
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

>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
</body>
</html>
