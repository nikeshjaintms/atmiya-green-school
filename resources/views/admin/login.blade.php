<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0097A7, #006064); /* Based on logo's teal tones */
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
      max-width: 420px;
      width: 100%;
      background-color: #ffffff;
      border: none;
      border-radius: 15px;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
    }

    .login-card .card-body {
      padding: 2rem;
    }

    .login-card .form-control {
      border-radius: 10px;
    }

    .logo {
      width: 80px;
      height: auto;
      margin-bottom: 1rem;
    }

    .btn-primary {
      background-color: #d32f2f; /* Red from logo */
      border-color: #d32f2f;
    }

    .btn-primary:hover {
      background-color: #b71c1c;
      border-color: #b71c1c;
    }

    h4 {
      color: #006064; /* Deep blue tone for heading */
    }
  </style>
</head>
<body>

  <div class="card login-card">
    <div class="card-body text-center">
      <img src="/mnt/data/1c909d39-7df9-4a64-b162-784e7aec3cd9.png" alt="Admin Logo" class="logo">
      <h4 class="mb-4">Admin Panel Login</h4>

      <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="admin@example.com" required>
        </div>

        <div class="mb-3 text-start">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

    </div>
  </div>

</body>
</html>
