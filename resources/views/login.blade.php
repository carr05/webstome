<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Welcome Back</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background-color: #fff;
      border-radius: 12px;
      padding: 40px;
      max-width: 900px;
      width: 100%;
    }

    .form-title {
      font-weight: bold;
      font-size: 24px;
    }

    .form-subtitle {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .btn-login {
      width: 100%;
      background-color: #6c63ff;
      color: #fff;
      border: none;
    }

    .btn-login:hover {
      background-color: #574dcf;
    }

    .pict-login {
      max-width: 100%;
      height: auto;
    }

    @media (max-width: 768px) {
      .pict-login {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container login-container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="{{ asset('assets/login1.png') }}" alt="Gambar Login" class="pict-login img-fluid">
      </div>

      <div class="col-md-6">
        <h2 class="form-title text-center">Login</h2>
        <p class="form-subtitle text-center">Welcome back! Please login to your account.</p>

        @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
          @csrf
          <div class="mb-3 text-start">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username@gmail.com" required>
          </div>

          <div class="mb-4 text-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="••••••••" required>
          </div>

          <button type="submit" class="btn btn-login">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
