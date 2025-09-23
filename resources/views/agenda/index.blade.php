<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard - Manajemen Agenda</title>
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
      min-height: 100vh;
    }

    .main-content {
      background-color: #f8f9ff;
      border-radius: 20px;
      padding: 30px;
      min-height: calc(100vh - 40px);
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

    .agenda-image {
      width: 50px;
      height: 40px;
      object-fit: cover;
      border-radius: 5px;
    }

    .agenda-title {
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

    .agenda-content {
      max-width: 250px;
      text-align: left;
      font-size: 13px;
      color: #666;
    }

    .status-badge {
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

    /* Modal Styles */
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
    @media (max-width: 992px) {
      .main-container {
        margin-left: 0;
        padding: 10px;
      }
    }

    @media (max-width: 768px) {
      .stats {
        flex-direction: column;
        gap: 10px;
      }

      .search-container {
        float: none;
        margin-bottom: 15px;
        width: 100%;
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

      .agenda-title,
      .agenda-content {
        max-width: 150px;
      }
      
      .action-buttons {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
@include('layouts.main')
<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <h2 class="section-title">AGENDA</h2>

      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"></path>
            <polyline points="7 9 12 4 17 9"></polyline>
            <line x1="12" x2="12" y1="4" y2="16"></line>
          </svg>
          <div class="stat-label">TOTAL AGENDA</div>
          <span class="stat-number" id="totalAgendas">{{ $totalAgendas ?? 0 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="23 4 23 10 17 10"></polyline>
            <polyline points="1 20 1 14 7 14"></polyline>
            <path d="M3.51 9a9 9 0 0 1 14.13-3.36L23 10M1 14l5.36 4.36A9 9 0 0 0 20.49 15"></path>
          </svg>
          <div class="stat-label">AGENDA BULAN INI</div>
          <span class="stat-number" id="agendasThisMonth">{{ $agendasThisMonth ?? 0 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m5 0V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v2"></path>
          </svg>
          <div class="stat-label">AGENDA MENDATANG</div>
          <span class="stat-number" id="upcomingAgendas">{{ $upcomingAgendas ?? 0 }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
          <div class="stat-label">AGENDA SELESAI</div>
          <span class="stat-number" id="completedAgendas">{{ $completedAgendas ?? 0 }}</span>
        </div>
      </div>

      <!-- Tombol Upload dan Search -->
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap;">
        <button class="upload-btn" onclick="openAddModal()">
          Tambah Agenda
          <div class="plus-icon">+</div>
        </button>
        
        <div class="search-container">
          <input type="text" class="search-input" placeholder="Cari agenda..." oninput="searchAgendas(this.value)">
        </div>
      </div>

      <!-- Tabel -->
      <table id="agendaTable">
        <thead>
          <tr>
            <th>NO</th>
            <th>GAMBAR</th>
            <th>JUDUL</th>
            <th>KONTEN</th>
            <th>TANGGAL</th>
            <th>STATUS</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody id="agendaTableBody">
          @forelse($agendas as $index => $agenda)
          <tr>
            <td class="text-center">
              <span class="fw-bold">{{ ($agendas->currentPage() - 1) * $agendas->perPage() + $index + 1 }}</span>
            </td>
            <td class="text-center">
              @if($agenda->gambar)
                <img src="{{ asset('storage/' . $agenda->gambar) }}" alt="Gambar Agenda" class="agenda-image">
              @else
                <div style="width: 50px; height: 40px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                  <i class="fas fa-calendar" style="color: #ccc;"></i>
                </div>
              @endif
            </td>
            <td class="agenda-title">
              <span class="title-text">{{ $agenda->judul }}</span>
              @php
                $status = \Carbon\Carbon::parse($agenda->tanggal) > now() ? 'MENDATANG' : 'SELESAI';
                $statusColor = $status === 'MENDATANG' ? '#28a745' : '#6c757d';
              @endphp
              <span class="status-badge" style="background: {{ $statusColor }}">{{ $status }}</span>
            </td>
            <td class="agenda-content">
              {{ Str::limit(strip_tags($agenda->konten), 120) }}
            </td>
            <td class="text-center">
              <span class="date-badge">
                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d/m/Y') }}
              </span>
            </td>
            <td class="text-center">
              <span class="status-badge" style="background: {{ $statusColor }}">{{ $status }}</span>
            </td>
            <td>
              <div class="action-buttons">
                <button class="btn-action btn-view" onclick="viewAgenda({{ $agenda->id }})" title="Lihat Detail">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn-action btn-edit" onclick="editAgenda({{ $agenda->id }})" title="Edit Agenda">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn-action btn-delete" onclick="deleteAgenda({{ $agenda->id }})" title="Hapus Agenda">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="empty-state">
              <i class="fas fa-calendar-alt"></i>
              <h3>Belum Ada Agenda</h3>
              <p>Mulai dengan menambahkan agenda pertama Anda.</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>

      <!-- Pagination -->
      @if($agendas->hasPages())
      <div class="pagination">
        @if ($agendas->onFirstPage())
          <button disabled>&lt;</button>
        @else
          <button onclick="window.location='{{ $agendas->previousPageUrl() }}'">&lt;</button>
        @endif
        
        @foreach ($agendas->getUrlRange(1, $agendas->lastPage()) as $page => $url)
          @if ($page == $agendas->currentPage())
            <button class="active">{{ $page }}</button>
          @else
            <button onclick="window.location='{{ $url }}'">{{ $page }}</button>
          @endif
        @endforeach
        
        @if ($agendas->hasMorePages())
          <button onclick="window.location='{{ $agendas->nextPageUrl() }}'">&gt;</button>
        @else
          <button disabled>&gt;</button>
        @endif
      </div>
      @endif
    </div>
  </div>
</div>

<!-- Modal Tambah/Edit Agenda -->
<div id="agendaModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2 id="modalTitle">Tambah Agenda Baru</h2>
      <button class="modal-close" onclick="closeModal()">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <form id="agendaForm" action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="agendaId" name="id">
      <div class="modal-body">
        <div class="form-grid">
          <div class="form-group full-width">
            <label class="form-label" for="agendaTitle">Judul Agenda *</label>
            <input type="text" class="form-control" id="agendaTitle" name="judul" required placeholder="Masukkan judul agenda">
          </div>
          <div class="form-group full-width">
            <label class="form-label" for="agendaDate">Tanggal Agenda *</label>
            <input type="date" class="form-control" id="agendaDate" name="tanggal" required>
          </div>
          <div class="form-group full-width">
            <label class="form-label" for="agendaImage">Gambar Agenda</label>
            <input type="file" class="form-control" id="agendaImage" name="gambar" accept="image/*">
            <small class="text-muted">Format: JPG, PNG, GIF. Maksimal 2MB</small>
            <div id="imagePreview" class="image-preview" style="display: none;">
              <img id="previewImage" src="" alt="Preview Gambar" class="preview-image">
            </div>
          </div>
          <div class="form-group full-width">
            <label class="form-label" for="agendaContent">Konten Agenda *</label>
            <textarea class="form-control textarea" id="agendaContent" name="konten" rows="6" placeholder="Tulis konten agenda..." required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-secondary-custom" onclick="closeModal()">
          <i class="fas fa-times"></i> Batal
        </button>
        <button type="submit" class="btn-primary-custom" id="submitBtn">
          <i class="fas fa-save"></i> <span id="saveButtonText">Simpan Agenda</span>
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Detail Agenda -->
<div id="detailModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Detail Agenda</h2>
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
  <span id="successMessage">Agenda berhasil disimpan!</span>
</div>

<!-- Loading Overlay -->
<div id="loadingOverlay" class="modal" style="display: none;">
  <div class="modal-content">
    <div class="loading"></div>
    <p>Memproses...</p>
  </div>
</div>

<script>
// ===== Variabel Global =====
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// ===== Utility =====
function showLoading() {
  document.getElementById('loadingOverlay').style.display = 'flex';
}
function hideLoading() {
  document.getElementById('loadingOverlay').style.display = 'none';
}
function showSuccess(message) {
  const toast = document.getElementById('successToast');
  document.getElementById('successMessage').textContent = message;
  toast.style.display = 'flex';
  setTimeout(() => { toast.style.display = 'none'; }, 3000);
}
function showError(message) {
  alert(message);
}

// ===== Modal =====
function closeModal() {
  document.getElementById('agendaModal').classList.remove('show');
}
function closeDetailModal() {
  document.getElementById('detailModal').classList.remove('show');
}

// ===== Tambah Agenda =====
function openAddModal() {
  document.getElementById('modalTitle').textContent = 'Tambah Agenda Baru';
  document.getElementById('saveButtonText').textContent = 'Simpan Agenda';
  document.getElementById('agendaForm').reset();
  document.getElementById('agendaId').value = '';
  document.getElementById('imagePreview').style.display = 'none';
  document.getElementById('agendaForm').action = "{{ route('agenda.store') }}";

  const methodInput = document.querySelector('input[name="_method"]');
  if (methodInput) methodInput.remove();

  const today = new Date().toISOString().split('T')[0];
  document.getElementById('agendaDate').value = today;

  document.getElementById('agendaModal').classList.add('show');
  setTimeout(() => document.getElementById('agendaTitle').focus(), 300);
}

// ===== Edit Agenda =====
function editAgenda(id) {
  showLoading();
  fetch(`/agenda/${id}/edit`)
    .then(res => res.json())
    .then(data => {
      hideLoading();
      document.getElementById('modalTitle').textContent = 'Edit Agenda';
      document.getElementById('saveButtonText').textContent = 'Update Agenda';
      document.getElementById('agendaForm').action = `/agenda/${id}`;
      document.getElementById('agendaId').value = id;

      // Tambahkan method PUT
      if (!document.querySelector('input[name="_method"]')) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = '_method';
        input.value = 'PUT';
        document.getElementById('agendaForm').appendChild(input);
      }

      document.getElementById('agendaTitle').value = data.judul;
      document.getElementById('agendaDate').value = data.tanggal;
      document.getElementById('agendaContent').value = data.konten;

      if (data.gambar) {
        document.getElementById('previewImage').src = `/storage/${data.gambar}`;
        document.getElementById('imagePreview').style.display = 'block';
      } else {
        document.getElementById('imagePreview').style.display = 'none';
      }

      document.getElementById('agendaModal').classList.add('show');
    })
    .catch(err => {
      hideLoading();
      showError("Gagal memuat data: " + err.message);
    });
}

// ===== Lihat Detail =====
function viewAgenda(id) {
  showLoading();
  fetch(`/agenda/${id}`)
    .then(res => res.json())
    .then(data => {
      hideLoading();
      const tanggal = new Date(data.tanggal).toLocaleDateString('id-ID', {
        weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
      });
      const isUpcoming = new Date(data.tanggal) > new Date();
      const status = isUpcoming ? 'MENDATANG' : 'SELESAI';
      const statusColor = isUpcoming ? '#28a745' : '#6c757d';

      document.getElementById('detailContent').innerHTML = `
        <div class="detail-header">
          <h1 class="detail-title">${data.judul}</h1>
          <div class="detail-meta">
            <span><i class="fas fa-calendar-alt"></i> ${tanggal}</span>
            <span style="background: rgba(${parseInt(statusColor.slice(1,3),16)},${parseInt(statusColor.slice(3,5),16)},${parseInt(statusColor.slice(5,7),16)},0.1); color:${statusColor}">
              <i class="fas fa-${isUpcoming ? 'clock' : 'check'}"></i> ${status}
            </span>
          </div>
        </div>
        ${data.gambar ? `<img src="/storage/${data.gambar}" class="detail-image">`
          : '<div class="text-center py-4"><i class="fas fa-calendar fa-3x" style="color:#ccc;"></i><p class="mt-2" style="color:#999;">Tidak ada gambar</p></div>'}
        <div class="detail-text">${data.konten.replace(/\n/g, '<br>')}</div>
      `;
      document.getElementById('detailModal').classList.add('show');
    })
    .catch(err => {
      hideLoading();
      showError("Gagal memuat detail: " + err.message);
    });
}

// ===== Hapus Agenda =====
function deleteAgenda(id) {
  if (!confirm("Yakin ingin menghapus agenda ini?")) return;

  showLoading();
  fetch(`/agenda/${id}`, {
    method: 'DELETE',
    headers: {
      'X-CSRF-TOKEN': csrfToken,
      'Accept': 'application/json'
    }
  })
  .then(res => {
    hideLoading();
    if (!res.ok) throw new Error("Gagal menghapus");
    showSuccess("Agenda berhasil dihapus!");
    setTimeout(() => location.reload(), 1000);
  })
  .catch(err => {
    hideLoading();
    showError("Error: " + err.message);
  });
}

// ===== Preview Gambar =====
document.getElementById('agendaImage').addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = e => {
      document.getElementById('previewImage').src = e.target.result;
      document.getElementById('imagePreview').style.display = 'block';
    };
    reader.readAsDataURL(file);
  } else {
    document.getElementById('imagePreview').style.display = 'none';
  }
});

// ===== Search Agenda (client side filter) =====
function searchAgendas(query) {
  const rows = document.querySelectorAll('#agendaTableBody tr');
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    row.style.display = text.includes(query.toLowerCase()) ? '' : 'none';
  });
}
</script>

</body>
</html>