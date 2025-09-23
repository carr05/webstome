<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - AGENDA</title>
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
    .action-buttons {
      display: flex;
      gap: 10px;
      justify-content: center;
    }
    .btn-edit, .btn-delete {
      border: none;
      background: none;
      cursor: pointer;
      font-size: 18px;
    }
    .btn-edit { color: #4B3FAE; }
    .btn-delete { color: #dc3545; }
    .img-thumbnail {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 5px;
    }
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <h2 class="fw-bold" style="color:#5955B3;">AGENDA</h2>

      <!-- Notifikasi -->
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"></path>
            <polyline points="7 9 12 4 17 9"></polyline>
            <line x1="12" x2="12" y1="4" y2="16"></line>
          </svg>
          TOTAL AGENDA
          <span>{{ $totalAgendas }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="23 4 23 10 17 10"></polyline>
            <polyline points="1 20 1 14 7 14"></polyline>
            <path d="M3.51 9a9 9 0 0 1 14.13-3.36L23 10M1 14l5.36 4.36A9 9 0 0 0 20.49 15"></path>
          </svg>
          AGENDA BULAN INI
          <span>{{ $agendasThisMonth }}</span>
        </div>
        <div class="stat-card">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m5 0V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v2"></path>
          </svg>
          AGENDA MENDATANG
          <span>{{ $upcomingAgendas }}</span>
        </div>
      </div>

      <!-- Tombol Tambah -->
      <a href="{{ route('agenda.create') }}" class="upload-btn">
        Tambah Agenda
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
          @foreach($agendas as $key => $agenda)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              @if($agenda->gambar)
                <img src="{{ asset('storage/' . $agenda->gambar) }}" alt="Gambar Agenda" class="img-thumbnail">
              @else
                <img src="https://via.placeholder.com/50" alt="No Image" class="img-thumbnail">
              @endif
            </td>
            <td>{{ Str::limit($agenda->judul, 30) }}</td>
            <td>{{ Str::limit(strip_tags($agenda->konten), 50) }}</td>
            <td>{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d/m/Y') }}</td>
            <td>
              <div class="action-buttons">
                <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn-edit" title="Edit">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-delete" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
                <a href="{{ route('agenda.show', $agenda->id) }}" class="btn-edit" title="Lihat Detail">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Pagination -->
      @if($agendas->hasPages())
      <div class="pagination">
        @if($agendas->onFirstPage())
          <button disabled>&lt;</button>
        @else
          <a href="{{ $agendas->previousPageUrl() }}"><button>&lt;</button></a>
        @endif

        @foreach(range(1, $agendas->lastPage()) as $page)
          @if($page == $agendas->currentPage())
            <button class="active">{{ $page }}</button>
          @else
            <a href="{{ $agendas->url($page) }}"><button>{{ $page }}</button></a>
          @endif
        @endforeach

        @if($agendas->hasMorePages())
          <a href="{{ $agendas->nextPageUrl() }}"><button>&gt;</button></a>
        @else
          <button disabled>&gt;</button>
        @endif
      </div>
      @endif
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Auto-hide alert setelah 5 detik
  document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(function(alert) {
      setTimeout(function() {
        alert.classList.remove('show');
        alert.classList.add('fade');
      }, 5000);
    });
  });
</script>
</body>
</html>