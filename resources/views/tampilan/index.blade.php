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
    :root {
        --primary-color: #5955B3;
        --primary-light: #7B6FE8;
        --primary-dark: #4A428A;
        --accent-color: #EDEAFF;
        --accent-hover: #D7CCFF;
        --active-color: #5A45D3;
        --background-color: #f8f9ff;
        --card-background: #ffffff;
        --text-primary: #2d3748;
        --text-secondary: #718096;
        --border-color: #e2e8f0;
        --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.05);
        --shadow-medium: 0 8px 20px rgba(0, 0, 0, 0.1);
        --shadow-active: 0 8px 25px rgba(90, 69, 211, 0.25);
        --border-radius: 16px;
        --border-radius-sm: 12px;
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        margin: 0;
        min-height: 100vh;
        color: var(--text-primary);
    }

    /* Main Layout */
    .main-container {
        margin-left: 240px;
        padding: 24px;
        min-height: 100vh;
        transition: var(--transition);
    }

    .main-content {
        background: var(--background-color);
        border-radius: 24px;
        padding: 32px;
        min-height: calc(100vh - 48px);
        box-shadow: var(--shadow-medium);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Header Card */
    .header-card {
        background: linear-gradient(135deg, var(--card-background) 0%, rgba(255, 255, 255, 0.95) 100%);
        border-radius: var(--border-radius);
        padding: 28px 32px;
        margin-bottom: 28px;
        box-shadow: var(--shadow-light);
        border: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: var(--transition);
    }

    .header-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .header-card h5 {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 8px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .header-card p {
        color: var(--text-secondary);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
        font-weight: 400;
    }

    .header-card img {
        max-width: 150px;
        border-radius: var(--border-radius-sm);
        box-shadow: var(--shadow-light);
    }

    /* Card Sections */
    .card-section {
        background: var(--card-background);
        border-radius: var(--border-radius);
        padding: 28px;
        margin-bottom: 24px;
        box-shadow: var(--shadow-light);
        border: 1px solid var(--border-color);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .card-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        opacity: 0;
        transition: var(--transition);
    }

    .card-section:hover::before {
        opacity: 1;
    }

    .card-section:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .card-section h6 {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--active-color);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .card-section h6::before {
        content: '';
        width: 4px;
        height: 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border-radius: 2px;
    }

    /* Element Selection Buttons */
    .element-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .card-button {
        background: var(--accent-color);
        border: none;
        padding: 20px 16px;
        border-radius: var(--border-radius-sm);
        font-weight: 500;
        font-size: 0.95rem;
        width: 100%;
        text-align: center;
        transition: var(--transition);
        cursor: pointer;
        border: 2px solid transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        color: var(--text-primary);
        position: relative;
        overflow: hidden;
    }

    .card-button i {
        font-size: 1.5rem;
        color: var(--primary-color);
        transition: var(--transition);
    }

    .card-button:hover {
        background: var(--accent-hover);
        transform: translateY(-3px);
        box-shadow: var(--shadow-light);
        border-color: var(--primary-color);
    }

    .card-button.active {
        background: linear-gradient(135deg, var(--active-color), var(--primary-light));
        color: white;
        font-weight: 600;
        box-shadow: var(--shadow-active);
        transform: translateY(-2px);
        border-color: var(--active-color);
    }

    .card-button.active i {
        color: white;
        transform: scale(1.1);
    }

    /* Form Controls */
    .form-label {
        font-weight: 500;
        color: var(--text-primary);
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .form-control, .form-select {
        border-radius: var(--border-radius-sm);
        border: 2px solid var(--border-color);
        padding: 12px 16px;
        font-size: 0.95rem;
        transition: var(--transition);
        background: var(--card-background);
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
        outline: none;
        transform: translateY(-1px);
    }

    .form-control-color {
        width: 60px !important;
        height: 45px !important;
        border-radius: var(--border-radius-sm) !important;
        border: 2px solid var(--border-color) !important;
        cursor: pointer;
        transition: var(--transition);
    }

    .form-control-color:hover {
        transform: scale(1.05);
        box-shadow: var(--shadow-light);
    }

    /* Settings Sections */
    .settings-section {
        display: none;
        animation: fadeInUp 0.4s ease-out;
    }

    .settings-section.active {
        display: block;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Alert */
    .alert {
        border-radius: var(--border-radius-sm);
        border: none;
        box-shadow: var(--shadow-light);
        font-weight: 500;
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-left: 4px solid #28a745;
    }

    /* Button */
    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border: none;
        padding: 12px 28px;
        border-radius: var(--border-radius-sm);
        font-weight: 600;
        font-size: 0.95rem;
        transition: var(--transition);
        box-shadow: var(--shadow-light);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    /* Image Preview */
    .image-preview {
        border-radius: var(--border-radius-sm);
        box-shadow: var(--shadow-light);
        border: 2px solid var(--border-color);
        transition: var(--transition);
    }

    .image-preview:hover {
        transform: scale(1.02);
        box-shadow: var(--shadow-medium);
    }

    /* Color Input Group */
    .color-input-group {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    /* Menu Input Group */
    .menu-input {
        margin-bottom: 12px;
        position: relative;
    }

    .menu-input::before {
        content: counter(menu-counter);
        counter-increment: menu-counter;
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--primary-color);
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-weight: 600;
        z-index: 2;
    }

    .menu-input input {
        padding-left: 45px;
    }

    .menu-section {
        counter-reset: menu-counter;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-container {
            margin-left: 0;
            padding: 16px;
        }
        
        .main-content {
            padding: 20px;
            border-radius: 16px;
        }
        
        .header-card {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 20px;
        }
        
        .element-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 12px;
        }
        
        .card-button {
            padding: 16px 12px;
        }
        
        .card-section {
            padding: 20px;
        }
    }

    /* Loading State */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }

    .loading-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid var(--accent-color);
        border-top: 4px solid var(--primary-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
</head>
<body>

@include('layouts.main')

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="spinner"></div>
</div>

<div class="main-container">
    <div class="main-content">

        <!-- Header -->
        <div class="header-card">
            <div>
                <h5><i class="bi bi-palette"></i> Tampilan</h5>
                <p>Sesuaikan template dan nuansa panel admin Anda dengan elemen, teks, tata letak, dan tema yang menarik.</p>
            </div>
            <img src="https://via.placeholder.com/150x100/5955B3/ffffff?text=Preview" alt="Ilustrasi" class="image-preview">
        </div>

        <!-- Alert Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Kustomisasi -->
        <form action="{{ route('tampilan.update') }}" method="POST" enctype="multipart/form-data" id="customizationForm">
            @csrf
            
            <!-- Elemen Selection -->
            <div class="card-section">
                <h6><i class="bi bi-grid-3x3-gap"></i> Pilih Elemen untuk Dikustomisasi</h6>
                <div class="element-grid">
                    <button type="button" class="card-button" data-element="navbar">
                        <i class="bi bi-menu-button"></i>
                        <span>Navbar</span>
                    </button>
                    <button type="button" class="card-button" data-element="hero">
                        <i class="bi bi-card-image"></i>
                        <span>Hero Section</span>
                    </button>
                    <button type="button" class="card-button" data-element="footer">
                        <i class="bi bi-layout-text-window"></i>
                        <span>Footer</span>
                    </button>
                </div>
                <input type="hidden" name="selected_element" id="selectedElement">
            </div>

            <!-- Navbar Settings -->
            <div class="settings-section" id="navbarSettings">
                <div class="row g-4">
                    <!-- Identitas -->
                    <div class="col-12">
                        <div class="card-section">
                            <h6><i class="bi bi-building"></i> Identitas Sekolah</h6>
                            <div class="mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <input type="text" name="nama_sekolah" class="form-control" 
                                       value="{{ $tampilan->nama_sekolah ?? '' }}" placeholder="Masukkan nama sekolah">
                            </div>
                        </div>
                    </div>

                    <!-- Skema Warna dan Typography -->
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-palette-fill"></i> Skema Warna</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Warna Primary</label>
                                    <div class="color-input-group">
                                        <input type="color" name="warna" class="form-control-color" value="{{ $tampilan->warna ?? '#5955B3' }}">
                                        <span class="text-muted">{{ $tampilan->warna ?? '#5955B3' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Warna Font</label>
                                    <div class="color-input-group">
                                        <input type="color" name="font_color" class="form-control-color" value="{{ $tampilan->font_color ?? '#2d3748' }}">
                                        <span class="text-muted">{{ $tampilan->font_color ?? '#2d3748' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-section">
                            <h6><i class="bi bi-type"></i> Typography</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Font Family</label>
                                    <select name="font" class="form-select">
                                        <option value="Poppins" {{ ($tampilan->font ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                                        <option value="Roboto" {{ ($tampilan->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                                        <option value="Open Sans" {{ ($tampilan->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                                        <option value="Inter" {{ ($tampilan->font ?? '') == 'Inter' ? 'selected' : '' }}>Inter</option>
                                        <option value="Nunito" {{ ($tampilan->font ?? '') == 'Nunito' ? 'selected' : '' }}>Nunito</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Ukuran Font</label>
                                    <select name="font_size" class="form-select">
                                        <option value="s" {{ ($tampilan->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                                        <option value="m" {{ ($tampilan->font_size ?? 'm') == 'm' ? 'selected' : '' }}>Sedang</option>
                                        <option value="l" {{ ($tampilan->font_size ?? '') == 'l' ? 'selected' : '' }}>Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo dan Menu -->
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-image"></i> Logo</h6>
                            <div class="mb-3">
                                <label class="form-label">Upload Logo</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                                <div class="form-text">Format: JPG, PNG, SVG. Maksimal 2MB.</div>
                            </div>
                            <div class="mt-3">
                                @if(!empty($tampilan->logo))
                                    <img src="{{ asset('storage/' . $tampilan->logo) }}" alt="Logo" class="image-preview" style="max-height:60px;">
                                @else
                                    <img src="https://via.placeholder.com/100x60/5955B3/ffffff?text=LOGO" alt="Current Logo" class="image-preview" style="max-height:60px;">
                                @endif
                            </div>
                        </div>

                        <div class="card-section menu-section">
                            <h6><i class="bi bi-list"></i> Menu Navigasi</h6>
                            <div class="menu-input">
                                <input type="text" name="menu1" class="form-control" value="{{ $tampilan->menu1 ?? 'Beranda' }}" placeholder="Menu 1">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu2" class="form-control" value="{{ $tampilan->menu2 ?? 'Tentang' }}" placeholder="Menu 2">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu3" class="form-control" value="{{ $tampilan->menu3 ?? 'Program' }}" placeholder="Menu 3">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu4" class="form-control" value="{{ $tampilan->menu4 ?? 'Galeri' }}" placeholder="Menu 4">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu5" class="form-control" value="{{ $tampilan->menu5 ?? 'Kontak' }}" placeholder="Menu 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Settings -->
            <div class="settings-section" id="heroSettings">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-card-image"></i> Gambar Hero</h6>
                            <div class="mb-3">
                                <label class="form-label">Upload Gambar Hero</label>
                                <input type="file" name="hero_image" class="form-control" accept="image/*">
                                <div class="form-text">Rekomendasi: 1920x1080px, maksimal 5MB.</div>
                            </div>
                            <div class="mt-3">
                                @if(!empty($hero->image))
                                    <img src="{{ asset('storage/'.$hero->image) }}" alt="Hero Image" class="image-preview img-fluid" style="max-height:180px; width: 100%; object-fit: cover;">
                                @else
                                    <img src="https://via.placeholder.com/300x180/5955B3/ffffff?text=Hero+Image" alt="Hero Image" class="image-preview img-fluid" style="max-height:180px; width: 100%; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD

                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-type-h1"></i> Typography Hero</h6>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Warna Font Hero</label>
                                    <div class="color-input-group">
                                        <input type="color" name="hero_font_color" class="form-control-color" value="{{ $hero->font_color ?? '#ffffff' }}">
                                        <span class="text-muted">{{ $hero->font_color ?? '#ffffff' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Font Family</label>
                                    <select name="hero_font" class="form-select">
                                        <option value="Poppins" {{ ($hero->font ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                                        <option value="Roboto" {{ ($hero->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                                        <option value="Open Sans" {{ ($hero->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                                        <option value="Playfair Display" {{ ($hero->font ?? '') == 'Playfair Display' ? 'selected' : '' }}>Playfair Display</option>
                                        <option value="Montserrat" {{ ($hero->font ?? '') == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Ukuran Font</label>
                                    <select name="hero_font_size" class="form-select">
                                        <option value="s" {{ ($hero->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                                        <option value="m" {{ ($hero->font_size ?? '') == 'm' ? 'selected' : '' }}>Sedang</option>
                                        <option value="l" {{ ($hero->font_size ?? 'l') == 'l' ? 'selected' : '' }}>Besar</option>
                                        <option value="xl" {{ ($hero->font_size ?? '') == 'xl' ? 'selected' : '' }}>Extra Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-section">
                            <h6><i class="bi bi-textarea-t"></i> Konten Hero</h6>
                            <div class="mb-3">
                                <label class="form-label">Judul Hero</label>
                                <input type="text" name="hero_title" class="form-control" 
                                       value="{{ $hero->title ?? 'Selamat Datang di SMK Negeri 1 Malang' }}" placeholder="Judul hero section">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subtitle Hero</label>
                                <textarea name="hero_subtitle" class="form-control" rows="3" 
                                          placeholder="Deskripsi singkat tentang sekolah">{{ $hero->subtitle ?? 'Membentuk siswa yang unggul, berkarakter, dan siap menghadapi tantangan masa depan dengan pendidikan berkualitas dan fasilitas modern.' }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Settings -->
            <div class="settings-section" id="footerSettings">
                <div class="card-section">
                    <h6><i class="bi bi-layout-text-window"></i> Pengaturan Footer</h6>
                    <p class="text-muted">Pengaturan footer akan tersedia pada pembaruan selanjutnya.</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-end gap-3 mt-4">
                <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                    <i class="bi bi-arrow-clockwise me-2"></i>Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg me-2"></i>Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Element Selection Logic
    const buttons = document.querySelectorAll('.card-button');
    const hiddenInput = document.getElementById('selectedElement');
    const settingsSections = document.querySelectorAll('.settings-section');

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            buttons.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Set hidden input value
            hiddenInput.value = this.dataset.element;
            
            // Hide all settings sections
            settingsSections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show selected settings section
            const targetSection = document.getElementById(this.dataset.element + 'Settings');
            if (targetSection) {
                targetSection.classList.add('active');
            }
            
            // Add some visual feedback
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    // Color Input Updates
    document.querySelectorAll('input[type="color"]').forEach(colorInput => {
        const textSpan = colorInput.parentElement.querySelector('span');
        
        colorInput.addEventListener('input', function() {
            if (textSpan) {
                textSpan.textContent = this.value.toUpperCase();
            }
        });
    });

    // Form Submission
    document.getElementById('customizationForm').addEventListener('submit', function(e) {
        // Show loading
        document.getElementById('loadingOverlay').classList.add('active');
        
        // Remove loading after a delay (remove this in production)
        setTimeout(() => {
            document.getElementById('loadingOverlay').classList.remove('active');
        }, 1500);
    });

    // Reset Form Function
    function resetForm() {
        if (confirm('Apakah Anda yakin ingin mereset semua pengaturan?')) {
            document.getElementById('customizationForm').reset();
            
            // Reset active states
            buttons.forEach(b => b.classList.remove('active'));
            settingsSections.forEach(section => {
                section.classList.remove('active');
            });
            
            hiddenInput.value = '';
        }
    }

    // Auto-select first element on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (buttons.length > 0) {
            buttons[0].click();
        }
    });

    // File input preview functionality
    document.querySelectorAll('input[type="file"]').forEach(fileInput => {
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Find associated image preview
                    const preview = fileInput.parentElement.parentElement.querySelector('img');
                    if (preview) {
                        preview.src = e.target.result;
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // Add smooth transitions for form interactions
    document.querySelectorAll('.form-control, .form-select').forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'translateY(-1px)';
        });
        
        input.addEventListener('blur', function() {
            this.style.transform = '';
        });
    });
</script>

</body>
</html>