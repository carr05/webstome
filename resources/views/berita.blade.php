<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #5955B3;
      margin: 0;
    }
    
    /* Existing CSS - DO NOT MODIFY */
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

    /* Enhanced Styling */
    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 3px solid #5955B3;
    }

    .page-title {
      color: #5955B3;
      font-size: 2rem;
      font-weight: 700;
      margin: 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .stat-card {
      background: linear-gradient(135deg, #5955B3, #7B68EE);
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      color: white;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(89, 85, 179, 0.3);
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(89, 85, 179, 0.4);
    }

    .stat-card i {
      font-size: 2.5rem;
      margin-bottom: 15px;
      opacity: 0.9;
    }

    .stat-card .stat-number {
      display: block;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .stat-card .stat-label {
      font-size: 0.9rem;
      font-weight: 500;
      opacity: 0.9;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .actions-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      margin-bottom: 25px;
      flex-wrap: wrap;
    }

    .upload-btn {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      background: linear-gradient(135deg, #5955B3, #7B68EE);
      color: white;
      padding: 12px 25px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(89, 85, 179, 0.3);
      border: none;
      cursor: pointer;
    }

    .upload-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 30px rgba(89, 85, 179, 0.4);
      color: white;
      text-decoration: none;
    }

    .upload-btn i {
      font-size: 1.1rem;
    }

    .search-filter-container {
      display: flex;
      gap: 15px;
      align-items: center;
      flex-wrap: wrap;
    }

    .search-box {
      position: relative;
      min-width: 280px;
    }

    .search-box input {
      width: 100%;
      padding: 12px 45px 12px 20px;
      border: 2px solid #e0e0e0;
      border-radius: 50px;
      font-family: 'Poppins', sans-serif;
      font-size: 0.95rem;
      outline: none;
      transition: all 0.3s ease;
      background: white;
    }

    .search-box input:focus {
      border-color: #5955B3;
      box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
    }

    .search-box i {
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }

    .filter-select {
      padding: 12px 15px;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      font-family: 'Poppins', sans-serif;
      font-size: 0.95rem;
      outline: none;
      background: white;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .filter-select:focus {
      border-color: #5955B3;
      box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
    }

    .table-container {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      margin-bottom: 25px;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    thead {
      background: linear-gradient(135deg, #5955B3, #7B68EE);
    }

    thead th {
      color: white;
      padding: 18px 15px;
      text-align: center;
      font-weight: 600;
      font-size: 0.95rem;
      border: none;
    }

    tbody tr {
      transition: all 0.3s ease;
    }

    tbody tr:hover {
      background: #f8f9ff;
      transform: scale(1.001);
    }

    tbody tr:nth-child(even) {
      background-color: #fafbff;
    }

    tbody tr:nth-child(even):hover {
      background: #f8f9ff;
    }

    tbody td {
      padding: 16px 15px;
      border-bottom: 1px solid #f0f0f0;
      color: #333;
      font-size: 0.9rem;
      text-align: center;
      vertical-align: middle;
    }

    tbody tr:last-child td {
      border-bottom: none;
    }

    .news-image {
      width: 60px;
      height: 40px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .news-title {
      max-width: 200px;
      text-align: left;
      font-weight: 600;
      color: #333;
    }

    .news-title .title-text {
      display: block;
      margin-bottom: 5px;
    }

    .news-title .category-badge {
      background: rgba(89, 85, 179, 0.1);
      color: #5955B3;
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 0.75rem;
      font-weight: 500;
    }

    .news-content {
      max-width: 250px;
      text-align: left;
      color: #666;
      font-size: 0.85rem;
      line-height: 1.4;
    }

    .date-badge {
      background: #f8f9ff;
      color: #5955B3;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 500;
    }

    .action-buttons {
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .btn-action {
      width: 35px;
      height: 35px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .btn-view {
      background: linear-gradient(135deg, #17a2b8, #138496);
      color: white;
    }

    .btn-view:hover {
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(23, 162, 184, 0.3);
    }

    .btn-edit {
      background: linear-gradient(135deg, #28a745, #20c997);
      color: white;
    }

    .btn-edit:hover {
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    }

    .btn-delete {
      background: linear-gradient(135deg, #dc3545, #c82333);
      color: white;
    }

    .btn-delete:hover {
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-top: 25px;
      padding: 20px 0;
    }

    .pagination button {
      width: 40px;
      height: 40px;
      border: 2px solid #e0e0e0;
      background: white;
      border-radius: 10px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      color: #666;
      transition: all 0.3s ease;
    }

    .pagination button:hover:not(:disabled) {
      border-color: #5955B3;
      color: #5955B3;
      transform: translateY(-2px);
    }

    .pagination button.active {
      background: linear-gradient(135deg, #5955B3, #7B68EE);
      border-color: #5955B3;
      color: white;
    }

    .pagination button:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .pagination button:disabled:hover {
      transform: none;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(5px);
    }

    .modal-content {
      background-color: white;
      margin: 2% auto;
      padding: 0;
      border-radius: 20px;
      width: 90%;
      max-width: 700px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      animation: modalSlideIn 0.3s ease;
      max-height: 90vh;
      overflow: hidden;
    }

    @keyframes modalSlideIn {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .modal-header {
      background: linear-gradient(135deg, #5955B3, #7B68EE);
      color: white;
      padding: 25px;
      border-radius: 20px 20px 0 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-header h2 {
      margin: 0;
      font-size: 1.5rem;
      font-weight: 600;
    }

    .close {
      color: white;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
      transition: opacity 0.3s;
      line-height: 1;
    }

    .close:hover {
      opacity: 0.7;
    }

    .modal-body {
      padding: 30px;
      max-height: 60vh;
      overflow-y: auto;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group.full-width {
      grid-column: 1 / -1;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: 600;
      font-size: 0.95rem;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      font-family: 'Poppins', sans-serif;
      font-size: 0.95rem;
      outline: none;
      transition: all 0.3s ease;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: #5955B3;
      box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
    }

    .modal-footer {
      padding: 25px;
      border-top: 1px solid #f0f0f0;
      display: flex;
      gap: 15px;
      justify-content: flex-end;
    }

    .btn {
      padding: 12px 25px;
      border: none;
      border-radius: 10px;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .btn-primary {
      background: linear-gradient(135deg, #5955B3, #7B68EE);
      color: white;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(89, 85, 179, 0.3);
    }

    .btn-secondary {
      background: #f5f5f5;
      color: #666;
      border: 2px solid #e0e0e0;
    }

    .btn-secondary:hover {
      background: #e0e0e0;
      transform: translateY(-2px);
    }

    .empty-state {
      text-align: center;
      padding: 60px 20px;
      color: #666;
    }

    .empty-state i {
      font-size: 4rem;
      color: #ddd;
      margin-bottom: 20px;
    }

    .empty-state h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #999;
    }

    @media (max-width: 768px) {
      .main-container {
        margin-left: 0;
        padding: 10px;
      }

      .actions-bar {
        flex-direction: column;
        align-items: stretch;
      }

      .search-filter-container {
        flex-direction: column;
      }

      .search-box {
        min-width: auto;
      }

      .stats {
        grid-template-columns: 1fr;
      }

      table {
        font-size: 0.8rem;
      }

      .news-title,
      .news-content {
        max-width: 150px;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <div class="page-header">
        <h2 class="page-title">
          <i class="fas fa-newspaper"></i>
          MANAJEMEN BERITA
        </h2>
      </div>

      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">
          <i class="fas fa-upload"></i>
          <span class="stat-number" id="totalUploaded">24</span>
          <div class="stat-label">Berita Diunggah</div>
        </div>
        <div class="stat-card">
          <i class="fas fa-edit"></i>
          <span class="stat-number" id="totalUpdated">12</span>
          <div class="stat-label">Berita Diupdate</div>
        </div>
        <div class="stat-card">
          <i class="fas fa-trash-alt"></i>
          <span class="stat-number" id="totalDeleted">5</span>
          <div class="stat-label">Berita Dihapus</div>
        </div>
        <div class="stat-card">
          <i class="fas fa-eye"></i>
          <span class="stat-number" id="totalViews">15.2K</span>
          <div class="stat-label">Total Views</div>
        </div>
      </div>

      <!-- Action Bar -->
      <div class="actions-bar">
        <button class="upload-btn" onclick="openAddModal()">
          <i class="fas fa-plus"></i>
          Tambah Berita
        </button>
        <div class="search-filter-container">
          <div class="search-box">
            <input type="text" placeholder="Cari berita..." oninput="searchNews(this.value)">
            <i class="fas fa-search"></i>
          </div>
          <select class="filter-select" onchange="filterByCategory(this.value)">
            <option value="">Semua Kategori</option>
            <option value="politik">Politik</option>
            <option value="ekonomi">Ekonomi</option>
            <option value="teknologi">Teknologi</option>
            <option value="olahraga">Olahraga</option>
            <option value="hiburan">Hiburan</option>
          </select>
        </div>
      </div>

      <!-- Tabel -->
      <div class="table-container">
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
            <!-- Data akan diisi oleh JavaScript -->
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="pagination" id="pagination">
        <!-- Pagination akan dibuat oleh JavaScript -->
      </div>
    </div>

    <!-- Modal Tambah/Edit Berita -->
    <div id="newsModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h2 id="modalTitle">Tambah Berita</h2>
          <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <div class="modal-body">
          <form id="newsForm">
            <div class="form-grid">
              <div class="form-group full-width">
                <label for="newsTitle">Judul Berita</label>
                <input type="text" id="newsTitle" required>
              </div>
              <div class="form-group">
                <label for="newsCategory">Kategori</label>
                <select id="newsCategory" required>
                  <option value="">Pilih Kategori</option>
                  <option value="politik">Politik</option>
                  <option value="ekonomi">Ekonomi</option>
                  <option value="teknologi">Teknologi</option>
                  <option value="olahraga">Olahraga</option>
                  <option value="hiburan">Hiburan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="newsDate">Tanggal Publikasi</label>
                <input type="date" id="newsDate" required>
              </div>
              <div class="form-group full-width">
                <label for="newsImage">URL Gambar</label>
                <input type="url" id="newsImage" placeholder="https://example.com/image.jpg">
              </div>
              <div class="form-group full-width">
                <label for="newsContent">Konten Berita</label>
                <textarea id="newsContent" rows="6" placeholder="Tulis konten berita di sini..." required></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="closeModal()">
            <i class="fas fa-times"></i> Batal
          </button>
          <button type="button" class="btn btn-primary" onclick="saveNews()">
            <i class="fas fa-save"></i> Simpan
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  let newsData = [
    { 
      id: 1, 
      title: 'Pemilu 2024: Hasil Quick Count Menunjukkan Tren Positif', 
      category: 'politik', 
      content: 'Quick count pemilu menunjukkan partisipasi masyarakat yang tinggi dan proses pemilu berjalan lancar di seluruh Indonesia...', 
      date: '2024-02-15', 
      image: 'https://via.placeholder.com/300x200/5955B3/white?text=Politik'
    },
    { 
      id: 2, 
      title: 'Rupiah Menguat Terhadap Dollar AS', 
      category: 'ekonomi', 
      content: 'Nilai tukar rupiah menunjukkan penguatan signifikan terhadap dollar Amerika Serikat di pasar valuta asing Asia...', 
      date: '2024-02-14', 
      image: 'https://via.placeholder.com/300x200/28a745/white?text=Ekonomi'
    },
    { 
      id: 3, 
      title: 'Teknologi AI Terbaru Dikembangkan Startup Indonesia', 
      category: 'teknologi', 
      content: 'Startup teknologi Indonesia berhasil mengembangkan AI untuk membantu UMKM dalam digitalisasi bisnis...', 
      date: '2024-02-13', 
      image: 'https://via.placeholder.com/300x200/17a2b8/white?text=Teknologi'
    },
    { 
      id: 4, 
      title: 'Timnas Indonesia Lolos ke Babak 16 Besar', 
      category: 'olahraga', 
      content: 'Tim nasional Indonesia berhasil meraih prestasi membanggakan dengan lolos ke babak 16 besar Piala Asia...', 
      date: '2024-02-12', 
      image: 'https://via.placeholder.com/300x200/dc3545/white?text=Olahraga'
    },
    { 
      id: 5, 
      title: 'Festival Film Indonesia Raih Penghargaan Internasional', 
      category: 'hiburan', 
      content: 'Film Indonesia meraih berbagai penghargaan di festival film internasional, membanggakan industri perfilman tanah air...', 
      date: '2024-02-11', 
      image: 'https://via.placeholder.com/300x200/6f42c1/white?text=Hiburan'
    }
  ];

  let filteredNews = [...newsData];
  let currentEditId = null;
  let currentPage = 1;
  let itemsPerPage = 5;

  function renderTable() {
    const tbody = document.getElementById('newsTableBody');
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const pageData = filteredNews.slice(startIndex, endIndex);

    if (pageData.length === 0) {
      tbody.innerHTML = `
        <tr>
          <td colspan="6" class="empty-state">
            <i class="fas fa-inbox"></i>
            <h3>Tidak ada berita ditemukan</h3>
            <p>Tambahkan berita baru atau ubah kriteria pencarian</p>
          </td>
        </tr>
      `;
      return;
    }

    tbody.innerHTML = pageData.map((item, index) => `
      <tr>
        <td>${startIndex + index + 1}</td>
        <td><img src="${item.image}" alt="" class="news-image" onerror="this.src='https://via.placeholder.com/60x40/5955B3/white?text=News'"></td>
        <td class="news-title">
          <span class="title-text">${item.title}</span>
          <span class="category-badge">${item.category}</span>
        </td>
        <td class="news-content">${item.content.substring(0, 80)}...</td>
        <td><span class="date-badge">${new Date(item.date).toLocaleDateString('id-ID')}</span></td>
        <td>
          <div class="action-buttons">
            <button class="btn-action btn-view" onclick="viewNews(${item.id})" title="Lihat">
              <i class="fas fa-eye"></i>
            </button>
            <button class="btn-action btn-edit" onclick="editNews(${item.id})" title="Edit">
              <i class="fas fa-edit"></i>
            </button>
            <button class="btn-action btn-delete" onclick="deleteNews(${item.id})" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </td>
      </tr>
    `).join('');

    renderPagination();
  }

  function renderPagination() {
    const pagination = document.getElementById('pagination');
    const totalPages = Math.ceil(filteredNews.length / itemsPerPage);

    if (totalPages <= 1) {
      pagination.innerHTML = '';
      return;
    }

    let paginationHTML = '';

    // Previous button
    paginationHTML += `<button onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}><i class="fas fa-chevron-left"></i></button>`;

    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
      paginationHTML += `<button onclick="changePage(${i})" class="${i === currentPage ? 'active' : ''}">${i}</button>`;
    }

    // Next button
    paginationHTML += `<button onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}><i class="fas fa-chevron-right"></i></button>`;

    pagination.innerHTML = paginationHTML;
  }

  function changePage(page) {
    const totalPages = Math.ceil(filteredNews.length / itemsPerPage);
    if (page >= 1 && page <= totalPages) {
      currentPage = page;
      renderTable();
    }
  }

  function searchNews(query) {
    const searchTerm = query.toLowerCase().trim();
    if (searchTerm === '') {
      filteredNews = [...newsData];
    } else {
      filteredNews = newsData.filter(item =>
        item.title.toLowerCase().includes(searchTerm) ||
        item.content.toLowerCase().includes(searchTerm) ||
        item.category.toLowerCase().includes(searchTerm)
      );
    }
    currentPage = 1;
    renderTable();
  }

  function filterByCategory(category) {
    if (category === '') {
      filteredNews = [...newsData];
    } else {
      filteredNews = newsData.filter(item => item.category === category);
    }
    currentPage = 1;
    renderTable();
  }

  function openAddModal() {
    currentEditId = null;
    document.getElementById('modalTitle').textContent = 'Tambah Berita';
    document.getElementById('newsForm').reset();
    document.getElementById('newsDate').value = new Date().toISOString().split('T')[0];
    document.getElementById('newsModal').style.display = 'block';
  }

  function editNews(id) {
    const item = newsData.find(n => n.id === id);
    if (!item) return;

    currentEditId = id;
    document.getElementById('modalTitle').textContent = 'Edit Berita';
    document.getElementById('newsTitle').value = item.title;
    document.getElementById('newsCategory').value = item.category;
    document.getElementById('newsDate').value = item.date;
    document.getElementById('newsImage').value = item.image;
    document.getElementById('newsContent').value = item.content;
    document.getElementById('newsModal').style.display = 'block';
  }

  function viewNews(id) {
    const item = newsData.find(n => n.id === id);
    if (!item) return;
    
    alert(`Detail Berita:\n\nJudul: ${item.title}\nKategori: ${item.category}\nTanggal: ${new Date(item.date).toLocaleDateString('id-ID')}\n\nKonten: ${item.content}`);
  }

  function deleteNews(id) {
    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
      newsData = newsData.filter(n => n.id !== id);
      filteredNews = [...newsData];
      
      // Update stats
      document.getElementById('totalDeleted').textContent = parseInt(document.getElementById('totalDeleted').textContent) + 1;
      
      renderTable();
    }
  }

  function closeModal() {
    document.getElementById('newsModal').style.display = 'none';
    currentEditId = null;
  }

  function saveNews() {
    const title = document.getElementById('newsTitle').value.trim();
    const category = document.getElementById('newsCategory').value;
    const date = document.getElementById('newsDate').value;
    const image = document.getElementById('newsImage').value.trim();
    const content = document.getElementById('newsContent').value.trim();

    if (!title || !category || !date || !content) {
      alert('Mohon lengkapi semua field yang wajib diisi!');
      return;
    }

    const defaultImage = `https://via.placeholder.com/300x200/5955B3/white?text=${category}`;

    if (currentEditId) {
      // Edit existing news
      const itemIndex = newsData.findIndex(n => n.id === currentEditId);
      if (itemIndex !== -1) {
        newsData[itemIndex] = { 
          ...newsData[itemIndex], 
          title, category, date, content,
          image: image || defaultImage
        };
        
        // Update stats
        document.getElementById('totalUpdated').textContent = parseInt(document.getElementById('totalUpdated').textContent) + 1;
      }
    } else {
      // Add new news
      const newId = Math.max(...newsData.map(n => n.id), 0) + 1;
      newsData.push({ 
        id: newId, title, category, date, content,
        image: image || defaultImage
      });
      
      // Update stats
      document.getElementById('totalUploaded').textContent = parseInt(document.getElementById('totalUploaded').textContent) + 1;
    }

    closeModal();
    filteredNews = [...newsData];
    renderTable();
  }

  // Close modal when clicking outside
  window.onclick = function(event) {
    const modal = document.getElementById('newsModal');
    if (event.target === modal) {
      closeModal();
    }
  }

  // Initialize page
  document.addEventListener('DOMContentLoaded', function() {
    renderTable();
  });