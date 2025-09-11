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
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <h2 class="fw-bold" style="color:#5955B3;">BERITA</h2>

      <!-- Tombol Upload -->
      <a href="{{ route('berita.create') }}" class="upload-btn">
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
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="mt-3">
        {{ $berita->links() }}
      </div>
    </div>
  </div>
</div>

</body>
</html>
