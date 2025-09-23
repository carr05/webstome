<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - PRESTASI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #5955B3;
      margin: 0;
    }
    .main-container { margin-left: 240px; padding: 20px; height: 100vh; }
    .main-content { background-color: #f8f9ff; border-radius: 20px; padding: 30px; height: 100%; overflow-y: auto; box-shadow: 0 8px 40px rgba(0,0,0,0.1); }
    .card-section { background-color: white; border-radius: 15px; padding: 20px; margin-bottom: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
    .stats { display: flex; gap: 20px; margin-bottom: 25px; }
    .stat-card { flex: 1; background: #f6f6ff; padding: 20px; border-radius: 15px; text-align: center; color: #4B3FAE; }
    .upload-btn { display: inline-flex; align-items: center; gap: 10px; background: #4B3FAE; color: white; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: 500; margin-bottom: 20px; }
    table { width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; }
    thead { background-color: #4B3FAE; color: white; }
    th, td { padding: 12px; text-align: center; vertical-align: middle; }
    tbody tr:nth-child(even) { background-color: #f9f9f9; }
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">
    <div class="card-section">
      <h2 class="fw-bold" style="color:#5955B3;">PRESTASI</h2>

      <!-- Statistik -->
      <div class="stats">
        <div class="stat-card">PRESTASI DI UNGGAH <span>24</span></div>
        <div class="stat-card">PRESTASI DI UPDATE <span>12</span></div>
        <div class="stat-card">PRESTASI DI HAPUS <span>5</span></div>
      </div>

      <!-- Tombol Upload -->
      <button class="upload-btn" onclick="openPrestasiModal()">
        Upload <div class="plus-icon">+</div>
      </button>

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
        <tbody id="prestasiTableBody">
          @foreach($prestasi as $p)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ asset('storage/'.$p->gambar) }}" width="50"></td>
            <td>{{ $p->judul }}</td>
            <td>{{ Str::limit($p->konten, 50) }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>
              <button onclick="viewPrestasi({{ $p->id }})" class="btn btn-sm btn-info">👁️</button>
              <button onclick="editPrestasi({{ $p->id }})" class="btn btn-sm btn-warning">✏️</button>
              <button onclick="deletePrestasi({{ $p->id }})" class="btn btn-sm btn-danger">🗑️</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Form Prestasi -->
<div class="modal fade" id="prestasiModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="prestasiForm" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-content">
        <div class="modal-header"><h5 id="prestasiModalTitle"></h5></div>
        <div class="modal-body">
          <input type="hidden" name="id" id="prestasiId">
          <div class="mb-3"><label>Judul</label><input type="text" class="form-control" name="judul" id="prestasiJudul"></div>
          <div class="mb-3"><label>Tanggal</label><input type="date" class="form-control" name="tanggal" id="prestasiTanggal"></div>
          <div class="mb-3"><label>Konten</label><textarea class="form-control" name="konten" id="prestasiKonten"></textarea></div>
          <div class="mb-3"><label>Gambar</label><input type="file" class="form-control" name="gambar" id="prestasiGambar"></div>
          <div class="mb-3" id="prestasiPreview" style="display:none"><img id="previewPrestasiImg" width="100"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" id="savePrestasiBtn">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal Detail Prestasi -->
<div class="modal fade" id="prestasiDetailModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-3">
      <div id="prestasiDetailContent"></div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Open modal tambah
function openPrestasiModal() {
  document.getElementById('prestasiModalTitle').innerText = "Tambah Prestasi";
  document.getElementById('prestasiForm').reset();
  document.getElementById('prestasiId').value = "";
  new bootstrap.Modal(document.getElementById('prestasiModal')).show();
}

// Edit
function editPrestasi(id) {
  fetch(`/prestasi/${id}/edit`)
  .then(res => res.json())
  .then(data => {
    document.getElementById('prestasiModalTitle').innerText = "Edit Prestasi";
    document.getElementById('prestasiId').value = data.id;
    document.getElementById('prestasiJudul').value = data.judul;
    document.getElementById('prestasiTanggal').value = data.tanggal;
    document.getElementById('prestasiKonten').value = data.konten;
    if (data.gambar) {
      document.getElementById('previewPrestasiImg').src = "/storage/" + data.gambar;
      document.getElementById('prestasiPreview').style.display = "block";
    }
    new bootstrap.Modal(document.getElementById('prestasiModal')).show();
  });
}

// Detail
function viewPrestasi(id) {
  fetch(`/prestasi/${id}`)
  .then(res => res.json())
  .then(data => {
    document.getElementById('prestasiDetailContent').innerHTML = `
      <h3>${data.judul}</h3>
      <p><b>Tanggal:</b> ${data.tanggal}</p>
      ${data.gambar ? `<img src="/storage/${data.gambar}" class="img-fluid mb-2">` : ''}
      <p>${data.konten}</p>
    `;
    new bootstrap.Modal(document.getElementById('prestasiDetailModal')).show();
  });
}

// Hapus
function deletePrestasi(id) {
  if (!confirm("Yakin hapus?")) return;
  fetch(`/prestasi/${id}`, {
    method: "DELETE",
    headers: { "X-CSRF-TOKEN": csrfToken }
  }).then(res => {
    if (res.ok) {
      location.reload();
    } else {
      alert("Gagal hapus");
    }
  });
}

// Preview gambar
document.getElementById('prestasiGambar').addEventListener('change', e => {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = ev => {
      document.getElementById('previewPrestasiImg').src = ev.target.result;
      document.getElementById('prestasiPreview').style.display = "block";
    };
    reader.readAsDataURL(file);
  }
});

// ✅ Tambahan: handle submit form (tanpa mengubah kode lama)
document.getElementById('prestasiForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const id = document.getElementById('prestasiId').value;
  const formData = new FormData(this);

  let url = "/prestasi";
  let method = "POST";

  if (id) {
    url = `/prestasi/${id}`;
    formData.append('_method', 'PUT'); // Laravel akan anggap ini PUT
  }

  fetch(url, {
    method: method,
    headers: { "X-CSRF-TOKEN": csrfToken },
    body: formData
  })
  .then(res => {
    if (res.ok) {
      location.reload();
    } else {
      alert("Terjadi kesalahan saat menyimpan.");
    }
  })
  .catch(err => {
    console.error(err);
    alert("Gagal menyimpan data.");
  });
});
</script>
</body>
</html>
