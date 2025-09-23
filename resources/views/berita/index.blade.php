<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard - Manajemen Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

    .section-title {
      color: #5955B3;
      font-weight: bold;
      font-size: 1.5rem;
      margin-bottom: 20px;
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

    .stat-card .stat-number {
      display: block;
      font-size: 24px;
      font-weight: 700;
      margin-top: 5px;
    }

    .stat-card .stat-label {
      font-size: 12px;
      font-weight: 500;
      text-transform: uppercase;
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
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .upload-btn:hover {
      background: #3d2f8a;
      color: white;
      text-decoration: none;
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

    .search-container {
      float: right;
      margin-bottom: 20px;
    }

    .search-input {
      padding: 8px 15px;
      border: 2px solid #e0e0e0;
      border-radius: 25px;
      outline: none;
      width: 300px;
      font-size: 14px;
    }

    .search-input:focus {
      border-color: #4B3FAE;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
      margin-top: 20px;
    }

    thead {
      background-color: #4B3FAE;
      color: white;
    }

    th, td {
      padding: 12px;
      text-align: center;
      vertical-align: middle;
    }

    th {
      font-weight: 600;
      font-size: 14px;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #f0f0ff;
    }

    .news-image {
      width: 50px;
      height: 40px;
      object-fit: cover;
      border-radius: 5px;
    }

    .news-title {
      max-width: 200px;
      text-align: left;
      font-weight: 600;
      color: #333;
    }

    .title-text {
      font-weight: 600;
      color: #333;
      display: block;
      margin-bottom: 5px;
    }

    .news-content {
      max-width: 250px;
      text-align: left;
      font-size: 13px;
      color: #666;
    }

    .category-badge {
      background: #4B3FAE;
      color: white;
      padding: 3px 8px;
      border-radius: 15px;
      font-size: 11px;
      font-weight: 500;
    }

    .date-badge {
      background: #f0f0ff;
      color: #4B3FAE;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 600;
    }

    .action-buttons {
      display: flex;
      gap: 5px;
      justify-content: center;
    }

    .btn-action {
      width: 30px;
      height: 30px;
      border: none;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 12px;
      transition: all 0.3s ease;
    }

    .btn-view { 
      background: #17a2b8; 
      color: white;
    }
    .btn-edit { 
      background: #28a745; 
      color: white;
    }
    .btn-delete { 
      background: #dc3545; 
      color: white;
    }

    .btn-action:hover {
      transform: scale(1.1);
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
      min-width: 35px;
    }

    .pagination button.active {
      background: #4B3FAE;
      color: white;
    }

    .pagination button:hover:not(.active) {
      background: #f0f0ff;
    }

    .empty-state {
      text-align: center;
      padding: 40px 20px;
      color: #666;
    }

    .empty-state i {
      font-size: 50px;
      margin-bottom: 15px;
      opacity: 0.5;
    }

    /* Modal Styles - Tetap menggunakan gaya yang sudah ada */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      z-index: 1000;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    .modal.show {
      display: flex;
      animation: modalFadeIn 0.3s ease;
    }

    @keyframes modalFadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .modal-content {
      background: white;
      border-radius: 15px;
      max-width: 800px;
      width: 100%;
      max-height: 90vh;
      overflow: hidden;
      animation: modalSlideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
      border: 1px solid rgba(255,255,255,0.2);
    }

    @keyframes modalSlideUp {
      from {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .modal-header {
      background: #4B3FAE;
      color: white;
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-header h2 {
      font-size: 1.3rem;
      font-weight: 700;
      margin: 0;
    }

    .modal-close {
      background: none;
      border: none;
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .modal-close:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.1);
    }

    .modal-body {
      padding: 2rem;
      max-height: 60vh;
      overflow-y: auto;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group.full-width {
      grid-column: 1 / -1;
    }

    .form-label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #333;
    }

    .form-control {
      width: 100%;
      padding: 0.875rem 1rem;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      background: white;
    }

    .form-control:focus {
      outline: none;
      border-color: #4B3FAE;
      box-shadow: 0 0 0 3px rgba(75, 63, 174, 0.1);
    }

    .form-control.textarea {
      resize: vertical;
      min-height: 120px;
    }

    .image-preview {
      margin-top: 1rem;
      text-align: center;
    }

    .preview-image {
      max-width: 200px;
      max-height: 150px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border: 2px solid #eee;
    }

    .modal-footer {
      padding: 1.5rem 2rem;
      border-top: 1px solid #eee;
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
      background: rgba(248, 250, 252, 0.5);
    }

    .btn-secondary-custom {
      background: #6c757d;
      border: none;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-secondary-custom:hover {
      background: #545b62;
    }

    .btn-primary-custom {
      background: #4B3FAE;
      border: none;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
      background: #3d2f8a;
    }

    .success-toast {
      position: fixed;
      top: 2rem;
      right: 2rem;
      background: #28a745;
      color: white;
      padding: 1rem 1.5rem;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      z-index: 1001;
      display: none;
      align-items: center;
      gap: 0.75rem;
    }

    #loadingOverlay .modal-content {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      max-width: 200px;
      text-align: center;
      padding: 2rem;
    }

    .loading {
      display: inline-block;
      width: 40px;
      height: 40px;
      border: 4px solid #f3f3f3;
      border-radius: 50%;
      border-top-color: #4B3FAE;
      animation: spin 1s ease-in-out infinite;
      margin: 0 auto 1rem;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Detail Modal Styles */
    .detail-content {
      line-height: 1.8;
    }

    .detail-header {
      margin-bottom: 2rem;
      padding-bottom: 1rem;
      border-bottom: 2px solid #eee;
    }

    .detail-title {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 1rem;
      line-height: 1.3;
    }

    .detail-meta {
      display: flex;
      gap: 1.5rem;
      color: #666;
      font-size: 0.9rem;
      flex-wrap: wrap;
    }

    .detail-meta span {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background: rgba(75, 63, 174, 0.1);
      border-radius: 50px;
    }

    .detail-image {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 2rem;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .detail-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #333;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .main-container {
        margin-left: 0;
        padding: 10px;
      }

      .stats {
        flex-direction: column;
        gap: 10px;
      }

      .search-container {
        float: none;
        margin-bottom: 15px;
      }

      .search-input {
        width: 100%;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }

      table {
        font-size: 12px;
      }

      .news-title,
      .news-content {
        max-width: 150px;
      }
    }
  </style>
</head>
<body>
@include('layouts.main')
<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <h2 class="section-title">BERITA</h2>

      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"></path>
            <polyline points="7 9 12 4 17 9"></polyline>
            <line x1="12" x2="12" y1="4" y2="16"></line>
          </svg>
          <div class="stat-label">BERITA DI UNGGAH</div>
          <span class="stat-number" id="totalUploaded">{{ $totalBerita ?? 24 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="23 4 23 10 17 10"></polyline>
            <polyline points="1 20 1 14 7 14"></polyline>
            <path d="M3.51 9a9 9 0 0 1 14.13-3.36L23 10M1 14l5.36 4.36A9 9 0 0 0 20.49 15"></path>
          </svg>
          <div class="stat-label">BERITA DI UPDATE</div>
          <span class="stat-number" id="totalUpdated">{{ $beritaUpdated ?? 12 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m5 0V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v2"></path>
          </svg>
          <div class="stat-label">BERITA DI HAPUS</div>
          <span class="stat-number" id="totalDeleted">{{ $beritaDeleted ?? 5 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
          <div class="stat-label">TOTAL VIEWS</div>
          <span class="stat-number" id="totalViews">{{ $totalViews ?? 156 }}</span>
        </div>
      </div>

      <!-- Tombol Upload dan Search -->
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <button class="upload-btn" onclick="openAddModal()">
          Upload
          <div class="plus-icon">+</div>
        </button>
        
        <div class="search-container">
          <input type="text" class="search-input" placeholder="Cari berita..." oninput="searchNews(this.value)">
        </div>
      </div>

      <!-- Tabel -->
      <table id="newsTable">
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
        <tbody id="newsTableBody">
          @forelse($beritaList as $index => $berita)
          <tr>
            <td class="text-center">
              <span class="fw-bold">{{ $index + 1 }}</span>
            </td>
            <td class="text-center">
              @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="news-image">
              @else
                <div style="width: 50px; height: 40px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                  <i class="fas fa-image" style="color: #ccc;"></i>
                </div>
              @endif
            </td>
            <td class="news-title">
              <span class="title-text">{{ $berita->judul }}</span>
              <span class="category-badge">{{ strtoupper($berita->kategori ?? 'UMUM') }}</span>
            </td>
            <td class="news-content">
              {{ Str::limit($berita->konten, 120) }}
            </td>
            <td class="text-center">
              <span class="date-badge">
                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d/m/Y') }}
              </span>
            </td>
            <td>
              <div class="action-buttons">
                <button class="btn-action btn-view" onclick="viewNews({{ $berita->id }})" title="Lihat Detail">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn-action btn-edit" onclick="editNews({{ $berita->id }})" title="Edit Berita">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn-action btn-delete" onclick="deleteNews({{ $berita->id }})" title="Hapus Berita">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="empty-state">
              <i class="fas fa-newspaper"></i>
              <h3>Belum Ada Berita</h3>
              <p>Mulai dengan menambahkan berita pertama Anda.</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>

      <!-- Pagination -->
      @if($beritaList->hasPages())
      <div class="pagination">
        @if ($beritaList->onFirstPage())
          <button disabled>&lt;</button>
        @else
          <button onclick="window.location='{{ $beritaList->previousPageUrl() }}'">&lt;</button>
        @endif
        
        @foreach ($beritaList->getUrlRange(1, $beritaList->lastPage()) as $page => $url)
          @if ($page == $beritaList->currentPage())
            <button class="active">{{ $page }}</button>
          @else
            <button onclick="window.location='{{ $url }}'">{{ $page }}</button>
          @endif
        @endforeach
        
        @if ($beritaList->hasMorePages())
          <button onclick="window.location='{{ $beritaList->nextPageUrl() }}'">&gt;</button>
        @else
          <button disabled>&gt;</button>
        @endif
      </div>
      @endif
    </div>
  </div>
</div>

<!-- Modal Tambah/Edit Berita -->
<div id="newsModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2 id="modalTitle">Tambah Berita Baru</h2>
      <button class="modal-close" onclick="closeModal()">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <form id="newsForm" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="newsId" name="id">
      <div class="modal-body">
        <div class="form-grid">
          <div class="form-group full-width">
            <label class="form-label" for="newsTitle">Judul Berita *</label>
            <input type="text" class="form-control" id="newsTitle" name="judul" required placeholder="Masukkan judul berita yang menarik">
          </div>
          <div class="form-group">
            <label class="form-label" for="newsCategory">Kategori *</label>
            <select class="form-control" id="newsCategory" name="kategori" required>
              <option value="">Pilih Kategori</option>
              <option value="Pendidikan">Pendidikan</option>
              <option value="Olahraga">Olahraga</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Kesehatan">Kesehatan</option>
              <option value="Seni">Seni & Budaya</option>
              <option value="Umum">Umum</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="newsDate">Tanggal Publikasi *</label>
            <input type="date" class="form-control" id="newsDate" name="tanggal" required>
          </div>
          <div class="form-group full-width">
            <label class="form-label" for="newsImage">Gambar Berita</label>
            <input type="file" class="form-control" id="newsImage" name="gambar" accept="image/*">
            <small class="text-muted">Format: JPG, PNG, GIF. Maksimal 2MB. Rekomendasi rasio 16:9</small>
            <div id="imagePreview" class="image-preview" style="display: none;">
              <img id="previewImage" src="" alt="Preview Gambar" class="preview-image">
            </div>
          </div>
          <div class="form-group full-width">
            <label class="form-label" for="newsContent">Konten Berita *</label>
            <textarea class="form-control textarea" id="newsContent" name="konten" rows="6" placeholder="Tulis konten berita yang informatif dan menarik..." required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-secondary-custom" onclick="closeModal()">
          <i class="fas fa-times"></i> Batal
        </button>
        <button type="submit" class="btn-primary-custom" id="submitBtn">
          <i class="fas fa-save"></i> <span id="saveButtonText">Simpan Berita</span>
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Detail Berita -->
<div id="detailModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Detail Berita</h2>
      <button class="modal-close" onclick="closeDetailModal()">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="modal-body">
      <div id="detailContent" class="detail-content">
        <!-- Konten detail akan diisi oleh JavaScript -->
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn-secondary-custom" onclick="closeDetailModal()">
        <i class="fas fa-times"></i> Tutup
      </button>
    </div>
  </div>
</div>

<!-- Success Toast -->
<div id="successToast" class="success-toast">
  <i class="fas fa-check-circle"></i>
  <span id="successMessage">Berita berhasil disimpan!</span>
</div>

<!-- Loading Overlay -->
<div id="loadingOverlay" class="modal" style="display: none;">
  <div class="modal-content">
    <div class="loading"></div>
    <p>Memproses...</p>
  </div>
</div>

<script>
    // CSRF Token untuk AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Fungsi untuk membuka modal tambah berita
    function openAddModal() {
        console.log('Opening add modal');
        
        document.getElementById('modalTitle').textContent = 'Tambah Berita Baru';
        document.getElementById('saveButtonText').textContent = 'Simpan Berita';
        document.getElementById('newsForm').reset();
        document.getElementById('newsId').value = '';
        document.getElementById('imagePreview').style.display = 'none';
        document.getElementById('newsForm').action = "{{ route('berita.store') }}";
        
        // Hapus method PUT jika ada
        const methodInput = document.querySelector('input[name="_method"]');
        if (methodInput) {
            methodInput.remove();
        }
        
        // Set tanggal hari ini sebagai default
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('newsDate').value = today;
        
        document.getElementById('newsModal').classList.add('show');
        
        // Focus pada input pertama
        setTimeout(() => {
            document.getElementById('newsTitle').focus();
        }, 300);
    }

    // Fungsi untuk mengedit berita
    function editNews(id) {
        console.log('Editing news ID:', id);
        
        // Tampilkan loading state
        const editBtn = event.target.closest('.btn-edit');
        const originalHTML = editBtn.innerHTML;
        editBtn.innerHTML = '<div class="loading" style="width: 12px; height: 12px; border-width: 2px;"></div>';
        editBtn.disabled = true;
        
        showLoading();
        
        fetch(`/berita/${id}/edit`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Received data:', data);
                
                document.getElementById('modalTitle').textContent = 'Edit Berita';
                document.getElementById('saveButtonText').textContent = 'Update Berita';
                document.getElementById('newsId').value = data.id;
                document.getElementById('newsTitle').value = data.judul;
                document.getElementById('newsCategory').value = data.kategori;
                document.getElementById('newsDate').value = data.tanggal;
                document.getElementById('newsContent').value = data.konten;
                
                // Set form action untuk update
                document.getElementById('newsForm').action = `/berita/${data.id}`;
                
                // Tambahkan method PUT
                let methodInput = document.querySelector('input[name="_method"]');
                if (!methodInput) {
                    methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PUT';
                    document.getElementById('newsForm').appendChild(methodInput);
                } else {
                    methodInput.value = 'PUT';
                }
                
                // Preview gambar
                if (data.gambar) {
                    document.getElementById('imagePreview').style.display = 'block';
                    document.getElementById('previewImage').src = `/storage/${data.gambar}`;
                } else {
                    document.getElementById('imagePreview').style.display = 'none';
                }
                
                document.getElementById('newsModal').classList.add('show');
            })
            .catch(error => {
                console.error('Error:', error);
                showError('Error mengambil data berita: ' + error.message);
            })
            .finally(() => {
                // Kembalikan tombol ke state semula
                editBtn.innerHTML = '<i class="fas fa-edit"></i>';
                editBtn.disabled = false;
                hideLoading();
            });
    }

    // Fungsi untuk melihat detail berita
    function viewNews(id) {
        console.log('Viewing news ID:', id);
        
        // Tampilkan loading state
        const viewBtn = event.target.closest('.btn-view');
        const originalHTML = viewBtn.innerHTML;
        viewBtn.innerHTML = '<div class="loading" style="width: 12px; height: 12px; border-width: 2px;"></div>';
        viewBtn.disabled = true;
        
        showLoading();
        
        fetch(`/berita/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Detail data:', data);
                
                const detailContent = document.getElementById('detailContent');
                
                // Format tanggal
                const tanggal = new Date(data.tanggal).toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                
                // Buat konten detail
                detailContent.innerHTML = `
                    <div class="detail-header">
                        <h1 class="detail-title">${data.judul}</h1>
                        <div class="detail-meta">
                            <span><i class="fas fa-calendar-alt"></i> ${tanggal}</span>
                            <span><i class="fas fa-tag"></i> ${data.kategori || 'Umum'}</span>
                            <span><i class="fas fa-eye"></i> ${data.views || 0} views</span>
                        </div>
                    </div>
                    
                    ${data.gambar ? `
                        <img src="/storage/${data.gambar}" alt="${data.judul}" class="detail-image">
                    ` : '<div class="text-center py-4"><i class="fas fa-image fa-3x" style="color: #ccc;"></i><p class="mt-2" style="color: #999;">Tidak ada gambar</p></div>'}
                    
                    <div class="detail-text">
                        ${data.konten.replace(/\n/g, '<br>')}
                    </div>
                `;
                
                document.getElementById('detailModal').classList.add('show');
            })
            .catch(error => {
                console.error('Error:', error);
                showError('Error mengambil detail berita: ' + error.message);
            })
            .finally(() => {
                // Kembalikan tombol ke state semula
                viewBtn.innerHTML = '<i class="fas fa-eye"></i>';
                viewBtn.disabled = false;
                hideLoading();
            });
    }

    // Fungsi untuk menghapus berita
    function deleteNews(id) {
        console.log('Deleting news ID:', id);
        
        if (confirm('Apakah Anda yakin ingin menghapus berita ini?\n\nTindakan ini tidak dapat dibatalkan.')) {
            // Tampilkan loading state
            const deleteBtn = event.target.closest('.btn-delete');
            const originalHTML = deleteBtn.innerHTML;
            deleteBtn.innerHTML = '<div class="loading" style="width: 12px; height: 12px; border-width: 2px;"></div>';
            deleteBtn.disabled = true;
            
            showLoading();
            
            fetch(`/berita/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin'
            })
            .then(response => {
                console.log('Response status:', response.status);
                
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('Delete response:', data);
                
                if (data.success) {
                    showSuccess('Berita berhasil dihapus!');
                    // Reload halaman setelah penghapusan berhasil
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else {
                    throw new Error(data.message || 'Gagal menghapus berita');
                }
            })
            .catch(error => {
                console.error('Delete error:', error);
                showError('Error menghapus berita: ' + error.message);
            })
            .finally(() => {
                // Kembalikan tombol ke state semula
                deleteBtn.innerHTML = '<i class="fas fa-trash"></i>';
                deleteBtn.disabled = false;
                hideLoading();
            });
        }
    }

    // Fungsi untuk menutup modal tambah/edit
    function closeModal() {
        document.getElementById('newsModal').classList.remove('show');
    }

    // Fungsi untuk menutup modal detail
    function closeDetailModal() {
        document.getElementById('detailModal').classList.remove('show');
    }

    // Fungsi untuk menampilkan pesan sukses
    function showSuccess(message) {
        const toast = document.getElementById('successToast');
        const messageEl = document.getElementById('successMessage');
        messageEl.textContent = message;
        toast.style.display = 'flex';
        
        setTimeout(() => {
            toast.style.display = 'none';
        }, 3000);
    }

    // Fungsi untuk menampilkan error
    function showError(message) {
        // Buat custom error toast
        const errorToast = document.createElement('div');
        errorToast.className = 'success-toast';
        errorToast.style.background = '#dc3545';
        errorToast.innerHTML = `
            <i class="fas fa-exclamation-circle"></i>
            <span>${message}</span>
        `;
        document.body.appendChild(errorToast);
        
        errorToast.style.display = 'flex';
        
        setTimeout(() => {
            errorToast.style.display = 'none';
            setTimeout(() => {
                errorToast.remove();
            }, 500);
        }, 3000);
    }

    // Fungsi untuk menampilkan loading
    function showLoading() {
        document.getElementById('loadingOverlay').style.display = 'flex';
    }

    // Fungsi untuk menyembunyikan loading
    function hideLoading() {
        document.getElementById('loadingOverlay').style.display = 'none';
    }

    // Preview gambar sebelum upload
    document.getElementById('newsImage').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('imagePreview');
        const previewImage = document.getElementById('previewImage');
        
        if (file) {
            // Validasi ukuran file (max 2MB)
            if (file.size > 2 * 1024 * 1024) {
                showError('Ukuran file terlalu besar. Maksimal 2MB.');
                this.value = '';
                preview.style.display = 'none';
                return;
            }
            
            // Validasi tipe file
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                showError('Format file tidak didukung. Gunakan JPG, PNG, atau GIF.');
                this.value = '';
                preview.style.display = 'none';
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.style.display = 'block';
                previewImage.src = e.target.result;
            };
            reader.onerror = function() {
                showError('Error membaca file gambar.');
                preview.style.display = 'none';
            };
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
        }
    });

    // Pencarian berita (client-side)
    function searchNews(query) {
        const searchTerm = query.toLowerCase().trim();
        const rows = document.querySelectorAll('#newsTableBody tr');
        let visibleCount = 0;
        
        rows.forEach(row => {
            if (row.querySelector('.empty-state')) return;
            
            const title = row.querySelector('.title-text')?.textContent.toLowerCase() || '';
            const content = row.querySelector('.news-content')?.textContent.toLowerCase() || '';
            const category = row.querySelector('.category-badge')?.textContent.toLowerCase() || '';
            
            if (title.includes(searchTerm) || content.includes(searchTerm) || category.includes(searchTerm)) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });
        
        // Tampilkan pesan jika tidak ada hasil
        const tableBody = document.getElementById('newsTableBody');
        let emptySearchRow = tableBody.querySelector('.empty-search-row');
        
        if (visibleCount === 0 && searchTerm.length > 0) {
            if (!emptySearchRow) {
                emptySearchRow = document.createElement('tr');
                emptySearchRow.className = 'empty-search-row';
                emptySearchRow.innerHTML = `
                    <td colspan="6" class="empty-state">
                        <i class="fas fa-search"></i>
                        <h3>Tidak Ditemukan</h3>
                        <p>Tidak ada berita yang sesuai dengan pencarian "${searchTerm}"</p>
                    </td>
                `;
                tableBody.appendChild(emptySearchRow);
            }
        } else if (emptySearchRow) {
            emptySearchRow.remove();
        }
    }

    // Event listeners ketika DOM siap
    document.addEventListener('DOMContentLoaded', function() {
        console.log('News Management System loaded with agenda style');
        
        // Close modal ketika klik di luar modal
        window.addEventListener('click', function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.classList.remove('show');
                }
            });
        });

        // Close modal dengan ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
                closeDetailModal();
            }
        });

        // Validasi form sebelum submit
        const newsForm = document.getElementById('newsForm');
        if (newsForm) {
            newsForm.addEventListener('submit', function(e) {
                const submitBtn = document.getElementById('submitBtn');
                const originalText = submitBtn.innerHTML;
                
                // Validasi form
                const title = document.getElementById('newsTitle').value.trim();
                const content = document.getElementById('newsContent').value.trim();
                const category = document.getElementById('newsCategory').value;
                const date = document.getElementById('newsDate').value;
                
                if (!title || !content || !category || !date) {
                    e.preventDefault();
                    showError('Harap lengkapi semua field yang wajib diisi!');
                    return false;
                }
                
                if (title.length < 5) {
                    e.preventDefault();
                    showError('Judul berita minimal 5 karakter!');
                    document.getElementById('newsTitle').focus();
                    return false;
                }
                
                if (content.length < 10) {
                    e.preventDefault();
                    showError('Konten berita minimal 10 karakter!');
                    document.getElementById('newsContent').focus();
                    return false;
                }
                
                // Tampilkan loading state
                submitBtn.innerHTML = '<div class="loading" style="width: 16px; height: 16px; border-width: 2px; margin-right: 8px;"></div> Menyimpan...';
                submitBtn.disabled = true;
                
                // Reset loading setelah form submit
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>