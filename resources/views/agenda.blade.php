<style>

    /* Main content */
    .main {
      margin-left: 220px;
      background: white;
      flex: 1;
      padding: 20px;
      min-height: 100vh;
    }

    /* Card statistik */
    .stats {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }
    .stat-card {
      flex: 1;
      background: #f6f6ff;
      padding: 20px;
      border-radius: 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-weight: 600;
      color: #4B3FAE;
    }
    .stat-card span {
      font-size: 28px;
      font-weight: bold;
      margin-top: 10px;
    }

    /* Tombol upload */
    .upload-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #4B3FAE;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      margin-bottom: 20px;
    }

    /* Tabel */
    table {
      width: 100%;
      border-collapse: collapse;
    }
    thead {
      background-color: #4B3FAE;
      color: white;
    }
    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    /* Pagination */
    .pagination {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }
    .pagination button {
      background: #f6f6ff;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
    .pagination button.active {
      background: #4B3FAE;
      color: white;
    }
  </style>
</head>
<body>

  @include('layouts.main')
  <!-- Main -->
  <div class="main">
    <h2>Agenda</h2>

    <!-- Statistik -->
    <div class="stats">
      <div class="stat-card">📤 Berita di Unggah <span>24</span></div>
      <div class="stat-card">🔄 Berita di Update <span>24</span></div>
      <div class="stat-card">🗑️ Berita di Hapus <span>24</span></div>
    </div>

    <!-- Tombol Upload -->
    <a href="#" class="upload-btn">＋ Upload</a>

    <!-- Tabel -->
    <table>
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
      <tbody>
        <tr>
          <td>1</td>
          <td><img src="https://via.placeholder.com/50" alt=""></td>
          <td>Judul Berita</td>
          <td>Isi konten...</td>
          <td>10/08/2025</td>
          <td>✏️ 🗑️</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="pagination">
      <button class="active">1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>...</button>
    </div>
  </div>

</body>
</html>
