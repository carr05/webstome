<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - GURU</title>
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
    /* Hero Section */
    .hero {
      position: relative;
      background: url('/images/hero-default.jpg') center/cover no-repeat;
      height: 300px;
      border-radius: 20px;
      margin-bottom: 25px;
      overflow: hidden;
    }
    .hero-overlay {
      background: rgba(0, 0, 0, 0.4);
      position: absolute;
      inset: 0;
    }
    .hero-content {
      position: relative;
      z-index: 1;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }
    .hero-logo {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
      background: white;
      border-radius: 50%;
      padding: 10px;
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
  </style>
</head>
<body>

@include('layouts.main')

<div class="main-container">
  <div class="main-content">

    <!-- Hero Section -->
    <div class="hero" style="background-image:url('/images/hero-default.jpg')">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <img src="/images/logo-sekolah.png" alt="Logo Sekolah" class="hero-logo">
        <h2 class="fw-bold">Selamat Datang di Dashboard Guru</h2>
        <p>Kelola data guru dengan mudah</p>
      </div>
    </div>

    <!-- Form Edit Hero -->
    <div class="card-section mb-4">
      <h5 class="fw-bold" style="color:#5955B3;">Edit Hero</h5>
      <form action="/update-hero" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Ganti Logo Sekolah</label>
          <input type="file" name="logo" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Ganti Gambar Background Hero</label>
          <input type="file" name="background" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    
    

</body>
</html>
