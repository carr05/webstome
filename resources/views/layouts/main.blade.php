<style>
  /* Sidebar */
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 240px;
    background: #5955B3;
    color: #fff;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: auto;
    z-index: 10;
  }

  .sidebar a {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    border-radius: 10px;
    margin: 4px 12px;
    transition: all 0.3s ease;
  }

  .sidebar a:hover {
    background-color: rgba(255, 255, 255, 0.15);
    transform: translateX(5px);
  }

  .sidebar a.active {
    background-color: rgba(255, 255, 255, 0.25);
    border-left: 4px solid #fff;
  }

  .sidebar-bottom {
    padding: 20px;
    font-size: 0.9rem;
    border-top: 1px solid rgba(255,255,255,0.1);
  }

  /* Responsive */
  @media (max-width: 992px) {
    .sidebar {
      width: 200px;
    }
  }

  @media (max-width: 768px) {
    .sidebar {
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }
    .sidebar.show {
      transform: translateX(0);
    }
  }
</style>

<div class="sidebar" id="sidebar">
  <div>
    <h5 class="text-center mb-4">🎓 Webstome</h5>
    <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}"><i class="bi bi-grid me-2"></i> Dashboard</a>
    <a href="{{ url('/layout') }}"><i class="bi bi-people me-2"></i> Layout</a>
    <a href="{{ url('/berita') }}"><i class="bi bi-newspaper me-2"></i> Berita</a>
    <a href="{{ url('/agenda') }}"><i class="bi bi-calendar me-2"></i> Agenda</a>
    <a href="{{ url('/galeri') }}"><i class="bi bi-images me-2"></i> Galeri</a>
    <a href="{{ url('/jurusan') }}"><i class="bi bi-newspaper me-2"></i> Jurusan</a>
    <a href="{{ url('/prestasi') }}"><i class="bi bi-trophy me-2"></i> Prestasi</a>
    <a href="{{ url('/guru') }}"><i class="bi bi-trophy me-2"></i> Guru</a>
    <a href="{{ url('/staff') }}"><i class="bi bi-trophy me-2"></i> Staff</a>
    <a href="{{ url('/alumni') }}"><i class="bi bi-trophy me-2"></i> Alumni</a>
    <a href="{{ url('/ekstrakurikuler') }}"><i class="bi bi-trophy me-2"></i> Ekstrakurikuler</a>
    <a href="{{ url('/karya') }}"><i class="bi bi-trophy me-2"></i> Karya</a>
  </div>
  <div class="sidebar-bottom">
    <a href="{{ url('/pengaturan') }}"><i class="bi bi-gear me-2"></i> Pengaturan</a>
    <a href="{{ url('/logout') }}"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
  </div>
</div>