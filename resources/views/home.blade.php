<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #5C52A2;
      min-height: 100vh;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #5C52A2;
      color: white;
      border-radius: 0 2rem 2rem 0;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      opacity: 0.8;
    }
    .content-container {
      border-radius: 2rem;
      background-color: white;
      min-height: 95vh;
      margin: 1rem 1rem 1rem 0;
      padding: 2rem;
    }
    .welcome-card {
      background-color: #8A7BEB;
      color: white;
      border-radius: 1rem;
      overflow: hidden;
    }
    .welcome-card img {
      max-height: 120px;
      object-fit: cover;
    }
    .menu-icon {
      width: 20px;
      margin-right: 10px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row flex-nowrap">
    <!-- Sidebar -->
    <div class="col-auto sidebar d-flex flex-column justify-content-between py-4 px-3">
      <div>
        <div class="text-center mb-4">
          <img src="https://dummyimage.com/100x40/fff/000&text=webstome" alt="webstome logo" class="img-fluid rounded bg-white p-2">
        </div>

        <ul class="nav flex-column gap-3">
          @for($i = 0; $i < 6; $i++)
          <li class="nav-item">
            <a href="#" class="d-flex align-items-center fw-bold">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/dashboard-layout.png" class="menu-icon" alt=""> Dashboard
            </a>
          </li>
          @endfor
        </ul>
      </div>

      <div class="mt-4">
        <ul class="nav flex-column gap-3">
          <li class="nav-item">
            <a href="#" class="d-flex align-items-center fw-normal">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/settings.png" class="menu-icon" alt=""> Webstome
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="d-flex align-items-center fw-normal">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/logout-rounded-left.png" class="menu-icon" alt=""> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col content-container">
      <div class="welcome-card d-flex justify-content-between align-items-center p-4 mb-4">
        <div>
          <h4>Hello, Admin!</h4>
          <p class="mb-0">Update website sekolahmu, bersama webstome!</p>
        </div>
        <img src="https://dummyimage.com/150x100/8A7BEB/ffffff&text=Image" alt="illustration">
      </div>

      @yield('content')
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
