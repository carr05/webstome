<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }

    h2 {
      color: #5955B3;
      font-weight: 700;
    }

    .card {
      border: none;
      border-radius: 15px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(89, 85, 179, 0.3);
    }

    .btn-primary {
      background-color: #5955B3;
      border: none;
    }

    .btn-primary:hover {
      background-color: #4743a6;
    }

    .demo-preview {
      margin-top: 40px;
    }

    iframe {
      border-radius: 15px;
      border: 3px solid #5955B3;
      width: 100%;
      height: 450px;
    }

    .selected {
      border: 2px solid #5955B3 !important;
      box-shadow: 0 8px 20px rgba(89, 85, 179, 0.5) !important;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="text-center mb-4">Pilih Layout Website</h2>

  <div class="row justify-content-center g-4">
    <!-- Layout 1 -->
    <div class="col-md-4">
      <div class="card shadow p-4 text-center layout-card" onclick="showPreview('layout1')">
        <h5>Layout 1</h5>
        <img src="/images/layout1-preview.jpg" alt="Preview Layout 1" class="img-fluid rounded my-3">
        <form action="{{ route('tampilan.update') }}" method="POST">
          @csrf
          <input type="hidden" name="layout" value="layout1">
          <button type="submit" class="btn btn-primary w-100">Gunakan Layout 1</button>
        </form>
      </div>
    </div>

    <!-- Layout 2 -->
    <div class="col-md-4">
      <div class="card shadow p-4 text-center layout-card" onclick="showPreview('layout2')">
        <h5>Layout 2</h5>
        <img src="/images/layout2-preview.jpg" alt="Preview Layout 2" class="img-fluid rounded my-3">
        <form action="{{ route('tampilan.update') }}" method="POST">
          @csrf
          <input type="hidden" name="layout" value="layout2">
          <button type="submit" class="btn btn-primary w-100">Gunakan Layout 2</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Live Demo -->
  <div class="demo-preview text-center">
    <h4 class="mb-3 text-secondary">Live Preview</h4>
    <iframe id="previewFrame" src="" class="shadow"></iframe>
  </div>
</div>

<script>
  function showPreview(layout) {
    // Hapus class selected dari semua card
    document.querySelectorAll('.layout-card').forEach(card => {
      card.classList.remove('selected');
    });

    // Tambahkan class selected ke card yg dipilih
    event.currentTarget.classList.add('selected');

    // Tampilkan iframe preview sesuai layout
    if (layout === 'layout1') {
      document.getElementById('previewFrame').src = "/layout1/index.blade.php";
    } else if (layout === 'layout2') {
      document.getElementById('previewFrame').src = "/layout2/index.blade.php";
    }
  }
</script>

</body>
</html>
