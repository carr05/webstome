<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Berita</title>
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
    .card-section {
      background-color: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
<<<<<<< HEAD
=======
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
    .stat-card span {
      display: block;
      font-size: 24px;
      font-weight: 700;
      margin-top: 5px;
    }
>>>>>>> 435a7c3 (landing web promosi)
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
    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
    }
    thead {
      background-color: #4B3FAE;
      color: white;
    }
    th, td {
      padding: 12px;
      text-align: center;
    }
    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
<<<<<<< HEAD
=======
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
    }
    .pagination button.active {
      background: #4B3FAE;
      color: white;
    }
>>>>>>> 435a7c3 (landing web promosi)
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
<<<<<<< HEAD
      <h2 class="fw-bold" style="color:#5955B3;">BERITA</h2>

      <!-- Tombol Upload -->
      <a href="{{ route('berita.create') }}" class="upload-btn">
=======
     <h2 class="fw-bold" style="color:#5955B3;">BERITA</h2>


      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"></path><polyline points="7 9 12 4 17 9"></polyline><line x1="12" x2="12" y1="4" y2="16"></line></svg>
          BERITA DI UNGGAH
          <span>24</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.13-3.36L23 10M1 14l5.36 4.36A9 9 0 0 0 20.49 15"></path></svg>
          BERITA DI UPDATE
          <span>12</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m5 0V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v2"></path></svg>
          BERITA DI HAPUS
          <span>5</span>
        </div>
      </div>

      <!-- Tombol Upload -->
      <a href="#" class="upload-btn">
>>>>>>> 435a7c3 (landing web promosi)
        Upload
        <div class="plus-icon">+</div>
      </a>

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
<<<<<<< HEAD
          @forelse ($berita as $index => $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              @if($item->gambar)
                <img src="{{ asset('storage/'.$item->gambar) }}" alt="" width="50">
              @else
                <span class="text-muted">-</span>
              @endif
            </td>
            <td>{{ $item->judul }}</td>
            <td>{{ Str::limit($item->konten, 50) }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>
              <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-warning">✏️</a>
              <form action="{{ route('berita.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus berita ini?')">🗑️</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center">Belum ada berita.</td>
          </tr>
          @endforelse
=======
          <tr>
            <td>1</td>
            <td><img src="https://via.placeholder.com/50" alt=""></td>
            <td>Judul Berita</td>
            <td>Isi konten singkat...</td>
            <td>10/08/2025</td>
            <td>✏️ 🗑️</td>
          </tr>
>>>>>>> 435a7c3 (landing web promosi)
        </tbody>
      </table>

      <!-- Pagination -->
<<<<<<< HEAD
      <div class="mt-3">
        {{ $berita->links() }}
=======
      <div class="pagination">
        <button>&lt;</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>...</button>
        <button>&gt;</button>
>>>>>>> 435a7c3 (landing web promosi)
      </div>
    </div>
  </div>
</div>

</body>
</html>
