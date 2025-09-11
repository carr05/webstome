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
    .main-container { margin-left: 240px; padding: 20px; height: 100vh; }
    .main-content {
      background-color: #f8f9ff; border-radius: 20px; padding: 30px; height: 100%;
      overflow-y: auto; box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    }
    .card-section, .header-card {
        background-color: white; border-radius: 15px; padding: 20px;
        margin-bottom: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    .header-card { display: flex; justify-content: space-between; align-items: center; }
    .header-card img { max-width: 150px; }
    .card-button {
        background-color: #EDEAFF; border: none; padding: 15px;
        border-radius: 15px; font-weight: 500; width: 100%; text-align: center;
        transition: 0.3s; cursor: pointer;
    }
    .card-button:hover { background-color: #D7CCFF; }
    .card-button.active {
        background-color: #5A45D3; color: white; font-weight: 600;
        box-shadow: 0 4px 12px rgba(90, 69, 211, 0.3);
    }
    .color-box { height: 40px; border-radius: 8px; border: 1px solid #ddd; }
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
        <form action="{{ route('tampilan.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Elemen -->
            <div class="card-section">
                <h6 class="mb-3">Pilih Elemen untuk Dikustomisasi</h6>
                <div class="row g-3">
                    <div class="col-6 col-md-4"><button type="button" class="card-button" data-element="navbar"><i class="bi bi-menu-button"></i> Navbar</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button" data-element="title"><i class="bi bi-type"></i> Hero</button></div>
                    <div class="col-6 col-md-4"><button type="button" class="card-button" data-element="navbar"><i class="bi bi-menu-button"></i> Footer</button></div>
                </div>
                <input type="hidden" name="selected_element" id="selectedElement">
            </div>

            <!-- Navbar Settings -->
            <div class="row" id="navbarSettings" style="display:none;">
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
                    </div>
                </div>

                <!-- Logo -->
                <div class="col-md-12">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Logo</h6>
                        <input type="file" name="logo" class="form-control mt-2" accept="image/*">
                        @if(!empty($tampilan->logo))
                            <div class="mt-2">
                                <img src="{{ asset('assets2/img/logosmkn4.png') }}" alt="Logo" style="max-height:80px;">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Hero Settings -->
            <div class="row" id="heroSettings" style="display:none;">
                <!-- Gambar Hero -->
                <div class="col-md-6">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Gambar Hero</h6>
                        <input type="file" name="hero_image" class="form-control mt-2" accept="image/*">
                        @if(!empty($hero->image))
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$hero->image) }}" alt="Hero Image" class="img-fluid rounded" style="max-height:200px;">
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Font Hero -->
                <div class="col-md-6">
                    <div class="card-section">
                        <h6 class="fw-bold" style="color:#5A45D3;">Pengaturan Font Hero</h6>

                        <label class="mt-3 fw-medium">Warna Font</label>
                        <input type="color" name="hero_font_color" class="form-control form-control-color"
                               value="{{ $hero->font_color ?? '#000000' }}" style="max-width:80px;">

                        <label class="mt-3 fw-medium">Jenis Font</label>
                        <select name="hero_font" class="form-select" style="max-width:200px;">
                            <option value="Poppins" {{ ($hero->font ?? '') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                            <option value="Roboto" {{ ($hero->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                            <option value="Open Sans" {{ ($hero->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                        </select>

                        <label class="mt-3 fw-medium">Ukuran Font</label>
                        <select name="hero_font_size" class="form-select" style="max-width:200px;">
                            <option value="s" {{ ($hero->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                            <option value="m" {{ ($hero->font_size ?? '') == 'm' ? 'selected' : '' }}>Sedang</option>
                            <option value="l" {{ ($hero->font_size ?? '') == 'l' ? 'selected' : '' }}>Besar</option>
                        </select>
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

<script>
    const buttons = document.querySelectorAll('.card-button');
    const hiddenInput = document.getElementById('selectedElement');
    const navbarSettings = document.getElementById('navbarSettings');
    const heroSettings = document.getElementById('heroSettings');

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            hiddenInput.value = this.dataset.element;

            if(this.dataset.element === "navbar") {
                navbarSettings.style.display = "flex";
                heroSettings.style.display = "none";
            } else if(this.dataset.element === "title") {
                heroSettings.style.display = "flex";
                navbarSettings.style.display = "none";
            } else {
                navbarSettings.style.display = "none";
                heroSettings.style.display = "none";
            }
        });
    });
</script>

</body>
</html>
